@extends('admin.layout')
@section('title', 'Transactions')

@section('content')
<div class="card">
    <div class="card-head">
        <h5>All Transactions</h5>
    </div>
    <div class="card-body" style="padding-bottom:0;">
        <form method="GET" class="fbar">
            <select name="type">
                <option value="">All Types</option>
                <option value="deposit"         {{ request('type')=='deposit'         ?'selected':'' }}>Deposit</option>
                <option value="withdrawal"      {{ request('type')=='withdrawal'      ?'selected':'' }}>Withdrawal</option>
                <option value="roi"             {{ request('type')=='roi'             ?'selected':'' }}>ROI</option>
                <option value="referral_bonus"  {{ request('type')=='referral_bonus'  ?'selected':'' }}>Referral Bonus</option>
                <option value="admin_credit"    {{ request('type')=='admin_credit'    ?'selected':'' }}>Admin Credit</option>
                <option value="admin_deduction" {{ request('type')=='admin_deduction' ?'selected':'' }}>Admin Deduction</option>
            </select>
            <select name="status">
                <option value="">All Statuses</option>
                <option value="pending"  {{ request('status')=='pending'  ?'selected':'' }}>Pending</option>
                <option value="approved" {{ request('status')=='approved' ?'selected':'' }}>Approved</option>
                <option value="rejected" {{ request('status')=='rejected' ?'selected':'' }}>Rejected</option>
            </select>
            <button type="submit" class="btn btn-navy btn-sm">Filter</button>
            <a href="{{ route('admin.transactions') }}" class="btn btn-ghost btn-sm">Clear</a>
        </form>
    </div>
    <div class="tbl-scroll">
        <table>
            <thead>
                <tr>
                    <th>Reference</th><th>User</th><th>Type</th><th>Amount</th>
                    <th>Method</th><th>Proof</th><th>Status</th><th>Date</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($transactions as $txn)
                <tr>
                    <td class="td-mono">{{ $txn->reference }}</td>
                    <td>
                        <div class="td-name">{{ $txn->user->name ?? '—' }}</div>
                        <div class="td-sub">{{ $txn->user->email ?? '' }}</div>
                    </td>
                    <td style="font-size:12px;">{{ ucfirst(str_replace('_',' ',$txn->type)) }}</td>
                    <td class="td-amt">${{ number_format($txn->amount,2) }}</td>
                    <td style="font-size:12px;color:#777;">{{ $txn->payment_method ?? '—' }}</td>
                    <td>
                        @if($txn->proof_path)
                            <a href="{{ route('admin.transactions.proof', $txn) }}" target="_blank" class="btn btn-ghost btn-sm">View</a>
                        @else
                            <span style="color:#ccc;font-size:12px;">None</span>
                        @endif
                    </td>
                    <td><span class="badge b-{{ $txn->status }}">{{ ucfirst($txn->status) }}</span></td>
                    <td style="font-size:11px;color:#aaa;white-space:nowrap;">{{ $txn->created_at->format('M d, Y H:i') }}</td>
                    <td style="white-space:nowrap;">
                        @if($txn->status === 'pending')
                        <form action="{{ route('admin.transactions.approve', $txn) }}" method="POST" style="display:inline;" onsubmit="return confirm('Approve this transaction?')">
                            @csrf<button class="btn btn-green btn-sm">Approve</button>
                        </form>
                        <form action="{{ route('admin.transactions.reject', $txn) }}" method="POST" style="display:inline;" onsubmit="return confirm('Reject?')">
                            @csrf<button class="btn btn-red btn-sm">Reject</button>
                        </form>
                        @else
                        <span style="color:#ccc;font-size:12px;">—</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr><td colspan="9" style="text-align:center;color:#bbb;padding:40px;">No transactions found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="pagination">{{ $transactions->withQueryString()->links() }}</div>
</div>
@endsection
