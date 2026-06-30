@extends('layouts.app')

@section('title', 'Login | Webull Robin Empresa')

@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i>
            <div class="caption1 text-white">Login</div>
        </div>
        <div class="text-nav">
            <div class="heading3 text-white">Login</div>
        </div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        <form action="{{ route('login.post') }}" method="post" class="form-signin">
            @csrf
            <marquee>
                <div class="text-center" style="text-align: center;"><img src="{{ asset('img/favicon.png') }}" style="width: 40px;"> <b>WEBULL ROBIN EMPRESA</b></div>
            </marquee>
            <div class="col-12 col-sm-12">
                <label for="Email">Email</label>
                <input type="email" name="email" id="inputEmail"
                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                    placeholder="Email address" value="{{ old('email') }}" required autofocus>
                @error('email')<div style="color:red;font-size:13px;margin-top:4px;">{{ $message }}</div>@enderror
            </div>
            <div class="col-12 col-sm-12">
                <label for="Password">Password</label>
                <input type="password" name="password" id="inputPassword"
                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                    placeholder="Password" required>
                @error('password')<div style="color:red;font-size:13px;margin-top:4px;">{{ $message }}</div>@enderror
            </div>
            <br>
            <button class="button-share hover-border-blue bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48" type="submit">Sign in</button>
            <a href="{{ route('password.reset') }}" style="color: #000033;">Forgot password?</a>
            <br>
            <a href="{{ route('register') }}">Not yet a member? Sign Up</a>
        </form>
    </div>
</div>
@endsection
