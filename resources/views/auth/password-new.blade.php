@extends('layouts.app')
@section('title', 'Set New Password | Zenith Edge Investment')
@section('content')
<div class="zei-auth-wrap">
    <div class="zei-auth-card">
        <a href="{{ route('home') }}" class="zei-auth-logo">Zenith Edge<span> Investment</span></a>
        <h1 class="zei-auth-title">Set New Password</h1>
        <p class="zei-auth-sub">Enter and confirm your new password below</p>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="zei-fg">
                <label>Email Address</label>
                <input type="email" name="email" class="zei-inp" placeholder="Your email" value="{{ old('email', $email) }}" required>
                @error('email')<div class="zei-err">{{ $message }}</div>@enderror
            </div>
            <div class="zei-fg">
                <label>New Password</label>
                <input type="password" name="password" class="zei-inp" placeholder="Minimum 8 characters" required>
                @error('password')<div class="zei-err">{{ $message }}</div>@enderror
            </div>
            <div class="zei-fg">
                <label>Confirm New Password</label>
                <input type="password" name="password_confirmation" class="zei-inp" placeholder="Repeat password" required>
            </div>
            <button type="submit" class="zei-btn zei-btn-green" style="width:100%;justify-content:center;padding:13px">Update Password</button>
        </form>
    </div>
</div>
@endsection
