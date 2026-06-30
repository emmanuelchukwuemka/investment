@extends('layouts.app')
@section('title', 'Our Values | Zenith Edge Investment')
@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i><div class="caption1 text-white">Our Values</div></div>
        <div class="text-nav"><div class="heading3 text-white">Our Values</div></div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        <div class="heading3 text-center">Our Core Values</div>
        <div class="body3 text-secondary mt-12 text-center">The principles that guide everything we do at Zenith Edge Investment</div>
        <div class="row mt-60 row-gap-32">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="bg-surface bora-16 p-32 text-center hover-box-shadow">
                    <i class="icon-coin-hand text-blue fs-48"></i>
                    <div class="heading6 mt-20">Integrity</div>
                    <div class="body3 text-secondary mt-12">We conduct all our business with the highest ethical standards and transparency. Our clients can trust that their interests always come first.</div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="bg-surface bora-16 p-32 text-center hover-box-shadow">
                    <i class="icon-rocket text-blue fs-48"></i>
                    <div class="heading6 mt-20">Innovation</div>
                    <div class="body3 text-secondary mt-12">We continuously develop and adopt cutting-edge trading strategies and technologies to stay ahead of market trends and deliver superior results.</div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="bg-surface bora-16 p-32 text-center hover-box-shadow">
                    <i class="icon-user-happy text-blue fs-48"></i>
                    <div class="heading6 mt-20">Client Focus</div>
                    <div class="body3 text-secondary mt-12">Our clients' success is our success. We tailor our services to meet individual needs and provide personalized guidance every step of the way.</div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="bg-surface bora-16 p-32 text-center hover-box-shadow">
                    <i class="icon-target text-blue fs-48"></i>
                    <div class="heading6 mt-20">Excellence</div>
                    <div class="body3 text-secondary mt-12">We are committed to excellence in every aspect of our operation, from investment strategy to customer service and regulatory compliance.</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
