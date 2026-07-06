@extends('layouts.app')
@section('title', 'Our Mission | Zenith Edge Investment')
@section('content')
<div class="zei-page-hero">
    <img src="{{ asset('lassets/images/banner/contact.png') }}" alt="Mission" class="zei-page-hero-bg">
    <div class="zei-page-hero-overlay"></div>
    <div class="container">
        <div class="zei-page-hero-content">
            <div class="zei-breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">&#8250;</span><span class="cur">Our Mission</span></div>
            <h1 class="zei-page-title">Our Mission</h1>
        </div>
    </div>
</div>
<div class="zei-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="zei-label">Our Purpose</span>
                <h2 class="zei-title">Empowering Financial<br>Independence</h2>
                <p style="font-size:15px;color:var(--muted);line-height:1.8;margin-bottom:24px">Our mission is to provide comprehensive and personalized financial solutions that empower our clients to achieve their financial goals and secure their future. We are committed to transparency, integrity, and excellence.</p>
                <div class="d-flex flex-column gap-3 mb-4">
                    @foreach(['Management and calculation of monthly expenses','Identification of monthly income streams','Creation of savings and investment plans','Long-term wealth preservation strategy','Risk assessment and management'] as $item)
                    <div style="display:flex;gap:12px;align-items:center">
                        <div style="width:22px;height:22px;border-radius:50%;background:rgba(5,150,105,.12);color:var(--green);display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;flex-shrink:0">&#10003;</div>
                        <span style="font-size:14px;font-weight:500;color:var(--text)">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('contact') }}" class="zei-btn zei-btn-green zei-btn-lg">Get Started</a>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('img/office.jpg') }}" alt="Our Mission" style="width:100%;height:420px;object-fit:cover;border-radius:16px">
            </div>
        </div>
    </div>
</div>
@endsection
