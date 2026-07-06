@extends('layouts.app')
@section('title', 'Terms and Conditions | Zenith Edge Investment')
@section('content')

<div class="zei-page-hero">
    <img src="{{ asset('lassets/images/banner/contact.png') }}" alt="Terms" class="zei-page-hero-bg">
    <div class="zei-page-hero-overlay"></div>
    <div class="container">
        <div class="zei-page-hero-content">
            <div class="zei-breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="sep">&#8250;</span>
                <span class="cur">Terms and Conditions</span>
            </div>
            <h1 class="zei-page-title">Terms & Conditions</h1>
        </div>
    </div>
</div>

<div class="zei-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div style="background:#fff;border-radius:16px;border:1px solid var(--border);padding:48px">
                    <p style="font-size:15px;color:var(--muted);margin-bottom:36px;line-height:1.7">By using this website you are deemed to have read and agreed to the following terms and conditions. Please read them carefully before proceeding.</p>

                    @php
                    $sections = [
                        ['title'=>'Privacy Statement','body'=>'Zenith Edge Investment is committed to protecting your privacy. All data provided by a member will be used privately and not disclosed to any third parties. We will not sell, share, or rent your personal information. Any emails sent will only be in connection with the provision of agreed services.'],
                        ['title'=>'Guidance & Professional Advice','body'=>'Trading carries a high degree of risk and may not be suitable for all investors. Before investing, carefully consider your financial condition and experience level. Be aware of all risks associated with trading and seek advice from an independent financial adviser if in doubt. Past performance is not a guarantee of future results.'],
                        ['title'=>'Use of Site','body'=>'SPAM violations will result in immediate permanent account removal. Zenith Edge Investment reserves the right to accept or decline any member for membership without explanation.'],
                        ['title'=>'Responsibilities & General Terms','body'=>'Zenith Edge Investment services are available only to members. You agree to be of legal age (minimum 18 years) in your country to join. Every deposit is considered a private transaction between Zenith Edge Investment and its member.'],
                        ['title'=>'Disclaimer & Limitation of Liability','body'=>'We reserve the right to change rules, commissions, and rates at any time at our sole discretion. This is done to respect the integrity of all members\' interests as a whole. It is your sole responsibility to review current terms regularly.'],
                    ];
                    @endphp

                    @foreach($sections as $s)
                    <div style="margin-bottom:32px">
                        <h3 style="font-size:1.1rem;font-weight:800;color:var(--navy);padding-bottom:12px;border-bottom:2px solid var(--green);margin-bottom:14px;display:inline-block">{{ $s['title'] }}</h3>
                        <p style="font-size:14px;color:var(--muted);line-height:1.8;margin:0">{{ $s['body'] }}</p>
                    </div>
                    @endforeach

                    <div style="background:var(--bg);border-radius:10px;padding:20px;margin-top:16px;font-size:13px;color:var(--muted)">
                        Last updated: {{ date('F Y') }} &bull; For questions, contact <a href="mailto:support@zenithedgeinvestment.com" style="color:var(--navy);font-weight:600">support@zenithedgeinvestment.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
