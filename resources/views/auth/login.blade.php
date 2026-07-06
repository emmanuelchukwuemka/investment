@extends('layouts.app')
@section('title', 'Login | Zenith Edge Investment')
@section('content')
<div class="zei-auth-wrap">
    <div class="zei-auth-card">
        <a href="{{ route('home') }}" class="zei-auth-logo">Zenith Edge<span> Investment</span></a>
        <h1 class="zei-auth-title">Welcome Back</h1>
        <p class="zei-auth-sub">Sign in to access your investment dashboard</p>

        <form action="{{ route('login.post') }}" method="post">
            @csrf
            <div class="zei-fg">
                <label>Email Address</label>
                <input type="email" name="email" class="zei-inp" placeholder="you@example.com" value="{{ old('email') }}" required autofocus>
                @error('email')<div class="zei-err">{{ $message }}</div>@enderror
            </div>
            <div class="zei-fg">
                <label>Password</label>
                <input type="password" name="password" class="zei-inp" placeholder="Your password" required>
                @error('password')<div class="zei-err">{{ $message }}</div>@enderror
            </div>
            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:22px;font-size:13px">
                <label style="display:flex;align-items:center;gap:7px;cursor:pointer;font-weight:500;color:var(--muted)">
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <a href="{{ route('password.reset') }}" style="color:var(--blue);font-weight:600">Forgot password?</a>
            </div>
            <button type="submit" class="zei-btn zei-btn-green" style="width:100%;justify-content:center;padding:13px">Sign In</button>
        </form>

        <p style="text-align:center;margin-top:24px;font-size:14px;color:var(--muted)">
            Don't have an account? <a href="{{ route('register') }}" style="color:var(--navy);font-weight:700">Create one free</a>
        </p>
    </div>
</div>
@endsection
