@extends('layouts.app')
@section('title', 'About Us | Zenith Edge Investment')
@section('content')

<div class="zei-page-hero">
    <img src="{{ asset('lassets/images/banner/about1.png') }}" alt="About Us" class="zei-page-hero-bg">
    <div class="zei-page-hero-overlay"></div>
    <div class="container">
        <div class="zei-page-hero-content">
            <div class="zei-breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="sep">&#8250;</span>
                <span class="cur">About Us</span>
            </div>
            <h1 class="zei-page-title">About Us</h1>
            <p class="zei-page-sub">Learn who we are, what we stand for, and why thousands trust us.</p>
        </div>
    </div>
</div>

<div class="zei-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div style="border-radius:16px;overflow:hidden">
                    <img src="{{ asset('img/office.jpg') }}" alt="Our Office" style="width:100%;height:420px;object-fit:cover;border-radius:16px;display:block">
                </div>
            </div>
            <div class="col-lg-6">
                <span class="zei-label">Company Overview</span>
                <h2 class="zei-title">Trusted. Licensed.<br>Results-Driven.</h2>
                <p style="font-size:14px;color:var(--muted);line-height:1.8;margin-bottom:20px">Zenith Edge Investment is based in California, USA, providing long-term and short-term investment opportunities to clients across 23+ countries.</p>
                <p style="font-size:14px;color:var(--muted);line-height:1.8;margin-bottom:20px">Regulated by FINRA (CRD# 7482994), licensed under LOFSA (Labuan Financial Services Authority), and protected by SIPC (Security Investor Protection Corporation), we operate with full transparency and international compliance.</p>
                <p style="font-size:14px;color:var(--muted);line-height:1.8;margin-bottom:28px">As a financial institution, we always conduct business openly and legally within the framework of international financial legislation.</p>
                <div style="display:flex;gap:12px;flex-wrap:wrap">
                    <a href="{{ route('contact') }}" class="zei-btn zei-btn-green zei-btn-lg">Get Started</a>
                    <a href="https://api.whatsapp.com/send?phone=+15413211863" class="zei-btn zei-btn-lg" style="border:2px solid var(--navy);color:var(--navy);background:transparent">
                        +1 (541) 321-1863
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="zei-section-sm zei-bg-light">
    <div class="container">
        <div class="zei-stats-wrap">
            <div class="zei-stat-item"><span class="zei-stat-num">23+</span><span class="zei-stat-label">Countries</span></div>
            <div class="zei-stat-item"><span class="zei-stat-num">298K+</span><span class="zei-stat-label">Registered Users</span></div>
            <div class="zei-stat-item"><span class="zei-stat-num">10+</span><span class="zei-stat-label">Years of Experience</span></div>
            <div class="zei-stat-item"><span class="zei-stat-num">$10.8M+</span><span class="zei-stat-label">Income Generated</span></div>
        </div>
    </div>
</div>

<div class="zei-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="zei-label">Our Services</span>
            <h2 class="zei-title">What We Offer You</h2>
            <p class="zei-sub mx-auto">Customized financial services designed to meet your unique needs.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="zei-card" style="display:flex;gap:20px;align-items:flex-start">
                    <div style="width:52px;height:52px;border-radius:12px;background:rgba(13,43,92,.08);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:24px;color:var(--navy)"><i class="icon-coin-hand"></i></div>
                    <div><div style="font-size:16px;font-weight:700;color:var(--navy);margin-bottom:8px">Daily Returns</div><p style="font-size:14px;color:var(--muted);margin:0;line-height:1.65">Your deposit works for you every day with consistent daily accruals to your account.</p></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="zei-card" style="display:flex;gap:20px;align-items:flex-start">
                    <div style="width:52px;height:52px;border-radius:12px;background:rgba(13,43,92,.08);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:24px;color:var(--navy)"><i class="icon-coin-pig"></i></div>
                    <div><div style="font-size:16px;font-weight:700;color:var(--navy);margin-bottom:8px">Instant Payments</div><p style="font-size:14px;color:var(--muted);margin:0;line-height:1.65">Submit a withdrawal request and receive funds on your wallet instantly without delays.</p></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="zei-card" style="display:flex;gap:20px;align-items:flex-start">
                    <div style="width:52px;height:52px;border-radius:12px;background:rgba(13,43,92,.08);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:24px;color:var(--navy)"><i class="icon-coin-virus"></i></div>
                    <div><div style="font-size:16px;font-weight:700;color:var(--navy);margin-bottom:8px">Comfort & Protection</div><p style="font-size:14px;color:var(--muted);margin:0;line-height:1.65">Access your account from any device with enterprise-grade encryption protecting your assets.</p></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="zei-card" style="display:flex;gap:20px;align-items:flex-start">
                    <div style="width:52px;height:52px;border-radius:12px;background:rgba(13,43,92,.08);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:24px;color:var(--navy)"><i class="icon-rocket"></i></div>
                    <div><div style="font-size:16px;font-weight:700;color:var(--navy);margin-bottom:8px">Referral Bonuses</div><p style="font-size:14px;color:var(--muted);margin:0;line-height:1.65">Invite friends and earn 10% of their deposits credited directly to your account balance.</p></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
