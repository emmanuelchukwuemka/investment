@extends('admin.layout')
@section('title', 'Investments')

@section('content')
<div class="topbar">
    <h4>Investments</h4>
</div>

<div class="card">
    <div class="card-header">All Investments</div>
    <div class="card-body">
        <form method="GET" class="filter-bar">
            <select name="status">
                <option value="">All Statuses</option>
                <option value="active"    {{ request('status')=='active'    ? 'selected':'' }}>Active</option>
                <option value="completed" {{ request('status')=='completed' ? 'selected':'' }}>Completed</option>
                <option value="cancelled" {{ request('status')=='cancelled' ? 'selected':'' }}>Cancelled</option>
            </select>
            <button type="submit">Filter</button>
            <a href="{{ route('admin.investments') }}" style="padding:7px 16px;background:#eee;color:#333;border-radius:6px;text-decoration:none;font-size:13px;">Clear</a>
        </form>

        <table>
            <thead>
                <tr><th>User</th><th>Plan</th><th>Amount</th><th>ROI</th><th>Status</th><th>Started</th><th>Ends</th><th>Actions</th></tr>
            </thead>
            <tbody>
                @forelse($investments as $inv)
                <tr>
                    <td>{{ $inv->user->name ?? '—' }}<br><span style="font-size:11px;color:#888;">{{ $inv->user->email ?? '' }}</span></td>
                    <td>{{ $inv->plan->name ?? '—' }}</td>
                    <td><strong>${{ number_format($inv->amount, 2) }}</strong></td>
                    <td style="color:#28a745;">${{ number_format($inv->roi_amount, 2) }}</td>
                    <td><span class="badge-{{ $inv->status }}">{{ ucfirst($inv->status) }}</span></td>
                    <td style="font-size:12px;">{{ $inv->started_at ? \Carbon\Carbon::parse($inv->started_at)->format('M d, Y') : '—' }}</td>
                    <td style="font-size:12px;">{{ $inv->ends_at ? \Carbon\Carbon::parse($inv->ends_at)->format('M d, Y') : '—' }}</td>
                    <td>
                        @if($inv->status === 'active')
                        <form action="{{ route('admin.investments.complete', $inv) }}" method="POST" style="display:inline;" onsubmit="return confirm('Mark as completed and credit ROI to user?')">
                            @csrf
                            <button class="btn-sm btn-complete">Complete + Pay ROI</button>
                        </form>
                        @else
                        <span style="color:#aaa;font-size:12px;">—</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr><td colspan="8" style="text-align:center;color:#888;">No investments found.</td></tr>
                @endforelse
            </tbody>
        </table>

        <div style="margin-top:16px;">
            {{ $investments->withQueryString()->links() }}
        </div>
    </div>
</div>
@endsection
