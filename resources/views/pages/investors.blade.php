@extends('layouts.app')
@section('title', 'Investment Plans | Zenith Edge Investment')
@section('content')
<div class="zei-page-hero">
    <img src="{{ asset('lassets/images/banner/contact.png') }}" alt="Investment Plans" class="zei-page-hero-bg">
    <div class="zei-page-hero-overlay"></div>
    <div class="container">
        <div class="zei-page-hero-content">
            <div class="zei-breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">&#8250;</span><span class="cur">Investment Plans</span></div>
            <h1 class="zei-page-title">Investment Plans</h1>
            <p class="zei-page-sub">Choose the plan that matches your financial goals and start growing your wealth today.</p>
        </div>
    </div>
</div>
<div class="zei-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="zei-label">Flexible Options</span>
            <h2 class="zei-title">Plans For Every Investor</h2>
            <p class="zei-sub mx-auto">All plans include daily ROI, instant withdrawals, and 24/7 support.</p>
        </div>
        <div class="row g-4 justify-content-center">
            @php
            $staticPlans = [
                ['name'=>'Magna Trust Funds','min'=>100,'max'=>4999,'roi'=>12,'days'=>2,'featured'=>false],
                ['name'=>'Tax Free Savings Account','min'=>5000,'max'=>15000,'roi'=>15,'days'=>3,'featured'=>true],
                ['name'=>'Offshore Account','min'=>15000,'max'=>25000,'roi'=>20,'days'=>4,'featured'=>false],
                ['name'=>'Magna Biga','min'=>25000,'max'=>50000,'roi'=>30,'days'=>5,'featured'=>false],
                ['name'=>'Face of Magna','min'=>50000,'max'=>100000,'roi'=>50,'days'=>5,'featured'=>false],
            ];
            @endphp
            @foreach($staticPlans as $i => $p)
            <div class="col-lg-4 col-md-6">
                <div class="zei-plan {{ $p['featured'] ? 'featured' : '' }}">
                    @if($p['featured'])<div class="zei-plan-badge">Most Popular</div>@endif
                    <div class="zei-plan-name">{{ $p['name'] }}</div>
                    <div class="zei-plan-roi">{{ $p['roi'] }}<span>% ROI</span></div>
                    <div class="zei-plan-roi-label">{{ $p['days'] }}-day investment term</div>
                    <div class="zei-plan-divider"></div>
                    <div class="zei-plan-feature"><span class="zei-plan-check">&#10003;</span>${{ number_format($p['min']) }} &mdash; ${{ number_format($p['max']) }}</div>
                    <div class="zei-plan-feature"><span class="zei-plan-check">&#10003;</span>Duration: {{ $p['days'] }} days</div>
                    <div class="zei-plan-feature"><span class="zei-plan-check">&#10003;</span>Instant Withdrawal</div>
                    <div class="zei-plan-feature"><span class="zei-plan-check">&#10003;</span>24/7 Support</div>
                    <div style="margin-top:24px">
                        <a href="{{ route('login') }}" class="zei-btn {{ $p['featured'] ? 'zei-btn-green' : 'zei-btn-navy' }}" style="width:100%;justify-content:center;padding:13px">Choose Plan</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="zei-cta">
    <div class="container">
        <h2>Ready to Start?</h2>
        <p>Create your account and choose a plan that works for you.</p>
        <a href="{{ route('register') }}" class="zei-btn zei-btn-green zei-btn-lg">Create Free Account</a>
    </div>
</div>
@endsection
