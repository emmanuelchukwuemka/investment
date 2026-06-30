@extends('layouts.app')
@section('title', 'Reset Password | Webull Robin Empresa')
@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i><div class="caption1 text-white">Reset Password</div></div>
        <div class="text-nav"><div class="heading3 text-white">Reset Password</div></div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        @if(session('success'))
            <div style="background:#d4edda;color:#155724;padding:14px 20px;border-radius:10px;margin-bottom:20px;text-align:center;">
                {{ session('success') }}
            </div>
        @endif
        @if($errors->any())
            <div style="background:#f8d7da;color:#721c24;padding:14px 20px;border-radius:10px;margin-bottom:20px;text-align:center;">
                {{ $errors->first() }}
            </div>
        @endif
        <form class="form-signin" method="POST" action="{{ route('password.email') }}">
            @csrf
            <marquee>
                <div class="text-center"><img src="{{ asset('img/favicon.png') }}" style="width:40px;"> <b>WEBULL ROBIN EMPRESA</b></div>
            </marquee>
            <div class="col-12 col-sm-12 mt-20">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" placeholder="Enter your email address" required>
            </div>
            <br>
            <button class="button-share hover-border-blue bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48" type="submit">Send Reset Link</button>
            <br><br>
            <a href="{{ route('login') }}" style="color: #000033;">Back to Login</a>
        </form>
    </div>
</div>
@endsection
