@extends('layouts.app')
@section('title', 'Forex | Zenith Edge Investment')
@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i><div class="caption1 text-white">Forex</div></div>
        <div class="text-nav"><div class="heading3 text-white">Forex</div></div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        <h2 class="intro-heading uppercase">Forex Trading</h2>
        <p class="intro-text-lead">The foreign exchange market (Forex) is the world's largest financial market, with over $6 trillion traded daily. Our professional forex traders leverage advanced algorithms and deep market knowledge to generate consistent returns. We trade major, minor, and exotic currency pairs to capitalize on global economic trends and geopolitical events.</p>
        <div class="tradingview-widget-container mt-40">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
            {"width":"100%","height":"400","currencies":["EUR","USD","JPY","GBP","CHF","AUD","CAD","NZD"],"isTransparent":false,"colorTheme":"light","locale":"en"}
            </script>
        </div>
        <div class="button-block mt-40"><a class="button-share bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-8" href="{{ route('register') }}">Start Forex Trading</a></div>
    </div>
</div>
@endsection
