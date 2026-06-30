@extends('layouts.app')
@section('title', 'Set New Password')

@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32">
            <a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a>
            <i class="ph ph-caret-double-right text-white"></i>
            <div class="caption1 text-white">Set New Password</div>
        </div>
        <div class="text-nav"><div class="heading3 text-white">Set New Password</div></div>
    </div>
</div>

<div class="form-contact style-one mt-100">
    <div class="container">
        @if($errors->any())
            <div style="background:#f8d7da;color:#721c24;padding:14px 20px;border-radius:10px;margin-bottom:20px;text-align:center;">
                {{ $errors->first() }}
            </div>
        @endif

        <form class="form-signin" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="col-12 col-sm-12 mt-20">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" value="{{ old('email', $email) }}"
                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                    placeholder="Your email address" required>
            </div>

            <div class="col-12 col-sm-12 mt-20">
                <label for="password">New Password</label>
                <input type="password" name="password" id="password"
                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                    placeholder="Minimum 8 characters" required>
            </div>

            <div class="col-12 col-sm-12 mt-20">
                <label for="password_confirmation">Confirm New Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                    placeholder="Repeat password" required>
            </div>

            <br>
            <button class="button-share hover-border-blue bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48" type="submit">
                Reset Password
            </button>
        </form>
    </div>
</div>
@endsection
