<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\InvestmentPlan;
use App\Models\Referral;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers        = User::where('role', '!=', 'admin')->count();
        $totalDeposited    = Transaction::where('type', 'deposit')->where('status', 'approved')->sum('amount');
        $totalWithdrawn    = Transaction::where('type', 'withdrawal')->where('status', 'approved')->sum('amount');
        $pendingCount      = Transaction::where('status', 'pending')->count();
        $activeInvestments = Investment::where('status', 'active')->count();
        $recentTxns        = Transaction::with('user')->latest()->take(10)->get();

        return view('admin.dashboard', compact(
            'totalUsers', 'totalDeposited', 'totalWithdrawn',
            'pendingCount', 'activeInvestments', 'recentTxns'
        ));
    }

    public function users(Request $request)
    {
        $users = User::where('role', '!=', 'admin')
            ->when($request->search, fn($q) => $q->where('name', 'like', "%{$request->search}%")
                ->orWhere('email', 'like', "%{$request->search}%"))
            ->latest()
            ->paginate(20);

        return view('admin.users', compact('users'));
    }

    public function userEdit(User $user)
    {
        return view('admin.user-edit', compact('user'));
    }

    public function userUpdate(Request $request, User $user)
    {
        $request->validate([
            'balance' => 'required|numeric|min:0',
            'role'    => 'required|in:user,admin',
        ]);

        $user->update([
            'balance' => $request->balance,
            'role'    => $request->role,
        ]);

        return redirect()->route('admin.users')->with('success', "User {$user->name} updated.");
    }

    public function fundAccount(Request $request, User $user)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'action' => 'required|in:credit,deduct',
            'notes'  => 'nullable|string|max:255',
        ]);

        $amount = (float) $request->amount;
        $notes  = $request->notes ?: ($request->action === 'credit' ? 'Admin credit' : 'Admin deduction');

        if ($request->action === 'credit') {
            $user->increment('balance', $amount);
            $type = 'admin_credit';
        } else {
            if ($user->balance < $amount) {
                return back()->with('error', "Cannot deduct \$$amount — user only has \${$user->balance}.");
            }
            $user->decrement('balance', $amount);
            $type = 'admin_deduction';
        }

        Transaction::create([
            'user_id'   => $user->id,
            'type'      => $type,
            'amount'    => $amount,
            'status'    => 'approved',
            'reference' => 'ADM-' . strtoupper(substr(md5(uniqid()), 0, 8)),
            'notes'     => $notes,
        ]);

        $label = $request->action === 'credit' ? "credited \$$amount to" : "deducted \$$amount from";
        return back()->with('success', "Successfully $label {$user->name}'s account.");
    }

    public function transactions(Request $request)
    {
        $transactions = Transaction::with('user')
            ->when($request->type,   fn($q) => $q->where('type', $request->type))
            ->when($request->status, fn($q) => $q->where('status', $request->status))
            ->latest()
            ->paginate(25);

        return view('admin.transactions', compact('transactions'));
    }

    public function approveTransaction(Transaction $transaction)
    {
        if ($transaction->status !== 'pending') {
            return back()->with('error', 'Transaction is not pending.');
        }

        $user = $transaction->user;

        if ($transaction->type === 'deposit') {
            $user->increment('balance', $transaction->amount);

            // Pay referral commissions — level 1 gets 10%, level 2 gets 10%
            $referrals = Referral::where('referred_id', $user->id)
                ->with('referrer')
                ->get();

            foreach ($referrals as $referral) {
                $rate = 0.10; // 10% for both levels
                $commission = round($transaction->amount * $rate, 2);

                if ($referral->referrer) {
                    $referral->referrer->increment('balance', $commission);
                    $referral->increment('commission_amount', $commission);

                    Transaction::create([
                        'user_id' => $referral->referrer_id,
                        'type'    => 'referral_bonus',
                        'amount'  => $commission,
                        'status'  => 'approved',
                        'notes'   => "Level {$referral->commission_level} referral bonus from {$user->name}'s deposit of \$" . number_format($transaction->amount, 2),
                    ]);

                    // Notify referrer
                    try {
                        Mail::raw(
                            "Hello {$referral->referrer->name},\n\nYou earned a referral commission of \$$commission from your referral {$user->name}'s deposit.\n\nYour new balance has been updated.\n\n— " . config('app.name'),
                            fn($m) => $m->to($referral->referrer->email)->subject('Referral Commission Earned — ' . config('app.name'))
                        );
                    } catch (\Exception $e) {}
                }
            }
        }

        // Withdrawal: balance already deducted when user submitted the request — nothing to do here

        $transaction->update(['status' => 'approved']);

        // Notify user
        try {
            $typeLabel = ucfirst($transaction->type);
            $subject   = "{$typeLabel} Approved — " . config('app.name');
            $body      = "Hello {$user->name},\n\nYour {$transaction->type} of \$" . number_format($transaction->amount, 2) . " (Ref: {$transaction->reference}) has been approved.\n\nYour account balance has been updated accordingly.\n\nLog in to view your dashboard: " . route('dashboard') . "\n\n— " . config('app.name');

            Mail::raw($body, fn($m) => $m->to($user->email)->subject($subject));
        } catch (\Exception $e) {}

        return back()->with('success', "Transaction {$transaction->reference} approved.");
    }

    public function rejectTransaction(Transaction $transaction)
    {
        if ($transaction->status !== 'pending') {
            return back()->with('error', 'Transaction is not pending.');
        }

        $transaction->update(['status' => 'rejected']);

        // Refund held balance if this was a withdrawal
        if ($transaction->type === 'withdrawal') {
            $transaction->user->increment('balance', $transaction->amount);
        }

        // Notify user
        try {
            $user      = $transaction->user;
            $typeLabel = ucfirst($transaction->type);
            $subject   = "{$typeLabel} Rejected — " . config('app.name');
            $body      = "Hello {$user->name},\n\nUnfortunately, your {$transaction->type} of \$" . number_format($transaction->amount, 2) . " (Ref: {$transaction->reference}) has been rejected.\n\nIf you believe this is an error, please contact support.\n\n— " . config('app.name');

            Mail::raw($body, fn($m) => $m->to($user->email)->subject($subject));
        } catch (\Exception $e) {}

        return back()->with('success', "Transaction {$transaction->reference} rejected.");
    }

    public function viewProof(Transaction $transaction)
    {
        if (!$transaction->proof_path || !Storage::disk('public')->exists($transaction->proof_path)) {
            abort(404, 'Proof not found.');
        }

        return response()->file(Storage::disk('public')->path($transaction->proof_path));
    }

    public function investments(Request $request)
    {
        $investments = Investment::with(['user', 'plan'])
            ->when($request->status, fn($q) => $q->where('status', $request->status))
            ->latest()
            ->paginate(25);

        return view('admin.investments', compact('investments'));
    }

    public function completeInvestment(Investment $investment)
    {
        if ($investment->status !== 'active') {
            return back()->with('error', 'Investment is not active.');
        }

        $investment->update(['status' => 'completed']);

        $investment->user->increment('balance', $investment->roi_amount);

        Transaction::create([
            'user_id' => $investment->user_id,
            'type'    => 'roi',
            'amount'  => $investment->roi_amount,
            'status'  => 'approved',
            'notes'   => "ROI payout for investment in {$investment->plan->name} plan.",
        ]);

        // Notify user
        try {
            $user    = $investment->user;
            $subject = "Investment Matured — ROI Credited | " . config('app.name');
            $body    = "Hello {$user->name},\n\nGreat news! Your investment of \$" . number_format($investment->amount, 2) . " in the {$investment->plan->name} plan has matured.\n\nROI credited to your balance: \$" . number_format($investment->roi_amount, 2) . "\n\nLog in to view your dashboard: " . route('dashboard') . "\n\n— " . config('app.name');

            Mail::raw($body, fn($m) => $m->to($user->email)->subject($subject));
        } catch (\Exception $e) {}

        return back()->with('success', "Investment completed. ROI of \${$investment->roi_amount} credited to user.");
    }
}
