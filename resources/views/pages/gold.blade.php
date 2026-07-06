@extends('layouts.app')
@section('title', 'Gold Investment | Zenith Edge Investment')
@section('content')
<div class="zei-page-hero">
    <img src="{{ asset('lassets/images/banner/contact.png') }}" alt="Gold" class="zei-page-hero-bg">
    <div class="zei-page-hero-overlay"></div>
    <div class="container">
        <div class="zei-page-hero-content">
            <div class="zei-breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">&#8250;</span><span class="cur">Gold</span></div>
            <h1 class="zei-page-title">Gold Investment</h1>
            <p class="zei-page-sub">One of the world's most trusted stores of value, managed by our expert traders.</p>
        </div>
    </div>
</div>
<div class="zei-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                @if(file_exists(public_path('img/gold1.jpg')))
                <img src="{{ asset('img/gold1.jpg') }}" alt="Gold Investment" style="width:100%;height:400px;object-fit:cover;border-radius:16px">
                @else
                <div style="height:400px;background:linear-gradient(135deg,#d97706,#f59e0b);border-radius:16px;display:flex;align-items:center;justify-content:center;font-size:80px">&#128948;</div>
                @endif
            </div>
            <div class="col-lg-6">
                <span class="zei-label">Precious Metals</span>
                <h2 class="zei-title">Invest in Gold</h2>
                <p style="font-size:15px;color:var(--muted);line-height:1.8;margin-bottom:20px">From ancient civilizations to the modern era, gold has been the world's currency of choice. Today, investors buy gold as a hedge against political unrest and inflation.</p>
                <p style="font-size:15px;color:var(--muted);line-height:1.8;margin-bottom:28px">Many top investment advisors recommend portfolio allocation in commodities, including gold, to lower overall portfolio risk and protect purchasing power over time.</p>
                <div class="d-flex flex-column gap-3 mb-4">
                    @foreach(['Hedge against inflation and currency devaluation','Safe-haven asset during market volatility','Physical asset with intrinsic value','Liquid market with global demand'] as $item)
                    <div style="display:flex;gap:12px;align-items:center"><div style="width:22px;height:22px;border-radius:50%;background:rgba(217,119,6,.12);color:#d97706;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;flex-shrink:0">&#10003;</div><span style="font-size:14px;font-weight:500">{{ $item }}</span></div>
                    @endforeach
                </div>
                <a href="{{ route('register') }}" class="zei-btn zei-btn-green zei-btn-lg">Start Investing in Gold</a>
            </div>
        </div>
    </div>
</div>
@endsection
