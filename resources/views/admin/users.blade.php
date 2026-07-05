@extends('admin.layout')
@section('title', 'Users')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>All Users</h5>
        <span style="font-size:13px;color:#888;">{{ $users->total() }} total</span>
    </div>
    <div class="card-body" style="padding-bottom:0;">
        <form method="GET" class="filter-bar">
            <input type="text" name="search" placeholder="Search name or email..." value="{{ request('search') }}" style="width:260px;">
            <button type="submit" class="btn btn-primary btn-sm">Search</button>
            <a href="{{ route('admin.users') }}" class="btn btn-outline btn-sm">Clear</a>
        </form>
    </div>
    <div class="tbl-wrap">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Balance</th>
                    <th>Referral Code</th>
                    <th>Role</th>
                    <th>Joined</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td>
                        <div style="display:flex;align-items:center;gap:10px;">
                            <div style="width:34px;height:34px;border-radius:50%;background:#e8edf5;display:flex;align-items:center;
                                justify-content:center;font-weight:700;font-size:13px;color:#072b5b;flex-shrink:0;">
                                {{ strtoupper(substr($user->name,0,1)) }}
                            </div>
                            <span style="font-weight:600;">{{ $user->name }}</span>
                        </div>
                    </td>
                    <td style="font-size:12px;color:#666;">{{ $user->email }}</td>
                    <td style="font-size:13px;">{{ $user->country ?? '—' }}</td>
                    <td style="font-weight:700;color:#072b5b;">${{ number_format($user->balance,2) }}</td>
                    <td style="font-size:12px;font-family:monospace;color:#888;">{{ $user->referral_code }}</td>
                    <td>
                        @if($user->role === 'admin')
                            <span class="badge badge-admin">Admin</span>
                        @else
                            <span class="badge badge-user">User</span>
                        @endif
                    </td>
                    <td style="font-size:12px;color:#888;">{{ $user->created_at->format('M d, Y') }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-gray btn-sm" style="text-decoration:none;">Edit / Fund</a>
                    </td>
                </tr>
                @empty
                <tr><td colspan="8" style="text-align:center;color:#aaa;padding:40px;">No users found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div style="padding:16px 24px;">{{ $users->withQueryString()->links() }}</div>
</div>
@endsection
