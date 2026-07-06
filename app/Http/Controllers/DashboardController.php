<?php

namespace App\Http\Controllers;

use App\Models\InvestmentPlan;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $investments  = $user->investments()->with('plan')->latest()->get();
        $transactions = $user->transactions()->latest()->take(10)->get();
        $referrals    = $user->referrals()->with('referred')->get();
        $plans        = InvestmentPlan::active()->orderBy('min_amount')->get();

        $activeInvestments = $user->activeInvestments()->count();
        $totalReferrals    = $referrals->count();

        $totalInvested = $user->investments()->sum('amount');
        $totalEarned   = $user->transactions()
            ->whereIn('type', ['roi', 'referral_bonus'])
            ->where('status', 'approved')
            ->sum('amount');

        return view('dashboard.index', compact(
            'user',
            'investments',
            'transactions',
            'referrals',
            'plans',
            'activeInvestments',
            'totalReferrals',
            'totalInvested',
            'totalEarned'
        ));
    }

    public function deposit(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'amount'         => 'required|numeric|min:10',
            'payment_method' => 'required|string|max:50',
        ]);

        $transaction = Transaction::create([
            'user_id'        => Auth::id(),
            'type'           => 'deposit',
            'amount'         => $request->amount,
            'status'         => 'pending',
            'payment_method' => $request->payment_method,
        ]);

        return redirect()->route('dashboard.deposit.instructions', $transaction->id);
    }

    public function depositInstructions(Transaction $transaction)
    {
        if ($transaction->user_id !== Auth::id() || $transaction->type !== 'deposit') {
            abort(403);
        }

        $paymentInfo = config('payment.' . $transaction->payment_method)
            ?? config('payment.bitcoin');

        return view('dashboard.deposit-instructions', compact('transaction', 'paymentInfo'));
    }

    public function uploadProof(\Illuminate\Http\Request $request, Transaction $transaction)
    {
        if ($transaction->user_id !== Auth::id() || $transaction->type !== 'deposit') {
            abort(403);
        }

        $request->validate([
            'proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
        ]);

        $path = $request->file('proof')->store('proofs', 'public');

        $transaction->update(['proof_path' => $path]);

        return back()->with('success', 'Payment proof uploaded successfully. Your deposit will be reviewed within 24 hours.');
    }

    public function withdraw(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'amount'         => 'required|numeric|min:10',
            'payment_method' => 'required|string|max:200',
        ]);

        $user = Auth::user();

        if ($request->amount > $user->balance) {
            return back()->withErrors(['amount' => 'Insufficient balance.']);
        }

        // Deduct immediately to hold the funds — refunded if admin rejects
        $user->decrement('balance', $request->amount);

        Transaction::create([
            'user_id'        => $user->id,
            'type'           => 'withdrawal',
            'amount'         => $request->amount,
            'status'         => 'pending',
            'payment_method' => $request->payment_method,
        ]);

        return back()->with('success', 'Withdrawal request submitted. Processing within 48 hours.');
    }

    public function invest(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'plan_id' => 'required|exists:investment_plans,id',
            'amount'  => 'required|numeric|min:1',
        ]);

        $user = Auth::user();
        $plan = InvestmentPlan::findOrFail($request->plan_id);

        if ($request->amount < $plan->min_amount) {
            return back()->withErrors(['amount' => "Minimum investment for this plan is $" . number_format($plan->min_amount, 2)]);
        }

        if ($plan->max_amount && $request->amount > $plan->max_amount) {
            return back()->withErrors(['amount' => "Maximum investment for this plan is $" . number_format($plan->max_amount, 2)]);
        }

        if ($user->balance < $request->amount) {
            return back()->withErrors(['amount' => 'Insufficient balance. Please deposit funds first.']);
        }

        $roi = $request->amount * ($plan->roi_percent / 100);

        $user->investments()->create([
            'plan_id'    => $plan->id,
            'amount'     => $request->amount,
            'roi_amount' => $roi,
            'status'     => 'active',
            'started_at' => now(),
            'ends_at'    => now()->addDays($plan->duration_days),
        ]);

        $user->decrement('balance', $request->amount);

        return back()->with('success', "Investment of $" . number_format($request->amount, 2) . " in {$plan->name} plan activated!");
    }
}
