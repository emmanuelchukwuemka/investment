@extends('layouts.app')
@section('title', 'Stocks and Bonds | Zenith Edge Investment')
@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i><div class="caption1 text-white">Stocks and Bonds</div></div>
        <div class="text-nav"><div class="heading3 text-white">Stocks and Bonds</div></div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        <h2 class="intro-heading uppercase">Stocks and Bonds</h2>
        <p class="intro-text-lead">Stocks represent ownership in a company, offering potential capital gains and dividends. Bonds are debt instruments providing steady income streams. Our expert team balances both asset classes to maximize returns while managing your risk exposure. We analyze global markets to identify the best opportunities in equities and fixed income securities for our clients.</p>
        <div class="button-block mt-40"><a class="button-share bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-8" href="{{ route('register') }}">Start Investing in Stocks</a></div>
    </div>
</div>
@endsection
