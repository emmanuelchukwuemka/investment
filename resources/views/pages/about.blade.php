@extends('layouts.app')

@section('title', 'About Us | Webull Robin Empresa')

@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/about1.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i>
            <div class="caption1 text-white">About Us</div>
        </div>
        <div class="text-nav">
            <div class="heading3 text-white">About Us</div>
        </div>
    </div>
</div>

<div class="financial-assessment-block pt-100 pb-100 bg-white">
    <div class="container">
        <div class="row flex-item-center">
            <div class="col-12 col-xl-6 col-lg-12">
                <div class="bg-img w-100 overflow-hidden bora-20"><img class="w-100 h-100 hover-scale display-block bora-20" src="{{ asset('img/office.jpg') }}" alt=""></div>
            </div>
            <div class="col-12 col-xl-6 col-lg-12 flex-column">
                <div class="heading3 ml-40">company overview</div>
                <div class="nav-infor ml-40 mt-40">
                    <div class="list-nav flex-item-center gap-40">
                        <div class="nav-item active" data-name="about-us">About Us</div>
                        <div class="nav-item" data-name="mission">Mission</div>
                        <div class="nav-item" data-name="vision">Vision</div>
                    </div>
                    <div class="description item-filter" data-name="about-us">
                        <p>Webull Robin Empresa is based in California, USA, We provide long-term and short-term investment opportunities.<br>
                            By FINRA, Company Reg No (CRD#: 7482994)<br>
                            Investments Licensed & Incorporated by LOFSA (LABUAN FINANCIAL SERVICES AUTHORITY),
                            Security passed and protected by SIPC (Security Investor Protection Corporation)</p>
                        <p class="intro-text-lead">As a financial institution, we are well aware that money management requires a transparent and trusting relationship between a client and a broker in the market. Therefore, we are always ready to provide our partners with any information they may be interested in. We always conduct our business openly, and our activities are absolutely legal. Webull Robin Empresa is an officially registered company operating within the framework of international financial legislation, which ensures protection of our users both from the legal and financial side.</p>
                    </div>
                </div>
                <div class="description item-filter hide" data-name="mission">
                    <div class="title body3 text-secondary mt-16">Our mission is to provide comprehensive and personalized financial solutions that empower our clients to achieve their financial goals and secure their future.</div>
                    <div class="more-infor mt-24">
                        <div class="infor flex-item-center gap-12"><i class="ph-fill ph-check-circle fs-20 text-blue"></i><div class="text-button">Management and calculation of monthly expenses</div></div>
                        <div class="infor flex-item-center gap-12 mt-12"><i class="ph-fill ph-check-circle fs-20 text-blue"></i><div class="text-button">Identification of monthly income</div></div>
                        <div class="infor flex-item-center gap-12 mt-12"><i class="ph-fill ph-check-circle fs-20 text-blue"></i><div class="text-button">Creation of savings and investment plan</div></div>
                    </div>
                </div>
                <div class="description item-filter hide" data-name="vision">
                    <div class="title body3 text-secondary mt-16">Our unwavering vision is to be the most trusted and preferred partner in achieving financial success, diligently guiding our valued clients toward a secure and prosperous future.</div>
                    <div class="more-infor mt-24">
                        <div class="infor flex-item-center gap-12"><i class="ph-fill ph-check-circle fs-20 text-blue"></i><div class="text-button">Creation of savings and investment plan</div></div>
                        <div class="infor flex-item-center gap-12 mt-12"><i class="ph-fill ph-check-circle fs-20 text-blue"></i><div class="text-button">Management and calculation of monthly expenses</div></div>
                        <div class="infor flex-item-center gap-12 mt-12"><i class="ph-fill ph-check-circle fs-20 text-blue"></i><div class="text-button">Identification of monthly income</div></div>
                    </div>
                </div>
            </div>
            <div class="button-block flex-item-center gap-20 ml-40 mt-40 pb-8">
                <a class="button-share text-white bg-blue hover-button-black text-button pt-14 pb-14 pl-36 pr-36 bora-48" href="{{ route('contact') }}">Get started</a>
                <a class="button-share text-on-surface hover-button-black bg-white text-button pt-12 pb-12 pl-36 pr-36 bora-48 border-blue-2px flex-item-center gap-8" href="{{ route('contact') }}"><i class="ph ph-phone fs-20"></i><span><a href="https://api.whatsapp.com/send?phone=+19134088462" style="color: inherit;">+19134088462</a></span></a>
            </div>
        </div>
    </div>
</div>

<div class="service-block mt-100 pt-100 pb-100 bg-surface">
    <div class="container">
        <div class="heading-block text-center">
            <div class="heading3">Our Services</div>
            <div class="body3 text-secondary mt-12">Customized financial services designed to meet your unique needs and drive your financial success</div>
        </div>
        <div class="list-service row mt-32 row-gap-24">
            <div class="col-12 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="service-item hover-box-shadow bora-8 pt-32 pb-32 pl-28 pr-28 bg-white"><a class="service-item-main flex-column gap-16">
                    <div class="heading flex-item-center gap-16"><i class="icon-coin-hand text-blue fs-42"></i><div class="heading6 hover-text-blue">Daily Charges</div></div>
                    <div class="body3 text-secondary">Your deposit works for you exactly as much as you wish, and accruals are made every day.</div>
                    <div class="explore-block flex-item-center gap-4"><div class="text-button-small text-blue">Explore Plan</div><i class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                </a></div>
            </div>
            <div class="col-12 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="service-item hover-box-shadow bora-8 pt-32 pb-32 pl-28 pr-28 bg-white"><a class="service-item-main flex-column gap-16">
                    <div class="heading flex-item-center gap-16"><i class="icon-coin-pig text-blue fs-42"></i><div class="heading6 hover-text-blue">Instant payments</div></div>
                    <div class="body3 text-secondary">Getting your profit is very simple - you make out an application in your personal account and in a moment you will receive money on your wallet.</div>
                    <div class="explore-block flex-item-center gap-4"><div class="text-button-small text-blue">Explore Plan</div><i class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                </a></div>
            </div>
            <div class="col-12 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="service-item hover-box-shadow bora-8 pt-32 pb-32 pl-28 pr-28 bg-white"><a class="service-item-main flex-column gap-16">
                    <div class="heading flex-item-center gap-16"><i class="icon-coin-virus text-blue fs-42"></i><div class="heading6 hover-text-blue">Comfort and protection</div></div>
                    <div class="body3 text-secondary">Your charges are displayed in your personal cabinet, you can access it from any device, and all your accounts are securely encrypted.</div>
                    <div class="explore-block flex-item-center gap-4"><div class="text-button-small text-blue">Explore Plan</div><i class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                </a></div>
            </div>
            <div class="col-12 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="service-item hover-box-shadow bora-8 pt-32 pb-32 pl-28 pr-28 bg-white"><a class="service-item-main flex-column gap-16">
                    <div class="heading flex-item-center gap-16"><i class="icon-rocket text-blue fs-42"></i><div class="heading6 hover-text-blue">Referral bonus</div></div>
                    <div class="body3 text-secondary">Invite friends and earn 10% of their deposits as a bonus credited directly to your account.</div>
                    <div class="explore-block flex-item-center gap-4"><div class="text-button-small text-blue">Explore Plan</div><i class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                </a></div>
            </div>
        </div>
    </div>
</div>
@endsection
