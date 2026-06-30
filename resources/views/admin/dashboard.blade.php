@extends('admin.layout')
@section('title', 'Dashboard')

@section('content')
<div class="topbar">
    <h4>Dashboard Overview</h4>
    <span style="font-size:13px;color:#888;">Welcome, {{ Auth::user()->name }}</span>
</div>

<div class="row row-gap-24 mb-32" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:20px;">
    <div class="stat-card">
        <div class="icon">&#128100;</div>
        <div class="value">{{ $totalUsers }}</div>
        <div class="label">Total Users</div>
    </div>
    <div class="stat-card">
        <div class="icon">&#9650;</div>
        <div class="value">${{ number_format($totalDeposited, 2) }}</div>
        <div class="label">Total Deposited</div>
    </div>
    <div class="stat-card">
        <div class="icon">&#9660;</div>
        <div class="value">${{ number_format($totalWithdrawn, 2) }}</div>
        <div class="label">Total Withdrawn</div>
    </div>
    <div class="stat-card">
        <div class="icon">&#9203;</div>
        <div class="value">{{ $pendingCount }}</div>
        <div class="label">Pending Transactions</div>
    </div>
    <div class="stat-card">
        <div class="icon">&#128200;</div>
        <div class="value">{{ $activeInvestments }}</div>
        <div class="label">Active Investments</div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Recent Transactions
        <a href="{{ route('admin.transactions') }}" style="font-size:13px;color:#1a73e8;text-decoration:none;">View all</a>
    </div>
    <div class="card-body" style="padding:0;">
        <table>
            <thead>
                <tr><th>Reference</th><th>User</th><th>Type</th><th>Amount</th><th>Method</th><th>Status</th><th>Date</th></tr>
            </thead>
            <tbody>
                @forelse($recentTxns as $txn)
                <tr>
                    <td style="font-size:11px;">{{ $txn->reference }}</td>
                    <td>{{ $txn->user->name ?? '—' }}</td>
                    <td>{{ ucfirst($txn->type) }}</td>
                    <td>${{ number_format($txn->amount, 2) }}</td>
                    <td>{{ $txn->payment_method ?? '—' }}</td>
                    <td><span class="badge-{{ $txn->status }}">{{ ucfirst($txn->status) }}</span></td>
                    <td>{{ $txn->created_at->format('M d, Y') }}</td>
                </tr>
                @empty
                <tr><td colspan="7" style="text-align:center;color:#888;">No transactions yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
