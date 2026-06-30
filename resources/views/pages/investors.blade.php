@extends('layouts.app')

@section('title', 'Investment Plans | Webull Robin Empresa')

@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i>
            <div class="caption1 text-white">Investors</div>
        </div>
        <div class="text-nav">
            <div class="heading3 text-white">Investors</div>
        </div>
    </div>
</div>

<div class="pricing-block style-pricing">
    <div class="pricing-main mt-100">
        <div class="container">
            <div class="heading flex-columns-center row-gap-32">
                <div class="title text-center">
                    <div class="heading3">Investment Plans</div>
                </div>
            </div>
            <div class="list-pricing show mt-60">
                <div class="row row-gap-32">
                    <div class="col-12 col-lg-4">
                        <div class="pricing-item pt-36 pb-36 pl-24 pr-24 bora-16 box-shadow bg-blue text-white">
                            <div class="heading6">Magna Trust Funds</div>
                            <div class="price flex-item-center gap-8 mt-20"><div class="heading2">$100</div><div class="body3">/ 12%</div></div>
                            <div class="button-block w-100 mt-24"><a class="button-share text-center display-block hover-button-black bg-white border-blue-1px text-on-surface text-button w-100 pt-12 pb-12 bora-100" href="{{ route('login') }}">Choose Plan</a></div>
                            <div class="list-feature mt-40 flex-column gap-12">
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">$100 - $4,999</div></div>
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">Duration: 2 days</div></div>
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">Instant Withdrawal</div></div>
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">24/7 Support</div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="pricing-item pt-36 pb-36 pl-24 pr-24 bora-16 box-shadow bg-blue text-white">
                            <div class="heading6">Tax Free Savings Account</div>
                            <div class="price flex-item-center gap-8 mt-20"><div class="heading2">$5,000</div><div class="body3">/ 15%</div></div>
                            <div class="button-block w-100 mt-24"><a class="button-share text-center display-block hover-button-black bg-white border-blue-1px text-on-surface text-button w-100 pt-12 pb-12 bora-100" href="{{ route('login') }}">Choose Plan</a></div>
                            <div class="list-feature mt-40 flex-column gap-12">
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">$5,000 - $15,000</div></div>
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">Duration: 3 days</div></div>
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">Instant Withdrawal</div></div>
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">24/7 Support</div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="pricing-item pt-36 pb-36 pl-24 pr-24 bora-16 box-shadow bg-blue text-white">
                            <div class="heading6">Offshore Account</div>
                            <div class="price flex-item-center gap-8 mt-20"><div class="heading2">$15,000</div><div class="body3">/ 20%</div></div>
                            <div class="button-block w-100 mt-24"><a class="button-share text-center display-block hover-button-black bg-white border-blue-1px text-on-surface text-button w-100 pt-12 pb-12 bora-100" href="{{ route('login') }}">Choose Plan</a></div>
                            <div class="list-feature mt-40 flex-column gap-12">
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">$15,000 - $25,000</div></div>
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">Duration: 4 days</div></div>
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">Instant Withdrawal</div></div>
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">24/7 Support</div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="pricing-item pt-36 pb-36 pl-24 pr-24 bora-16 box-shadow bg-blue text-white">
                            <div class="heading6">Magna Biga</div>
                            <div class="price flex-item-center gap-8 mt-20"><div class="heading2">$25,000</div><div class="body3">/ 30%</div></div>
                            <div class="button-block w-100 mt-24"><a class="button-share text-center display-block hover-button-black bg-white border-blue-1px text-on-surface text-button w-100 pt-12 pb-12 bora-100" href="{{ route('login') }}">Choose Plan</a></div>
                            <div class="list-feature mt-40 flex-column gap-12">
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">$25,000 - $50,000</div></div>
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">Duration: 5 days</div></div>
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">Instant Withdrawal</div></div>
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">24/7 Support</div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="pricing-item pt-36 pb-36 pl-24 pr-24 bora-16 box-shadow bg-blue text-white">
                            <div class="heading6">Face of Magna</div>
                            <div class="price flex-item-center gap-8 mt-20"><div class="heading2">$50,000</div><div class="body3">/ 50%</div></div>
                            <div class="button-block w-100 mt-24"><a class="button-share text-center display-block hover-button-black bg-white border-blue-1px text-on-surface text-button w-100 pt-12 pb-12 bora-100" href="{{ route('login') }}">Choose Plan</a></div>
                            <div class="list-feature mt-40 flex-column gap-12">
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">$50,000 - $100,000</div></div>
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">Duration: 5 days</div></div>
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">Instant Withdrawal</div></div>
                                <div class="item flex-item-center gap-16"><i class="ph-fill ph-check-circle fs-32 text-white"></i><div class="body3">24/7 Support</div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
