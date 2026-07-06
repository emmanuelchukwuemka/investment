@extends('layouts.app')
@section('title', 'Contact Us | Zenith Edge Investment')
@section('content')

<div class="zei-page-hero">
    <img src="{{ asset('lassets/images/banner/contact.png') }}" alt="Contact" class="zei-page-hero-bg">
    <div class="zei-page-hero-overlay"></div>
    <div class="container">
        <div class="zei-page-hero-content">
            <div class="zei-breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="sep">&#8250;</span>
                <span class="cur">Contact Us</span>
            </div>
            <h1 class="zei-page-title">Contact Us</h1>
            <p class="zei-page-sub">Our dedicated team is available 24/7 to assist you with any questions.</p>
        </div>
    </div>
</div>

<div class="zei-section">
    <div class="container">
        <div class="row g-5 align-items-stretch">
            <div class="col-lg-4">
                <div class="zei-contact-box">
                    <h3 style="font-size:1.3rem;font-weight:800;margin:0 0 8px">Get In Touch</h3>
                    <p style="color:rgba(255,255,255,.7);font-size:14px;margin:0 0 28px">We'll get back to you within 24 hours, or call us anytime.</p>

                    <div class="zei-contact-item">
                        <div class="zei-contact-icon"><i class="ph-bold ph-clock"></i></div>
                        <div>
                            <div style="font-size:12px;color:rgba(255,255,255,.55);margin-bottom:2px">Support Hours</div>
                            <div style="font-weight:700;font-size:15px">24 / 7</div>
                        </div>
                    </div>
                    <div class="zei-contact-item">
                        <div class="zei-contact-icon"><i class="ph-fill ph-phone"></i></div>
                        <div>
                            <div style="font-size:12px;color:rgba(255,255,255,.55);margin-bottom:2px">WhatsApp / Phone</div>
                            <a href="https://api.whatsapp.com/send?phone=+19253015238" style="font-weight:700;font-size:15px;color:#fff">+1 (925) 301-5238</a>
                        </div>
                    </div>
                    <div class="zei-contact-item">
                        <div class="zei-contact-icon"><i class="ph-bold ph-envelope-simple"></i></div>
                        <div>
                            <div style="font-size:12px;color:rgba(255,255,255,.55);margin-bottom:2px">Email</div>
                            <div style="font-weight:700;font-size:14px;word-break:break-all">support@zenithedgeinvestment.com</div>
                        </div>
                    </div>
                    <div class="zei-contact-item">
                        <div class="zei-contact-icon"><i class="ph-bold ph-map-pin"></i></div>
                        <div>
                            <div style="font-size:12px;color:rgba(255,255,255,.55);margin-bottom:2px">Location</div>
                            <div style="font-weight:700;font-size:15px">California, USA</div>
                        </div>
                    </div>

                    <div style="margin-top:28px;display:flex;gap:10px">
                        <a href="https://www.facebook.com/" target="_blank" style="width:38px;height:38px;border-radius:50%;background:rgba(255,255,255,.13);display:flex;align-items:center;justify-content:center;color:#fff;font-size:13px"><i class="icon-facebook"></i></a>
                        <a href="https://www.linkedin.com/" target="_blank" style="width:38px;height:38px;border-radius:50%;background:rgba(255,255,255,.13);display:flex;align-items:center;justify-content:center;color:#fff;font-size:13px"><i class="icon-in"></i></a>
                        <a href="https://www.instagram.com/" target="_blank" style="width:38px;height:38px;border-radius:50%;background:rgba(255,255,255,.13);display:flex;align-items:center;justify-content:center;color:#fff;font-size:13px"><i class="icon-insta"></i></a>
                        <a href="https://www.twitter.com/" target="_blank" style="width:38px;height:38px;border-radius:50%;background:rgba(255,255,255,.13);display:flex;align-items:center;justify-content:center;color:#fff;font-size:13px"><i class="icon-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="zei-form-wrap" style="height:100%">
                    <h3 style="font-size:1.3rem;font-weight:800;color:var(--navy);margin:0 0 6px">Send Us a Message</h3>
                    <p style="color:var(--muted);font-size:14px;margin:0 0 28px">We will respond within 24 hours on business days.</p>
                    <form action="{{ route('contact.send') }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="zei-fg" style="margin-bottom:0">
                                    <label>Full Name</label>
                                    <input type="text" name="name" class="zei-inp" placeholder="Your name" value="{{ old('name') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="zei-fg" style="margin-bottom:0">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone" class="zei-inp" placeholder="Optional" value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="zei-fg" style="margin-bottom:0">
                                    <label>Email Address</label>
                                    <input type="email" name="email" class="zei-inp" placeholder="you@example.com" value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="zei-fg" style="margin-bottom:0">
                                    <label>Message</label>
                                    <textarea name="message" class="zei-ta" placeholder="Tell us how we can help you..." required>{{ old('message') }}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="zei-btn zei-btn-green zei-btn-lg">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
