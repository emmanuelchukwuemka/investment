@extends('layouts.app')
@section('title', 'Reset Password | Zenith Edge Investment')
@section('content')
<div class="zei-auth-wrap">
    <div class="zei-auth-card">
        <a href="{{ route('home') }}" class="zei-auth-logo">Zenith Edge<span> Investment</span></a>
        <h1 class="zei-auth-title">Reset Password</h1>
        <p class="zei-auth-sub">Enter your email and we'll send you a reset link</p>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="zei-fg">
                <label>Email Address</label>
                <input type="email" name="email" class="zei-inp" placeholder="you@example.com" value="{{ old('email') }}" required autofocus>
                @error('email')<div class="zei-err">{{ $message }}</div>@enderror
            </div>
            <button type="submit" class="zei-btn zei-btn-green" style="width:100%;justify-content:center;padding:13px">Send Reset Link</button>
        </form>
        <p style="text-align:center;margin-top:20px;font-size:14px;color:var(--muted)">
            <a href="{{ route('login') }}" style="color:var(--navy);font-weight:700">&#8592; Back to Login</a>
        </p>
    </div>
</div>
@endsection
