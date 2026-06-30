@extends('layouts.app')
@section('title', 'Our Mission | Zenith Edge Investment')
@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i><div class="caption1 text-white">Our Mission</div></div>
        <div class="text-nav"><div class="heading3 text-white">Our Mission</div></div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        <div class="row flex-item-center row-gap-40">
            <div class="col-12 col-lg-6">
                <div class="heading3">Our Mission</div>
                <div class="body3 text-secondary mt-20">Our mission is to provide comprehensive and personalized financial solutions that empower our clients to achieve their financial goals and secure their future. We are committed to transparency, integrity, and excellence in everything we do.</div>
                <div class="more-infor mt-40">
                    <div class="infor flex-item-center gap-12"><i class="ph-fill ph-check-circle fs-20 text-blue"></i><div class="text-button">Management and calculation of monthly expenses</div></div>
                    <div class="infor flex-item-center gap-12 mt-16"><i class="ph-fill ph-check-circle fs-20 text-blue"></i><div class="text-button">Identification of monthly income streams</div></div>
                    <div class="infor flex-item-center gap-12 mt-16"><i class="ph-fill ph-check-circle fs-20 text-blue"></i><div class="text-button">Creation of savings and investment plan</div></div>
                    <div class="infor flex-item-center gap-12 mt-16"><i class="ph-fill ph-check-circle fs-20 text-blue"></i><div class="text-button">Long-term wealth preservation strategy</div></div>
                    <div class="infor flex-item-center gap-12 mt-16"><i class="ph-fill ph-check-circle fs-20 text-blue"></i><div class="text-button">Risk assessment and management</div></div>
                </div>
                <div class="button-block mt-40"><a class="button-share bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-8" href="{{ route('contact') }}">Get Started</a></div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="bg-img w-100 bora-16 overflow-hidden"><img class="w-100" src="{{ asset('img/office.jpg') }}" alt="Mission"></div>
            </div>
        </div>
    </div>
</div>
@endsection
