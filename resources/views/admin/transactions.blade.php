@extends('admin.layout')
@section('title', 'Transactions')

@section('content')
<div class="topbar">
    <h4>Transactions</h4>
</div>

<div class="card">
    <div class="card-header">All Transactions</div>
    <div class="card-body">
        <form method="GET" class="filter-bar">
            <select name="type">
                <option value="">All Types</option>
                <option value="deposit"        {{ request('type')=='deposit'        ? 'selected':'' }}>Deposit</option>
                <option value="withdrawal"     {{ request('type')=='withdrawal'     ? 'selected':'' }}>Withdrawal</option>
                <option value="roi"            {{ request('type')=='roi'            ? 'selected':'' }}>ROI</option>
                <option value="referral_bonus" {{ request('type')=='referral_bonus' ? 'selected':'' }}>Referral Bonus</option>
            </select>
            <select name="status">
                <option value="">All Statuses</option>
                <option value="pending"  {{ request('status')=='pending'  ? 'selected':'' }}>Pending</option>
                <option value="approved" {{ request('status')=='approved' ? 'selected':'' }}>Approved</option>
                <option value="rejected" {{ request('status')=='rejected' ? 'selected':'' }}>Rejected</option>
            </select>
            <button type="submit">Filter</button>
            <a href="{{ route('admin.transactions') }}" style="padding:7px 16px;background:#eee;color:#333;border-radius:6px;text-decoration:none;font-size:13px;">Clear</a>
        </form>

        <table>
            <thead>
                <tr><th>Reference</th><th>User</th><th>Email</th><th>Type</th><th>Amount</th><th>Method / Wallet</th><th>Proof</th><th>Status</th><th>Date</th><th>Actions</th></tr>
            </thead>
            <tbody>
                @forelse($transactions as $txn)
                <tr>
                    <td style="font-size:11px;">{{ $txn->reference }}</td>
                    <td>{{ $txn->user->name ?? '—' }}</td>
                    <td style="font-size:12px;">{{ $txn->user->email ?? '—' }}</td>
                    <td>{{ ucfirst(str_replace('_', ' ', $txn->type)) }}</td>
                    <td><strong>${{ number_format($txn->amount, 2) }}</strong></td>
                    <td style="font-size:12px;">{{ $txn->payment_method ?? '—' }}</td>
                    <td>
                        @if($txn->proof_path)
                            <a href="{{ route('admin.transactions.proof', $txn) }}" target="_blank" style="color:#1a73e8;font-size:12px;text-decoration:none;">&#128247; View Proof</a>
                        @else
                            <span style="color:#ccc;font-size:12px;">No proof</span>
                        @endif
                    </td>
                    <td><span class="badge-{{ $txn->status }}">{{ ucfirst($txn->status) }}</span></td>
                    <td style="font-size:12px;">{{ $txn->created_at->format('M d, Y H:i') }}</td>
                    <td>
                        @if($txn->status === 'pending')
                        <form action="{{ route('admin.transactions.approve', $txn) }}" method="POST" style="display:inline;" onsubmit="return confirm('Approve this transaction?')">
                            @csrf
                            <button class="btn-sm btn-approve">Approve</button>
                        </form>
                        <form action="{{ route('admin.transactions.reject', $txn) }}" method="POST" style="display:inline;" onsubmit="return confirm('Reject this transaction?')">
                            @csrf
                            <button class="btn-sm btn-reject">Reject</button>
                        </form>
                        @else
                        <span style="color:#aaa;font-size:12px;">—</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr><td colspan="9" style="text-align:center;color:#888;">No transactions found.</td></tr>
                @endforelse
            </tbody>
        </table>

        <div style="margin-top:16px;">
            {{ $transactions->withQueryString()->links() }}
        </div>
    </div>
</div>
@endsection
