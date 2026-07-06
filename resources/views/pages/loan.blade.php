@extends('layouts.app')
@section('title', 'Loan Services | Zenith Edge Investment')
@section('content')
<div class="zei-page-hero">
    <img src="{{ asset('lassets/images/banner/contact.png') }}" alt="Loan" class="zei-page-hero-bg">
    <div class="zei-page-hero-overlay"></div>
    <div class="container">
        <div class="zei-page-hero-content">
            <div class="zei-breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">&#8250;</span><span class="cur">Loan Services</span></div>
            <h1 class="zei-page-title">Loan Services</h1>
            <p class="zei-page-sub">Flexible loan solutions with competitive rates and fast approval.</p>
        </div>
    </div>
</div>
<div class="zei-section">
    <div class="container">
        <div class="row align-items-start g-5">
            <div class="col-lg-6">
                <span class="zei-label">Financial Solutions</span>
                <h2 class="zei-title">Loan Products<br>Tailored for You</h2>
                <p style="font-size:15px;color:var(--muted);line-height:1.8;margin-bottom:24px">Zenith Edge Investment offers flexible loan solutions to help you achieve your financial goals. Whether you need funds for personal use, business expansion, or investment opportunities, our products deliver.</p>
                <div class="d-flex flex-column gap-3 mb-5">
                    @foreach(['Personal Loans','Business Loans','Investment Loans','Competitive Interest Rates','Flexible Repayment Terms'] as $item)
                    <div style="display:flex;gap:12px;align-items:center">
                        <div style="width:22px;height:22px;border-radius:50%;background:rgba(5,150,105,.12);color:var(--green);display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;flex-shrink:0">&#10003;</div>
                        <span style="font-size:14px;font-weight:500;color:var(--text)">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('contact') }}" class="zei-btn zei-btn-green zei-btn-lg">Apply for a Loan</a>
            </div>
            <div class="col-lg-6">
                <div style="background:var(--bg);border-radius:16px;padding:40px;border:1px solid var(--border)">
                    <h3 style="font-size:1.1rem;font-weight:800;color:var(--navy);margin-bottom:24px">Loan Features</h3>
                    <div class="row g-4 text-center">
                        @foreach([['5%','Annual Interest'],['24h','Approval Time'],['$500','Minimum Amount'],['36mo','Maximum Term']] as $f)
                        <div class="col-6">
                            <div style="background:#fff;border-radius:12px;padding:24px;border:1px solid var(--border)">
                                <div style="font-size:2rem;font-weight:900;color:var(--navy);line-height:1">{{ $f[0] }}</div>
                                <div style="font-size:13px;color:var(--muted);margin-top:6px">{{ $f[1] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
