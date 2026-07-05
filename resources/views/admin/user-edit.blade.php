@extends('admin.layout')
@section('title', 'Edit User')

@section('content')
<div style="margin-bottom:20px;">
    <a href="{{ route('admin.users') }}" class="btn btn-outline btn-sm" style="text-decoration:none;">&larr; Back to Users</a>
</div>

<div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:24px;align-items:start;">

    {{-- Fund Account --}}
    <div class="card">
        <div class="card-header" style="background:#072b5b;">
            <h5 style="color:#fff;">Fund Account</h5>
        </div>
        <div class="card-body">
            <div style="background:#f8f9fc;border-radius:10px;padding:16px 20px;margin-bottom:22px;">
                <div style="font-size:11px;color:#888;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">Current Balance</div>
                <div style="font-size:30px;font-weight:800;color:#072b5b;margin-top:6px;">${{ number_format($user->balance, 2) }}</div>
            </div>

            <form action="{{ route('admin.users.fund', $user) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="form-label">Amount (USD)</label>
                    <input type="number" name="amount" step="0.01" min="0.01" placeholder="0.00"
                        class="form-control" style="font-size:18px;font-weight:700;" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Action</label>
                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-top:4px;">
                        <label style="cursor:pointer;display:flex;align-items:center;gap:8px;padding:10px 14px;border:1.5px solid #28a745;border-radius:8px;background:#f0fff4;">
                            <input type="radio" name="action" value="credit" checked>
                            <div>
                                <div style="font-weight:700;color:#28a745;font-size:13px;">Credit</div>
                                <div style="font-size:11px;color:#888;">Add to balance</div>
                            </div>
                        </label>
                        <label style="cursor:pointer;display:flex;align-items:center;gap:8px;padding:10px 14px;border:1.5px solid #dc3545;border-radius:8px;background:#fff5f5;">
                            <input type="radio" name="action" value="deduct">
                            <div>
                                <div style="font-weight:700;color:#dc3545;font-size:13px;">Deduct</div>
                                <div style="font-size:11px;color:#888;">Remove from balance</div>
                            </div>
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
                <h5>User Profile</h5>
            </div>
            <div class="card-body">
                <div style="display:flex;align-items:center;gap:14px;margin-bottom:20px;padding-bottom:20px;border-bottom:1px solid #f0f0f0;">
                    <div style="width:52px;height:52px;border-radius:50%;background:#e8edf5;display:flex;align-items:center;
                        justify-content:center;font-weight:800;font-size:20px;color:#072b5b;flex-shrink:0;">
                        {{ strtoupper(substr($user->name,0,1)) }}
                    </div>
                    <div>
                        <div style="font-size:17px;font-weight:700;color:#072b5b;">{{ $user->name }}</div>
                        <div style="font-size:13px;color:#888;">{{ $user->email }}</div>
                    </div>
                </div>
                <table style="font-size:13px;width:100%;border-collapse:collapse;">
                    <tr><td style="color:#888;padding:7px 0;width:120px;">Phone</td><td style="font-weight:500;">{{ $user->phone ?? '—' }}</td></tr>
                    <tr><td style="color:#888;padding:7px 0;">Country</td><td style="font-weight:500;">{{ $user->country ?? '—' }}</td></tr>
                    <tr><td style="color:#888;padding:7px 0;">Referral Code</td><td style="font-weight:500;font-family:monospace;">{{ $user->referral_code }}</td></tr>
                    <tr><td style="color:#888;padding:7px 0;">Joined</td><td style="font-weight:500;">{{ $user->created_at->format('M d, Y') }}</td></tr>
                    <tr><td style="color:#888;padding:7px 0;">Balance</td><td style="font-weight:700;color:#072b5b;">${{ number_format($user->balance,2) }}</td></tr>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>Change Role</h5>
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
