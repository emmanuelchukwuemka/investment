@extends('layouts.app')
@section('title', 'Forex | Zenith Edge Investment')
@section('content')
<div class="zei-page-hero">
    <img src="{{ asset('lassets/images/banner/contact.png') }}" alt="Forex" class="zei-page-hero-bg">
    <div class="zei-page-hero-overlay"></div>
    <div class="container">
        <div class="zei-page-hero-content">
            <div class="zei-breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">&#8250;</span><span class="cur">Forex</span></div>
            <h1 class="zei-page-title">Forex</h1>
            <p class="zei-page-sub">Expert Forex investment services managed by our professional trading team.</p>
        </div>
    </div>
</div>
<div class="zei-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="{{ asset('img/people.jpg') }}" alt="Forex" style="width:100%;height:400px;object-fit:cover;border-radius:16px">
            </div>
            <div class="col-lg-6">
                <span class="zei-label">Market Expertise</span>
                <h2 class="zei-title">Professional Forex<br>Trading Services</h2>
                <p style="font-size:15px;color:var(--muted);line-height:1.8;margin-bottom:24px">Our expert team provides professional Forex trading services with deep market analysis, risk management, and consistent returns for our investors.</p>
                <div class="d-flex flex-column gap-3 mb-5">
                    @foreach(['Expert market analysis and research','Daily profit accruals to your account','Risk-managed trading strategies','Transparent reporting and tracking','24/7 dedicated support team'] as $item)
                    <div style="display:flex;gap:12px;align-items:center">
                        <div style="width:22px;height:22px;border-radius:50%;background:rgba(5,150,105,.12);color:var(--green);display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;flex-shrink:0">&#10003;</div>
                        <span style="font-size:14px;font-weight:500;color:var(--text)">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('register') }}" class="zei-btn zei-btn-green zei-btn-lg">Start Investing</a>
            </div>
        </div>
    </div>
</div>
@endsection
