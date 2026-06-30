@extends('layouts.app')
@section('title', 'Gold | Webull Robin Empresa')
@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i><div class="caption1 text-white">Gold</div></div>
        <div class="text-nav"><div class="heading3 text-white">Gold</div></div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        @if(file_exists(public_path('img/gold1.jpg')))
        <img src="{{ asset('img/gold1.jpg') }}" class="w-100 bora-16 mb-40" style="max-height:400px;object-fit:cover;" alt="Gold">
        @endif
        <h2 class="intro-heading uppercase">Gold</h2>
        <p class="intro-text-lead">From the time of ancient civilizations to the modern era, gold has been the world's currency of choice. Today, investors buy gold mainly as a hedge against political unrest and inflation. In addition, many top investment advisors recommend a portfolio allocation in commodities, including gold, in order to lower overall portfolio risk.</p>
        <div class="button-block mt-40"><a class="button-share bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-8" href="{{ route('register') }}">Start Investing in Gold</a></div>
    </div>
</div>
@endsection
