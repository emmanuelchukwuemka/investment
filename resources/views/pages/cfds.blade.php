@extends('layouts.app')
@section('title', 'CFDs | Zenith Edge Investment')
@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i><div class="caption1 text-white">CFDs</div></div>
        <div class="text-nav"><div class="heading3 text-white">CFDs</div></div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        <h2 class="intro-heading uppercase">Contracts for Difference (CFDs)</h2>
        <p class="intro-text-lead">A Contract for Difference (CFD) is a popular form of derivative trading. CFD trading enables you to speculate on the rising or falling prices of fast-moving global financial markets (or instruments) such as shares, indices, commodities, currencies and treasuries. Our expert traders use CFDs to maximize profits in both bull and bear markets, providing consistent returns for our investors.</p>
        <div class="button-block mt-40"><a class="button-share bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-8" href="{{ route('register') }}">Start CFD Trading</a></div>
    </div>
</div>
@endsection
