@extends('admin.layout')
@section('title', 'Edit User')

@section('content')
<div style="margin-bottom:20px;">
    <a href="{{ route('admin.users') }}" class="btn btn-outline btn-sm" style="text-decoration:none;">&#8592; Back to Users</a>
</div>

<div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:24px;align-items:start;">

    {{-- Fund Account --}}
    <div class="card">
        <div class="card-header" style="background:#072b5b;">
            <h5 style="color:#fff;">&#128260; Fund Account</h5>
        </div>
        <div class="card-body">
            <div style="background:#f8f9fc;border-radius:10px;padding:16px;margin-bottom:20px;display:flex;align-items:center;justify-content:space-between;">
                <div>
                    <div style="font-size:12px;color:#888;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">Current Balance</div>
                    <div style="font-size:28px;font-weight:800;color:#072b5b;margin-top:4px;">${{ number_format($user->balance, 2) }}</div>
                </div>
                <div style="font-size:40px;">&#128181;</div>
            </div>

            <form action="{{ route('admin.users.fund', $user) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="form-label">Amount (USD) *</label>
                    <input type="number" name="amount" step="0.01" min="0.01" placeholder="0.00"
                        class="form-control" style="font-size:18px;font-weight:700;" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Action *</label>
                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;">
                        <label style="cursor:pointer;">
                            <input type="radio" name="action" value="credit" checked style="margin-right:6px;">
                            <span style="font-weight:600;color:#28a745;">&#9650; Credit</span>
                            <div style="font-size:11px;color:#888;margin-top:2px;margin-left:18px;">Add to balance</div>
                        </label>
                        <label style="cursor:pointer;">
                            <input type="radio" name="action" value="deduct" style="margin-right:6px;">
                            <span style="font-weight:600;color:#dc3545;">&#9660; Deduct</span>
                            <div style="font-size:11px;color:#888;margin-top:2px;margin-left:18px;">Remove from balance</div>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Note (optional)</label>
                    <input type="text" name="notes" placeholder="e.g. Manual deposit, bonus credit..."
                        class="form-control">
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%;padding:13px;font-size:15px;">
                    Apply Fund
                </button>
            </form>
        </div>
    </div>

    {{-- User Info & Role --}}
    <div style="display:flex;flex-direction:column;gap:20px;">
        <div class="card">
            <div class="card-header">
                <h5>&#128100; User Profile</h5>
            </div>
            <div class="card-body">
                <div style="display:flex;align-items:center;gap:14px;margin-bottom:20px;padding-bottom:20px;border-bottom:1px solid #f0f0f0;">
                    <div style="width:56px;height:56px;border-radius:50%;background:#e8edf5;display:flex;align-items:center;
                        justify-content:center;font-weight:800;font-size:22px;color:#072b5b;flex-shrink:0;">
                        {{ strtoupper(substr($user->name,0,1)) }}
                    </div>
                    <div>
                        <div style="font-size:17px;font-weight:700;color:#072b5b;">{{ $user->name }}</div>
                        <div style="font-size:13px;color:#888;">{{ $user->email }}</div>
                    </div>
                </div>
                <table style="font-size:13px;width:100%;">
                    <tr><td style="color:#888;padding:6px 0;width:120px;">Phone</td><td style="font-weight:500;">{{ $user->phone ?? '—' }}</td></tr>
                    <tr><td style="color:#888;padding:6px 0;">Country</td><td style="font-weight:500;">{{ $user->country ?? '—' }}</td></tr>
                    <tr><td style="color:#888;padding:6px 0;">Referral Code</td><td style="font-weight:500;font-family:monospace;">{{ $user->referral_code }}</td></tr>
                    <tr><td style="color:#888;padding:6px 0;">Joined</td><td style="font-weight:500;">{{ $user->created_at->format('M d, Y') }}</td></tr>
                    <tr><td style="color:#888;padding:6px 0;">Balance</td><td style="font-weight:700;color:#072b5b;">${{ number_format($user->balance,2) }}</td></tr>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>&#9881; Change Role</h5>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-error">{{ $errors->first() }}</div>
                @endif
                <form action="{{ route('admin.users.update', $user) }}" method="POST">
                    @csrf
                    <input type="hidden" name="balance" value="{{ $user->balance }}">
                    <div class="form-group">
                        <label class="form-label">Role</label>
                        <select name="role" class="form-control">
                            <option value="user"  {{ $user->role === 'user'  ? 'selected' : '' }}>User</option>
                            <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Administrator</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-gray">Update Role</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
