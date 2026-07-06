@extends('layouts.app')
@section('title', 'Our Values | Zenith Edge Investment')
@section('content')
<div class="zei-page-hero">
    <img src="{{ asset('lassets/images/banner/contact.png') }}" alt="Our Values" class="zei-page-hero-bg">
    <div class="zei-page-hero-overlay"></div>
    <div class="container">
        <div class="zei-page-hero-content">
            <div class="zei-breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">&#8250;</span><span class="cur">Our Values</span></div>
            <h1 class="zei-page-title">Our Values</h1>
        </div>
    </div>
</div>
<div class="zei-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="zei-label">What Drives Us</span>
            <h2 class="zei-title">The Principles Behind<br>Everything We Do</h2>
        </div>
        <div class="row g-4">
            @foreach([
                ['icon'=>'icon-target','title'=>'Integrity','desc'=>'We operate with complete transparency and honesty in every interaction, transaction, and decision we make.'],
                ['icon'=>'icon-user-happy','title'=>'Client Focus','desc'=>'Our clients\' financial wellbeing is our top priority. Every strategy and decision is made with your best interest in mind.'],
                ['icon'=>'icon-text-search','title'=>'Excellence','desc'=>'We hold ourselves to the highest standards of performance, constantly improving to deliver exceptional results.'],
                ['icon'=>'icon-coin-hand','title'=>'Innovation','desc'=>'We leverage the latest financial technologies and market insights to provide cutting-edge investment solutions.'],
                ['icon'=>'icon-gear-warning','title'=>'Security','desc'=>'We implement bank-grade security measures to protect your assets and personal information at all times.'],
                ['icon'=>'icon-rocket','title'=>'Growth','desc'=>'We are committed to growing not just your investment portfolio, but also our own expertise and capabilities.'],
            ] as $v)
            <div class="col-md-6 col-lg-4">
                <div class="zei-card" style="text-align:center;padding:36px 28px">
                    <div style="width:60px;height:60px;border-radius:16px;background:rgba(13,43,92,.08);display:flex;align-items:center;justify-content:center;margin:0 auto 20px;font-size:28px;color:var(--navy)"><i class="{{ $v['icon'] }}"></i></div>
                    <div style="font-size:18px;font-weight:800;color:var(--navy);margin-bottom:10px">{{ $v['title'] }}</div>
                    <p style="font-size:14px;color:var(--muted);line-height:1.7;margin:0">{{ $v['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
