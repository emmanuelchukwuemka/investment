@extends('admin.layout')
@section('title', 'Investments')

@section('content')
<div class="card">
    <div class="card-head">
        <h5>All Investments</h5>
    </div>
    <div class="card-body" style="padding-bottom:0;">
        <form method="GET" class="fbar">
            <select name="status">
                <option value="">All Statuses</option>
                <option value="active"    {{ request('status')=='active'    ?'selected':'' }}>Active</option>
                <option value="completed" {{ request('status')=='completed' ?'selected':'' }}>Completed</option>
                <option value="cancelled" {{ request('status')=='cancelled' ?'selected':'' }}>Cancelled</option>
            </select>
            <button type="submit" class="btn btn-navy btn-sm">Filter</button>
            <a href="{{ route('admin.investments') }}" class="btn btn-ghost btn-sm">Clear</a>
        </form>
    </div>
    <div class="tbl-scroll">
        <table>
            <thead>
                <tr>
                    <th>User</th><th>Plan</th><th>Amount</th><th>ROI</th>
                    <th>Status</th><th>Started</th><th>Ends</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($investments as $inv)
                <tr>
                    <td>
                        <div class="td-name">{{ $inv->user->name ?? '—' }}</div>
                        <div class="td-sub">{{ $inv->user->email ?? '' }}</div>
                    </td>
                    <td style="font-weight:500;">{{ $inv->plan->name ?? '—' }}</td>
                    <td class="td-amt">${{ number_format($inv->amount,2) }}</td>
                    <td style="font-weight:600;color:#16a34a;">${{ number_format($inv->roi_amount,2) }}</td>
                    <td><span class="badge b-{{ $inv->status }}">{{ ucfirst($inv->status) }}</span></td>
                    <td style="font-size:12px;color:#aaa;">{{ $inv->started_at ? \Carbon\Carbon::parse($inv->started_at)->format('M d, Y') : '—' }}</td>
                    <td style="font-size:12px;color:#aaa;">{{ $inv->ends_at ? \Carbon\Carbon::parse($inv->ends_at)->format('M d, Y') : '—' }}</td>
                    <td>
                        @if($inv->status === 'active')
                        <form action="{{ route('admin.investments.complete', $inv) }}" method="POST" style="display:inline;"
                            onsubmit="return confirm('Mark as completed and credit ROI to user?')">
                            @csrf<button class="btn btn-blue btn-sm">Complete + Pay ROI</button>
                        </form>
                        @else
                        <span style="color:#ccc;font-size:12px;">—</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr><td colspan="8" style="text-align:center;color:#bbb;padding:40px;">No investments found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="pagination">{{ $investments->withQueryString()->links() }}</div>
</div>
@endsection
