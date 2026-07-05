@extends('admin.layout')
@section('title', 'Edit User')

@section('content')
<div class="topbar">
    <h4>Edit User — {{ $user->name }}</h4>
    <a href="{{ route('admin.users') }}" style="font-size:13px;color:#1a73e8;text-decoration:none;">&larr; Back to Users</a>
</div>

@if(session('success'))
    <div class="alert alert-success" style="background:#d4edda;color:#155724;padding:12px 16px;border-radius:8px;margin-bottom:16px;">{{ session('success') }}</div>
@endif
@if(session('error'))
    <div class="alert alert-error" style="background:#f8d7da;color:#721c24;padding:12px 16px;border-radius:8px;margin-bottom:16px;">{{ session('error') }}</div>
@endif

<div style="display:flex;gap:20px;flex-wrap:wrap;align-items:flex-start;">

    {{-- Fund Account --}}
    <div class="card" style="flex:1;min-width:280px;max-width:420px;">
        <div class="card-header" style="background:#072b5b;color:#fff;padding:12px 16px;border-radius:8px 8px 0 0;font-weight:600;">
            Fund Account
        </div>
        <div class="card-body" style="padding:20px;">
            <div style="margin-bottom:14px;font-size:13px;color:#555;">
                <strong>Current Balance:</strong>
                <span style="font-size:18px;font-weight:700;color:#072b5b;margin-left:8px;">${{ number_format($user->balance, 2) }}</span>
            </div>
            <form action="{{ route('admin.users.fund', $user) }}" method="POST">
                @csrf
                <div style="margin-bottom:14px;">
                    <label style="display:block;font-size:12px;color:#666;margin-bottom:4px;font-weight:600;">Amount (USD)</label>
                    <input type="number" name="amount" step="0.01" min="0.01" placeholder="0.00"
                        style="width:100%;padding:10px 12px;border:1px solid #ddd;border-radius:6px;font-size:15px;box-sizing:border-box;" required>
                </div>
                <div style="margin-bottom:14px;">
                    <label style="display:block;font-size:12px;color:#666;margin-bottom:4px;font-weight:600;">Action</label>
                    <select name="action" style="width:100%;padding:10px 12px;border:1px solid #ddd;border-radius:6px;font-size:13px;">
                        <option value="credit">Credit (Add to balance)</option>
                        <option value="deduct">Deduct (Remove from balance)</option>
                    </select>
                </div>
                <div style="margin-bottom:20px;">
                    <label style="display:block;font-size:12px;color:#666;margin-bottom:4px;font-weight:600;">Note (optional)</label>
                    <input type="text" name="notes" placeholder="e.g. Manual deposit, bonus..."
                        style="width:100%;padding:10px 12px;border:1px solid #ddd;border-radius:6px;font-size:13px;box-sizing:border-box;">
                </div>
                <button type="submit"
                    style="width:100%;background:#072b5b;color:#fff;border:none;padding:12px;border-radius:8px;cursor:pointer;font-size:15px;font-weight:600;">
                    Apply Fund
                </button>
            </form>
        </div>
    </div>

    {{-- Role & Info --}}
    <div class="card" style="flex:1;min-width:280px;max-width:420px;">
        <div class="card-header" style="background:#444;color:#fff;padding:12px 16px;border-radius:8px 8px 0 0;font-weight:600;">
            User Details
        </div>
        <div class="card-body" style="padding:20px;">
            <div style="margin-bottom:16px;font-size:13px;color:#555;line-height:2;">
                <div><strong>Name:</strong> {{ $user->name }}</div>
                <div><strong>Email:</strong> {{ $user->email }}</div>
                <div><strong>Phone:</strong> {{ $user->phone ?? '—' }}</div>
                <div><strong>Country:</strong> {{ $user->country ?? '—' }}</div>
                <div><strong>Referral Code:</strong> {{ $user->referral_code }}</div>
                <div><strong>Joined:</strong> {{ $user->created_at->format('M d, Y') }}</div>
            </div>

            <form action="{{ route('admin.users.update', $user) }}" method="POST">
                @csrf
                @if($errors->any())
                    <div style="background:#f8d7da;color:#721c24;padding:10px;border-radius:6px;margin-bottom:12px;font-size:13px;">{{ $errors->first() }}</div>
                @endif
                <input type="hidden" name="balance" value="{{ $user->balance }}">
                <div style="margin-bottom:20px;">
                    <label style="display:block;font-size:12px;color:#666;margin-bottom:4px;font-weight:600;">Role</label>
                    <select name="role" style="width:100%;padding:10px 12px;border:1px solid #ddd;border-radius:6px;font-size:13px;">
                        <option value="user"  {{ $user->role === 'user'  ? 'selected' : '' }}>User</option>
                        <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>
                <button type="submit"
                    style="background:#555;color:#fff;border:none;padding:10px 24px;border-radius:8px;cursor:pointer;font-size:14px;">
                    Update Role
                </button>
            </form>
        </div>
    </div>

</div>
@endsection
