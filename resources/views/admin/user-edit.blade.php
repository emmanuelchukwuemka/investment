@extends('admin.layout')
@section('title', 'Edit User')

@section('content')
<div style="margin-bottom:18px;">
    <a href="{{ route('admin.users') }}" class="btn btn-ghost btn-sm" style="text-decoration:none;">&larr; Back to Users</a>
</div>

<div style="display:grid;grid-template-columns:1fr 1fr;gap:22px;align-items:start;" class="edit-grid">

    <!-- Fund Account -->
    <div class="card">
        <div class="card-head" style="background:#0d1b3e;border-radius:12px 12px 0 0;">
            <h5 style="color:#fff;">Fund Account</h5>
        </div>
        <div class="card-body">
            <div style="background:#f8f9fc;border-radius:10px;padding:18px 20px;margin-bottom:22px;">
                <div style="font-size:11px;font-weight:700;color:#888;text-transform:uppercase;letter-spacing:.5px;margin-bottom:6px;">Current Balance</div>
                <div style="font-size:32px;font-weight:800;color:#0d1b3e;">${{ number_format($user->balance,2) }}</div>
                <div style="font-size:12px;color:#aaa;margin-top:4px;">{{ $user->name }}</div>
            </div>

            <form action="{{ route('admin.users.fund', $user) }}" method="POST">
                @csrf
                <div class="fgroup">
                    <label class="flabel">Amount (USD)</label>
                    <input type="number" name="amount" step="0.01" min="0.01" placeholder="Enter amount..."
                        class="finput" style="font-size:20px;font-weight:700;padding:12px 14px;" required>
                </div>
                <div class="fgroup">
                    <label class="flabel">Action</label>
                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-top:4px;">
                        <label style="display:flex;align-items:flex-start;gap:9px;padding:12px 14px;
                            border:2px solid #16a34a;border-radius:9px;background:#f0fdf4;cursor:pointer;">
                            <input type="radio" name="action" value="credit" checked style="margin-top:3px;flex-shrink:0;">
                            <div>
                                <div style="font-weight:700;color:#16a34a;font-size:13px;">Credit</div>
                                <div style="font-size:11px;color:#888;margin-top:2px;">Add to balance</div>
                            </div>
                        </label>
                        <label style="display:flex;align-items:flex-start;gap:9px;padding:12px 14px;
                            border:2px solid #dc2626;border-radius:9px;background:#fef2f2;cursor:pointer;">
                            <input type="radio" name="action" value="deduct" style="margin-top:3px;flex-shrink:0;">
                            <div>
                                <div style="font-weight:700;color:#dc2626;font-size:13px;">Deduct</div>
                                <div style="font-size:11px;color:#888;margin-top:2px;">Remove from balance</div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="fgroup">
                    <label class="flabel">Note (optional)</label>
                    <input type="text" name="notes" placeholder="e.g. Manual deposit, bonus..." class="finput">
                </div>
                <button type="submit" class="btn btn-navy" style="width:100%;justify-content:center;padding:13px;font-size:15px;">
                    Apply Fund
                </button>
            </form>
        </div>
    </div>

    <!-- Info + Role -->
    <div style="display:flex;flex-direction:column;gap:20px;">
        <div class="card">
            <div class="card-head"><h5>User Profile</h5></div>
            <div class="card-body">
                <div style="display:flex;align-items:center;gap:14px;padding-bottom:18px;margin-bottom:18px;border-bottom:1px solid #f2f2f2;">
                    <div style="width:52px;height:52px;border-radius:50%;background:#e8edf8;flex-shrink:0;
                        display:flex;align-items:center;justify-content:center;font-size:20px;font-weight:800;color:#0d1b3e;">
                        {{ strtoupper(substr($user->name,0,1)) }}
                    </div>
                    <div>
                        <div style="font-size:16px;font-weight:700;color:#0d1b3e;">{{ $user->name }}</div>
                        <div style="font-size:13px;color:#888;">{{ $user->email }}</div>
                    </div>
                </div>
                <table style="width:100%;font-size:13px;border-collapse:collapse;">
                    @foreach([
                        ['Phone',         $user->phone    ?? '—'],
                        ['Country',       $user->country  ?? '—'],
                        ['Referral Code', $user->referral_code],
                        ['Joined',        $user->created_at->format('M d, Y')],
                        ['Balance',       '$'.number_format($user->balance,2)],
                    ] as [$lbl,$val])
                    <tr>
                        <td style="color:#aaa;padding:7px 0;width:110px;font-size:12px;">{{ $lbl }}</td>
                        <td style="font-weight:600;color:#222;">{{ $val }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-head"><h5>Change Role</h5></div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-err">{{ $errors->first() }}</div>
                @endif
                <form action="{{ route('admin.users.update', $user) }}" method="POST">
                    @csrf
                    <input type="hidden" name="balance" value="{{ $user->balance }}">
                    <div class="fgroup">
                        <label class="flabel">Role</label>
                        <select name="role" class="finput">
                            <option value="user"  {{ $user->role==='user'  ?'selected':'' }}>User</option>
                            <option value="admin" {{ $user->role==='admin' ?'selected':'' }}>Administrator</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-gray">Update Role</button>
                </form>
            </div>
        </div>
    </div>

</div>

<!-- Manage Investments -->
<div class="card" style="margin-top:22px;">
    <div class="card-head" style="background:#065f46;border-radius:12px 12px 0 0;">
        <h5 style="color:#fff;">Manage Investments</h5>
    </div>
    <div class="card-body">

        <!-- Add new investment -->
        <form action="{{ route('admin.users.invest', $user) }}" method="POST" style="margin-bottom:28px;">
            @csrf
            <div style="display:grid;grid-template-columns:1fr 1fr 1fr 1fr auto;gap:12px;align-items:end;" class="inv-form-grid">
                <div class="fgroup" style="margin:0">
                    <label class="flabel">Plan</label>
                    <select name="plan_id" class="finput" required>
                        <option value="">Select plan</option>
                        @foreach($plans as $plan)
                        <option value="{{ $plan->id }}">{{ $plan->name }} ({{ $plan->roi_percent }}%)</option>
                        @endforeach
                    </select>
                </div>
                <div class="fgroup" style="margin:0">
                    <label class="flabel">Amount (USD)</label>
                    <input type="number" name="amount" step="0.01" min="0.01" placeholder="e.g. 1000" class="finput" required>
                </div>
                <div class="fgroup" style="margin:0">
                    <label class="flabel">Status</label>
                    <select name="status" class="finput">
                        <option value="active">Active</option>
                        <option value="completed">Completed</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>
                <div class="fgroup" style="margin:0">
                    <label class="flabel">Ends At (optional)</label>
                    <input type="date" name="ends_at" class="finput">
                </div>
                <button type="submit" class="btn btn-navy" style="white-space:nowrap;padding:10px 18px;">+ Add</button>
            </div>
        </form>

        <!-- Existing investments table -->
        @if($investments->isEmpty())
        <div style="text-align:center;padding:28px;color:#aaa;font-size:14px;">No investments for this user yet.</div>
        @else
        <div style="overflow-x:auto;border-radius:10px;border:1px solid #e5e7eb;">
            <table style="width:100%;border-collapse:collapse;font-size:13px;">
                <thead>
                    <tr style="background:#0d1b3e;color:#fff;">
                        <th style="padding:11px 14px;text-align:left;">Plan</th>
                        <th style="padding:11px 14px;text-align:left;">Amount</th>
                        <th style="padding:11px 14px;text-align:left;">ROI</th>
                        <th style="padding:11px 14px;text-align:left;">Status</th>
                        <th style="padding:11px 14px;text-align:left;">Ends At</th>
                        <th style="padding:11px 14px;text-align:left;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($investments as $inv)
                    <tr style="border-bottom:1px solid #f0f0f0;">
                        <td style="padding:10px 14px;font-weight:600;color:#0d1b3e;">{{ $inv->plan->name ?? '—' }}</td>
                        <td style="padding:10px 14px;">${{ number_format($inv->amount, 2) }}</td>
                        <td style="padding:10px 14px;color:#16a34a;font-weight:700;">${{ number_format($inv->roi_amount, 2) }}</td>
                        <td style="padding:10px 14px;">
                            @if($inv->status === 'active')
                                <span style="background:#d1fae5;color:#065f46;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:700;">Active</span>
                            @elseif($inv->status === 'completed')
                                <span style="background:#dbeafe;color:#1e40af;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:700;">Completed</span>
                            @else
                                <span style="background:#fee2e2;color:#991b1b;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:700;">{{ ucfirst($inv->status) }}</span>
                            @endif
                        </td>
                        <td style="padding:10px 14px;color:#888;">{{ $inv->ends_at ? $inv->ends_at->format('M d, Y') : '—' }}</td>
                        <td style="padding:10px 14px;">
                            @if($inv->status === 'active')
                            <div style="display:flex;gap:6px;">
                                <form action="{{ route('admin.investments.complete', $inv) }}" method="POST">
                                    @csrf
                                    <button type="submit" style="background:#1e40af;color:#fff;border:none;padding:5px 12px;border-radius:6px;font-size:12px;cursor:pointer;font-weight:600;">Complete</button>
                                </form>
                                <form action="{{ route('admin.investments.cancel', $inv) }}" method="POST">
                                    @csrf
                                    <button type="submit" style="background:#dc2626;color:#fff;border:none;padding:5px 12px;border-radius:6px;font-size:12px;cursor:pointer;font-weight:600;">Cancel</button>
                                </form>
                            </div>
                            @else
                            <span style="color:#ccc;font-size:12px;">—</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>

<style>
@media(max-width:700px){.edit-grid{grid-template-columns:1fr!important}.inv-form-grid{grid-template-columns:1fr 1fr!important}}
</style>
@endsection
