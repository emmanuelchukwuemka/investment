@extends('admin.layout')
@section('title', 'Edit User')

@section('content')
<div class="topbar">
    <h4>Edit User — {{ $user->name }}</h4>
    <a href="{{ route('admin.users') }}" style="font-size:13px;color:#1a73e8;text-decoration:none;">&larr; Back to Users</a>
</div>

<div class="card" style="max-width:480px;">
    <div class="card-header">User Details</div>
    <div class="card-body">
        <div style="margin-bottom:16px;font-size:13px;color:#555;">
            <div><strong>Email:</strong> {{ $user->email }}</div>
            <div><strong>Phone:</strong> {{ $user->phone ?? '—' }}</div>
            <div><strong>Country:</strong> {{ $user->country ?? '—' }}</div>
            <div><strong>Referral Code:</strong> {{ $user->referral_code }}</div>
            <div><strong>Joined:</strong> {{ $user->created_at->format('M d, Y') }}</div>
        </div>

        <form action="{{ route('admin.users.update', $user) }}" method="POST">
            @csrf
            @if($errors->any())
                <div class="alert alert-error">{{ $errors->first() }}</div>
            @endif

            <div class="form-group" style="margin-bottom:16px;">
                <label style="display:block;font-size:12px;color:#666;margin-bottom:4px;">Balance (USD)</label>
                <input type="number" name="balance" step="0.01" min="0"
                    value="{{ old('balance', $user->balance) }}"
                    style="width:100%;padding:8px 12px;border:1px solid #ddd;border-radius:6px;font-size:13px;">
            </div>

            <div class="form-group" style="margin-bottom:24px;">
                <label style="display:block;font-size:12px;color:#666;margin-bottom:4px;">Role</label>
                <select name="role" style="width:100%;padding:8px 12px;border:1px solid #ddd;border-radius:6px;font-size:13px;">
                    <option value="user"  {{ $user->role === 'user'  ? 'selected' : '' }}>User</option>
                    <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>

            <button type="submit" style="background:#072b5b;color:#fff;border:none;padding:10px 24px;border-radius:8px;cursor:pointer;font-size:14px;">Save Changes</button>
        </form>
    </div>
</div>
@endsection
