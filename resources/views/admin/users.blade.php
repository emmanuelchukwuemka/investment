@extends('admin.layout')
@section('title', 'Users')

@section('content')
<div class="card">
    <div class="card-head">
        <h5>All Users <span style="font-weight:400;color:#aaa;font-size:13px;">({{ $users->total() }})</span></h5>
    </div>
    <div class="card-body" style="padding-bottom:0;">
        <form method="GET" class="fbar">
            <input type="text" name="search" placeholder="Search name or email..." value="{{ request('search') }}" style="width:260px;">
            <button type="submit" class="btn btn-navy btn-sm">Search</button>
            <a href="{{ route('admin.users') }}" class="btn btn-ghost btn-sm">Clear</a>
        </form>
    </div>
    <div class="tbl-scroll">
        <table>
            <thead>
                <tr>
                    <th>User</th><th>Email</th><th>Country</th>
                    <th>Balance</th><th>Role</th><th>Joined</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td>
                        <div style="display:flex;align-items:center;gap:10px;">
                            <div class="uav">{{ strtoupper(substr($user->name,0,1)) }}</div>
                            <span class="td-name">{{ $user->name }}</span>
                        </div>
                    </td>
                    <td style="font-size:12px;color:#666;">{{ $user->email }}</td>
                    <td style="font-size:13px;">{{ $user->country ?? '—' }}</td>
                    <td class="td-amt">${{ number_format($user->balance,2) }}</td>
                    <td>
                        @if($user->role === 'admin')
                            <span class="badge b-admin">Admin</span>
                        @else
                            <span class="badge b-user">User</span>
                        @endif
                    </td>
                    <td style="font-size:12px;color:#aaa;">{{ $user->created_at->format('M d, Y') }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-navy btn-sm" style="text-decoration:none;">Edit / Fund</a>
                    </td>
                </tr>
                @empty
                <tr><td colspan="7" style="text-align:center;color:#bbb;padding:40px;">No users found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="pagination">{{ $users->withQueryString()->links() }}</div>
</div>
@endsection
