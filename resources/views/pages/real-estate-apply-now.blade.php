@extends('layouts.app')
@section('title', 'Real Estate Application | Zenith Edge Investment')
@section('content')
<div class="zei-page-hero">
    <img src="{{ asset('lassets/images/banner/contact.png') }}" alt="Apply Now" class="zei-page-hero-bg">
    <div class="zei-page-hero-overlay"></div>
    <div class="container">
        <div class="zei-page-hero-content">
            <div class="zei-breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">&#8250;</span><a href="{{ route('real-estate') }}">Real Estate</a><span class="sep">&#8250;</span><span class="cur">Apply Now</span></div>
            <h1 class="zei-page-title">Real Estate Application</h1>
        </div>
    </div>
</div>
<div class="zei-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="zei-form-wrap">
                    <h3 style="font-size:1.3rem;font-weight:800;color:var(--navy);margin:0 0 8px">Apply for Real Estate Investment</h3>
                    <p style="color:var(--muted);font-size:14px;margin:0 0 28px;line-height:1.7">Real estate investment involves the purchase, ownership, management, rental and/or sale of real estate for profit. Our experts will evaluate your application and get back to you within 24 hours.</p>
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="zei-fg" style="margin-bottom:0"><label>Full Name</label><input type="text" name="name" class="zei-inp" placeholder="Your name" required></div>
                            </div>
                            <div class="col-md-6">
                                <div class="zei-fg" style="margin-bottom:0"><label>Email</label><input type="email" name="email" class="zei-inp" placeholder="you@example.com" required></div>
                            </div>
                            <div class="col-md-6">
                                <div class="zei-fg" style="margin-bottom:0"><label>Phone Number</label><input type="text" name="phone" class="zei-inp" placeholder="+1 234 567 8900"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="zei-fg" style="margin-bottom:0"><label>Investment Budget</label><input type="text" name="budget" class="zei-inp" placeholder="e.g. $10,000 - $50,000"></div>
                            </div>
                            <div class="col-12">
                                <div class="zei-fg" style="margin-bottom:0"><label>Message / Investment Interest</label><textarea name="message" class="zei-ta" placeholder="Tell us what type of real estate investment you are interested in..." required></textarea></div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="zei-btn zei-btn-green zei-btn-lg">Submit Application</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
