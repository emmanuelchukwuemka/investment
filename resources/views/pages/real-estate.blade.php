@extends('layouts.app')
@section('title', 'Real Estate | Zenith Edge Investment')
@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i><div class="caption1 text-white">Real Estate</div></div>
        <div class="text-nav"><div class="heading3 text-white">Real Estate Investment</div></div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        <div class="row flex-item-center row-gap-40">
            <div class="col-12 col-lg-6">
                <div class="heading3">Real Estate Investment</div>
                <div class="body3 text-secondary mt-20">Real estate investment offers one of the most stable and lucrative opportunities in the financial world. Zenith Edge Investment connects investors with premium real estate opportunities across multiple markets, providing both short-term rental income and long-term capital appreciation. Our expert team identifies undervalued properties and emerging markets to maximize your returns.</div>
                <div class="list-service mt-32">
                    <div class="service-item flex-item-center"><i class="ph-bold ph-check text-blue fs-24"></i><div class="text-button ml-12">Residential Properties</div></div>
                    <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-blue fs-24"></i><div class="text-button ml-12">Commercial Real Estate</div></div>
                    <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-blue fs-24"></i><div class="text-button ml-12">REITs (Real Estate Investment Trusts)</div></div>
                    <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-blue fs-24"></i><div class="text-button ml-12">Property Development Projects</div></div>
                </div>
                <div class="button-block mt-40 flex-item-center gap-16">
                    <a class="button-share bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-8" href="{{ route('register') }}">Start Investing</a>
                    <a class="button-share bg-surface text-on-surface text-button pl-36 pr-36 pt-12 pb-12 bora-8" href="{{ route('contact') }}">Contact Us</a>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="bg-img w-100 bora-16 overflow-hidden"><img class="w-100" src="{{ asset('img/office.jpg') }}" alt="Real Estate"></div>
            </div>
        </div>
    </div>
</div>
@endsection
