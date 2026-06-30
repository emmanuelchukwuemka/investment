@extends('admin.layout')
@section('title', 'Users')

@section('content')
<div class="topbar">
    <h4>Users</h4>
</div>

<div class="card">
    <div class="card-header">All Users</div>
    <div class="card-body">
        <form method="GET" class="filter-bar">
            <input type="text" name="search" placeholder="Search name or email..." value="{{ request('search') }}" style="width:250px;">
            <button type="submit">Search</button>
            <a href="{{ route('admin.users') }}" style="padding:7px 16px;background:#eee;color:#333;border-radius:6px;text-decoration:none;font-size:13px;">Clear</a>
        </form>

        <table>
            <thead>
                <tr><th>Name</th><th>Email</th><th>Country</th><th>Balance</th><th>Referral Code</th><th>Role</th><th>Joined</th><th>Actions</th></tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td style="font-size:12px;">{{ $user->email }}</td>
                    <td>{{ $user->country ?? '—' }}</td>
                    <td><strong>${{ number_format($user->balance, 2) }}</strong></td>
                    <td style="font-size:12px;font-family:monospace;">{{ $user->referral_code }}</td>
                    <td>
                        @if($user->role === 'admin')
                            <span class="badge-approved">Admin</span>
                        @else
                            <span class="badge-pending">User</span>
                        @endif
                    </td>
                    <td style="font-size:12px;">{{ $user->created_at->format('M d, Y') }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user) }}" class="btn-sm btn-edit" style="text-decoration:none;display:inline-block;">Edit</a>
                    </td>
                </tr>
                @empty
                <tr><td colspan="8" style="text-align:center;color:#888;">No users found.</td></tr>
                @endforelse
            </tbody>
        </table>

        <div style="margin-top:16px;">
            {{ $users->withQueryString()->links() }}
        </div>
    </div>
</div>
@endsection
