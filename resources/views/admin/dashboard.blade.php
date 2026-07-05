@extends('admin.layout')
@section('title', 'Dashboard')

@section('content')
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon navy">&#128100;</div>
        <div>
            <div class="stat-value">{{ $totalUsers }}</div>
            <div class="stat-label">Total Users</div>
        </div>
    </div>
    <div class="stat-card green">
        <div class="stat-icon green">&#9650;</div>
        <div>
            <div class="stat-value">${{ number_format($totalDeposited, 0) }}</div>
            <div class="stat-label">Total Deposited</div>
        </div>
    </div>
    <div class="stat-card red">
        <div class="stat-icon red">&#9660;</div>
        <div>
            <div class="stat-value">${{ number_format($totalWithdrawn, 0) }}</div>
            <div class="stat-label">Total Withdrawn</div>
        </div>
    </div>
    <div class="stat-card yellow">
        <div class="stat-icon yellow">&#9203;</div>
        <div>
            <div class="stat-value">{{ $pendingCount }}</div>
            <div class="stat-label">Pending Transactions</div>
        </div>
    </div>
    <div class="stat-card blue">
        <div class="stat-icon blue">&#128200;</div>
        <div>
            <div class="stat-value">{{ $activeInvestments }}</div>
            <div class="stat-label">Active Investments</div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5>Recent Transactions</h5>
        <a href="{{ route('admin.transactions') }}" class="btn btn-outline btn-sm">View All</a>
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
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse($recentTxns as $txn)
                <tr>
                    <td style="font-size:11px;font-family:monospace;color:#666;">{{ $txn->reference }}</td>
                    <td>
                        <div style="font-weight:600;font-size:13px;">{{ $txn->user->name ?? '—' }}</div>
                        <div style="font-size:11px;color:#888;">{{ $txn->user->email ?? '' }}</div>
                    </td>
                    <td>{{ ucfirst(str_replace('_',' ',$txn->type)) }}</td>
                    <td style="font-weight:700;color:#072b5b;">${{ number_format($txn->amount,2) }}</td>
                    <td style="font-size:12px;color:#666;">{{ $txn->payment_method ?? '—' }}</td>
                    <td><span class="badge badge-{{ $txn->status }}">{{ ucfirst($txn->status) }}</span></td>
                    <td style="font-size:12px;color:#888;">{{ $txn->created_at->format('M d, Y') }}</td>
                </tr>
                @empty
                <tr><td colspan="7" style="text-align:center;color:#aaa;padding:32px;">No transactions yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
