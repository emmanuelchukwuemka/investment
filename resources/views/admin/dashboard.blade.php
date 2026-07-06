@extends('admin.layout')
@section('title', 'Dashboard')

@section('content')

<div class="stats-row">
    <div class="scard c-navy">
        <div class="scard-top">
            <div class="scard-label">Total Users</div>
            <div class="scard-badge bg-navy">
                <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="#0d1b3e" stroke-width="2">
                    <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/>
                    <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
                </svg>
            </div>
        </div>
        <div class="scard-val">{{ $totalUsers }}</div>
    </div>

    <div class="scard c-green">
        <div class="scard-top">
            <div class="scard-label">Total Deposited</div>
            <div class="scard-badge bg-green">
                <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="#16a34a" stroke-width="2">
                    <line x1="12" y1="5" x2="12" y2="19"/><polyline points="19 12 12 19 5 12"/>
                </svg>
            </div>
        </div>
        <div class="scard-val">${{ number_format($totalDeposited,0) }}</div>
    </div>

    <div class="scard c-red">
        <div class="scard-top">
            <div class="scard-label">Total Withdrawn</div>
            <div class="scard-badge bg-red">
                <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="#dc2626" stroke-width="2">
                    <line x1="12" y1="19" x2="12" y2="5"/><polyline points="5 12 12 5 19 12"/>
                </svg>
            </div>
        </div>
        <div class="scard-val">${{ number_format($totalWithdrawn,0) }}</div>
    </div>

    <div class="scard c-amber">
        <div class="scard-top">
            <div class="scard-label">Pending</div>
            <div class="scard-badge bg-amber">
                <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="#d97706" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                </svg>
            </div>
        </div>
        <div class="scard-val">{{ $pendingCount }}</div>
    </div>

    <div class="scard c-blue">
        <div class="scard-top">
            <div class="scard-label">Active Investments</div>
            <div class="scard-badge bg-blue">
                <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="#2563eb" stroke-width="2">
                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/>
                </svg>
            </div>
        </div>
        <div class="scard-val">{{ $activeInvestments }}</div>
    </div>
</div>

<div style="display:grid;grid-template-columns:1fr 340px;gap:22px;align-items:start;" class="dash-grid">

    <div class="card">
        <div class="card-head">
            <h5>Recent Transactions</h5>
            <a href="{{ route('admin.transactions') }}" class="btn btn-ghost btn-sm">View All</a>
        </div>
        <div class="tbl-scroll">
            <table>
                <thead>
                    <tr>
                        <th>Reference</th><th>User</th><th>Type</th>
                        <th>Amount</th><th>Status</th><th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($recentTxns as $txn)
                    <tr>
                        <td class="td-mono">{{ $txn->reference }}</td>
                        <td>
                            <div class="td-name">{{ $txn->user->name ?? '—' }}</div>
                            <div class="td-sub">{{ $txn->user->email ?? '' }}</div>
                        </td>
                        <td>{{ ucfirst(str_replace('_',' ',$txn->type)) }}</td>
                        <td class="td-amt">${{ number_format($txn->amount,2) }}</td>
                        <td><span class="badge b-{{ $txn->status }}">{{ ucfirst($txn->status) }}</span></td>
                        <td style="font-size:12px;color:#aaa;">{{ $txn->created_at->format('M d, Y') }}</td>
                    </tr>
                    @empty
                    <tr><td colspan="6" style="text-align:center;color:#bbb;padding:36px;">No transactions yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-head">
            <h5>New Users</h5>
            <a href="{{ route('admin.users') }}" class="btn btn-ghost btn-sm">All Users</a>
        </div>
        <div style="padding:8px 0;">
            @forelse($recentUsers as $u)
            <div style="display:flex;align-items:center;gap:12px;padding:10px 20px;border-bottom:1px solid #f4f4f4;">
                <div class="uav" style="width:36px;height:36px;font-size:13px;">{{ strtoupper(substr($u->name,0,1)) }}</div>
                <div style="flex:1;min-width:0;">
                    <div style="font-weight:600;font-size:13px;color:#0d1b3e;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{{ $u->name }}</div>
                    <div style="font-size:11px;color:#aaa;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{{ $u->email }}</div>
                </div>
                <a href="{{ route('admin.users.edit', $u) }}" class="btn btn-navy btn-sm" style="text-decoration:none;white-space:nowrap;">Fund</a>
            </div>
            @empty
            <div style="text-align:center;color:#bbb;padding:28px;font-size:13px;">No users yet.</div>
            @endforelse
        </div>
    </div>

</div>

<style>
@media(max-width:900px){.dash-grid{grid-template-columns:1fr!important}}
</style>
@endsection
