@extends('layouts.app')
@section('title', 'Real Estate Investment | Zenith Edge Investment')
@section('content')
<div class="zei-page-hero">
    <img src="{{ asset('lassets/images/banner/contact.png') }}" alt="Real Estate" class="zei-page-hero-bg">
    <div class="zei-page-hero-overlay"></div>
    <div class="container">
        <div class="zei-page-hero-content">
            <div class="zei-breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">&#8250;</span><span class="cur">Real Estate</span></div>
            <h1 class="zei-page-title">Real Estate Investment</h1>
            <p class="zei-page-sub">Premium real estate opportunities with short-term income and long-term capital appreciation.</p>
        </div>
    </div>
</div>
<div class="zei-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="{{ asset('img/office.jpg') }}" alt="Real Estate Investment" style="width:100%;height:420px;object-fit:cover;border-radius:16px">
            </div>
            <div class="col-lg-6">
                <span class="zei-label">Real Estate</span>
                <h2 class="zei-title">Invest in Premium<br>Real Estate Markets</h2>
                <p style="font-size:15px;color:var(--muted);line-height:1.8;margin-bottom:24px">Real estate investment offers one of the most stable and lucrative opportunities in the financial world. Zenith Edge Investment connects you with premium opportunities across multiple markets, providing both rental income and capital appreciation.</p>
                <div class="d-flex flex-column gap-3 mb-5">
                    @foreach(['Residential Properties','Commercial Real Estate','REITs (Real Estate Investment Trusts)','Property Development Projects'] as $item)
                    <div style="display:flex;gap:12px;align-items:center">
                        <div style="width:22px;height:22px;border-radius:50%;background:rgba(5,150,105,.12);color:var(--green);display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;flex-shrink:0">&#10003;</div>
                        <span style="font-size:14px;font-weight:500;color:var(--text)">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
                <div style="display:flex;gap:12px;flex-wrap:wrap">
                    <a href="{{ route('register') }}" class="zei-btn zei-btn-green zei-btn-lg">Start Investing</a>
                    <a href="{{ route('real-estate.apply') }}" class="zei-btn zei-btn-lg" style="border:2px solid var(--navy);color:var(--navy);background:transparent">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
