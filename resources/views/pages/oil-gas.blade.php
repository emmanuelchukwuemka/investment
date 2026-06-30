@extends('layouts.app')
@section('title', 'Oil & Gas | Webull Robin Empresa')
@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i><div class="caption1 text-white">Oil & Gas</div></div>
        <div class="text-nav"><div class="heading3 text-white">Oil & Gas</div></div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        <h2 class="intro-heading uppercase">Oil & Gas Investment</h2>
        <p class="intro-text-lead">Oil and gas investments offer substantial returns tied to global energy demand. As the world's energy needs continue to grow, our expert team identifies the best opportunities in crude oil, natural gas, and energy sector equities. We capitalize on price movements in WTI, Brent crude, and natural gas futures to generate consistent profits for our investors, while managing the inherent risks of commodity markets.</p>
        <div class="button-block mt-40"><a class="button-share bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-8" href="{{ route('register') }}">Invest in Oil & Gas</a></div>
    </div>
</div>
@endsection
