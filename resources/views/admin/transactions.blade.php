@extends('admin.layout')
@section('title', 'Transactions')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>All Transactions</h5>
    </div>
    <div class="card-body" style="padding-bottom:0;">
        <form method="GET" class="filter-bar">
            <select name="type">
                <option value="">All Types</option>
                <option value="deposit"        {{ request('type')=='deposit'        ?'selected':'' }}>Deposit</option>
                <option value="withdrawal"     {{ request('type')=='withdrawal'     ?'selected':'' }}>Withdrawal</option>
                <option value="roi"            {{ request('type')=='roi'            ?'selected':'' }}>ROI</option>
                <option value="referral_bonus" {{ request('type')=='referral_bonus' ?'selected':'' }}>Referral Bonus</option>
                <option value="admin_credit"   {{ request('type')=='admin_credit'   ?'selected':'' }}>Admin Credit</option>
                <option value="admin_deduction"{{ request('type')=='admin_deduction'?'selected':'' }}>Admin Deduction</option>
            </select>
            <select name="status">
                <option value="">All Statuses</option>
                <option value="pending"  {{ request('status')=='pending'  ?'selected':'' }}>Pending</option>
                <option value="approved" {{ request('status')=='approved' ?'selected':'' }}>Approved</option>
                <option value="rejected" {{ request('status')=='rejected' ?'selected':'' }}>Rejected</option>
            </select>
            <button type="submit" class="btn btn-primary btn-sm">Filter</button>
            <a href="{{ route('admin.transactions') }}" class="btn btn-outline btn-sm">Clear</a>
        </form>
    </div>
    <div class="tbl-wrap">
        <table>
            <thead>
                <tr>
                    <th>Reference</th>
                    <th>User</th>
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Method</th>
                    <th>Proof</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($transactions as $txn)
                <tr>
                    <td style="font-size:11px;font-family:monospace;color:#666;">{{ $txn->reference }}</td>
                    <td>
                        <div style="font-weight:600;">{{ $txn->user->name ?? '—' }}</div>
                        <div style="font-size:11px;color:#888;">{{ $txn->user->email ?? '' }}</div>
                    </td>
                    <td><span class="badge badge-{{ $txn->type }}">{{ ucfirst(str_replace('_',' ',$txn->type)) }}</span></td>
                    <td style="font-weight:700;color:#072b5b;">${{ number_format($txn->amount,2) }}</td>
                    <td style="font-size:12px;color:#666;">{{ $txn->payment_method ?? '—' }}</td>
                    <td>
                        @if($txn->proof_path)
                            <a href="{{ route('admin.transactions.proof', $txn) }}" target="_blank" class="btn btn-outline btn-sm">&#128247; View</a>
                        @else
                            <span style="color:#ccc;font-size:12px;">None</span>
                        @endif
                    </td>
                    <td><span class="badge badge-{{ $txn->status }}">{{ ucfirst($txn->status) }}</span></td>
                    <td style="font-size:12px;color:#888;white-space:nowrap;">{{ $txn->created_at->format('M d, Y H:i') }}</td>
                    <td style="white-space:nowrap;">
                        @if($txn->status === 'pending')
                        <form action="{{ route('admin.transactions.approve', $txn) }}" method="POST" style="display:inline;" onsubmit="return confirm('Approve this transaction?')">
                            @csrf
                            <button class="btn btn-success btn-sm">Approve</button>
                        </form>
                        <form action="{{ route('admin.transactions.reject', $txn) }}" method="POST" style="display:inline;" onsubmit="return confirm('Reject this transaction?')">
                            @csrf
                            <button class="btn btn-danger btn-sm">Reject</button>
                        </form>
                        @else
                        <span style="color:#ccc;font-size:12px;">—</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr><td colspan="9" style="text-align:center;color:#aaa;padding:40px;">No transactions found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div style="padding:16px 24px;">{{ $transactions->withQueryString()->links() }}</div>
</div>
@endsection
