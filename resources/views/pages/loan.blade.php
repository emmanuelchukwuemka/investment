@extends('layouts.app')
@section('title', 'Loan | Webull Robin Empresa')
@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i><div class="caption1 text-white">Loan</div></div>
        <div class="text-nav"><div class="heading3 text-white">Loan Services</div></div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        <div class="row flex-item-center row-gap-40">
            <div class="col-12 col-lg-6">
                <div class="heading3">Our Loan Services</div>
                <div class="body3 text-secondary mt-20">Webull Robin Empresa offers flexible loan solutions to help you achieve your financial goals. Whether you need funds for personal use, business expansion, or investment opportunities, our loan products provide competitive rates and flexible repayment terms.</div>
                <div class="list-service mt-32">
                    <div class="service-item flex-item-center"><i class="ph-bold ph-check text-blue fs-24"></i><div class="text-button ml-12">Personal Loans</div></div>
                    <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-blue fs-24"></i><div class="text-button ml-12">Business Loans</div></div>
                    <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-blue fs-24"></i><div class="text-button ml-12">Investment Loans</div></div>
                    <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-blue fs-24"></i><div class="text-button ml-12">Competitive Interest Rates</div></div>
                    <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-blue fs-24"></i><div class="text-button ml-12">Flexible Repayment Terms</div></div>
                </div>
                <div class="button-block mt-40"><a class="button-share bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-8" href="{{ route('contact') }}">Apply for a Loan</a></div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="bg-surface bora-16 p-40">
                    <div class="heading6">Loan Features</div>
                    <div class="row mt-20 row-gap-20">
                        <div class="col-6 text-center"><div class="heading3 text-blue">5%</div><div class="body3 text-secondary">Annual Interest Rate</div></div>
                        <div class="col-6 text-center"><div class="heading3 text-blue">24h</div><div class="body3 text-secondary">Approval Time</div></div>
                        <div class="col-6 text-center"><div class="heading3 text-blue">$500</div><div class="body3 text-secondary">Minimum Amount</div></div>
                        <div class="col-6 text-center"><div class="heading3 text-blue">36mo</div><div class="body3 text-secondary">Maximum Term</div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
