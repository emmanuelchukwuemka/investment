@extends('layouts.app')
@section('title', 'Cryptocurrency | Webull Robin Empresa')
@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i><div class="caption1 text-white">Cryptocurrency</div></div>
        <div class="text-nav"><div class="heading3 text-white">Cryptocurrency</div></div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        <h2 class="intro-heading uppercase">Cryptocurrency</h2>
        <p class="intro-text-lead">Cryptocurrency is a digital or virtual currency that uses cryptography for security. Unlike traditional currencies issued by governments (fiat currencies), cryptocurrencies operate on decentralized networks based on blockchain technology. Bitcoin, Ethereum, and other cryptocurrencies offer investors high-growth opportunities with our expert trading team managing your portfolio around the clock.</p>
        <div class="tradingview-widget-container mt-40">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
            {"width":"100%","height":490,"defaultColumn":"overview","screener_type":"crypto_mkt","displayCurrency":"BTC","colorTheme":"light","locale":"en"}
            </script>
        </div>
        <div class="button-block mt-40"><a class="button-share bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-8" href="{{ route('register') }}">Start Crypto Trading</a></div>
    </div>
</div>
@endsection
