@extends('layouts.app')
@section('title', 'Investment Plans | Zenith Edge Investment')
@section('content')

<div class="zei-page-hero">
    <img src="{{ asset('lassets/images/banner/contact.png') }}" alt="Investment Plans" class="zei-page-hero-bg">
    <div class="zei-page-hero-overlay"></div>
    <div class="container">
        <div class="zei-page-hero-content">
            <div class="zei-breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="sep">&#8250;</span>
                <span class="cur">Investment Plans</span>
            </div>
            <h1 class="zei-page-title">Our Investment Plans</h1>
            <p class="zei-page-sub">Choose the plan that best fits your financial goals and start growing your wealth today.</p>
        </div>
    </div>
</div>

<div class="zei-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="zei-label">Flexible Plans</span>
            <h2 class="zei-title">Start With Any Amount</h2>
            <p class="zei-sub mx-auto">All plans include daily ROI, instant withdrawals, and 24/7 support.</p>
        </div>
        <div class="row g-4 justify-content-center">
            @forelse($plans as $i => $plan)
            <div class="col-lg-4 col-md-6">
                <div class="zei-plan {{ $i==1 ? 'featured' : '' }}">
                    @if($i==1)
                    <div class="zei-plan-badge">Most Popular</div>
                    @endif
                    <div class="zei-plan-name">{{ $plan->name }}</div>
                    <div class="zei-plan-roi">{{ $plan->roi_percent }}<span>% ROI</span></div>
                    <div class="zei-plan-roi-label">Per investment period of {{ $plan->duration_days }} days</div>
                    <div class="zei-plan-divider"></div>
                    <div class="zei-plan-feature">
                        <span class="zei-plan-check">&#10003;</span>
                        Min: <strong>${{ number_format($plan->min_amount, 0) }}</strong>
                        @if($plan->max_amount) &mdash; Max: <strong>${{ number_format($plan->max_amount, 0) }}</strong>@endif
                    </div>
                    <div class="zei-plan-feature">
                        <span class="zei-plan-check">&#10003;</span>
                        {{ $plan->duration_days }}-day investment term
                    </div>
                    <div class="zei-plan-feature">
                        <span class="zei-plan-check">&#10003;</span>
                        Daily accruals to your account
                    </div>
                    <div class="zei-plan-feature">
                        <span class="zei-plan-check">&#10003;</span>
                        Instant withdrawal processing
                    </div>
                    <div class="zei-plan-feature">
                        <span class="zei-plan-check">&#10003;</span>
                        24/7 dedicated support
                    </div>
                    @if($plan->description)
                    <p style="font-size:13px;margin-top:12px;{{ $i==1 ? 'color:rgba(255,255,255,.7)' : 'color:var(--muted)' }}">{{ $plan->description }}</p>
                    @endif
                    <div style="margin-top:24px">
                        <a href="{{ route('register') }}" class="zei-btn {{ $i==1 ? 'zei-btn-green' : 'zei-btn-navy' }}" style="width:100%;justify-content:center;padding:13px;font-size:15px">Get Started</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center" style="padding:60px 0">
                <div style="font-size:16px;color:var(--muted)">No investment plans available at the moment. Please check back later.</div>
            </div>
            @endforelse
        </div>

        {{-- Why invest section --}}
        <div style="margin-top:80px;background:var(--bg);border-radius:16px;padding:48px">
            <div class="text-center mb-5">
                <span class="zei-label">Why Choose Us</span>
                <h2 class="zei-title">Built for Your Success</h2>
            </div>
            <div class="row g-4">
                @foreach([
                    ['icon'=>'icon-coin-hand','title'=>'Daily Returns','desc'=>'Your profits accrue every day, giving you consistent growth.'],
                    ['icon'=>'icon-wallet','title'=>'Instant Withdrawals','desc'=>'No waiting periods — withdraw funds to your wallet at any time.'],
                    ['icon'=>'icon-coin-virus','title'=>'Bank-Grade Security','desc'=>'All accounts are encrypted and protected under SIPC.'],
                    ['icon'=>'icon-rocket','title'=>'10% Referral Bonus','desc'=>'Earn commission on both Level 1 and Level 2 referrals.'],
                ] as $f)
                <div class="col-md-6 col-lg-3">
                    <div style="text-align:center;padding:24px 16px">
                        <div style="width:56px;height:56px;border-radius:14px;background:rgba(13,43,92,.07);display:flex;align-items:center;justify-content:center;margin:0 auto 16px;font-size:26px;color:var(--navy)">
                            <i class="{{ $f['icon'] }}"></i>
                        </div>
                        <div style="font-size:16px;font-weight:700;color:var(--navy);margin-bottom:8px">{{ $f['title'] }}</div>
                        <p style="font-size:13px;color:var(--muted);margin:0;line-height:1.65">{{ $f['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="zei-cta">
    <div class="container">
        <h2>Ready to Start Investing?</h2>
        <p>Create your free account in minutes and choose a plan that works for you.</p>
        <a href="{{ route('register') }}" class="zei-btn zei-btn-green zei-btn-lg">Create Free Account</a>
    </div>
</div>

@endsection
