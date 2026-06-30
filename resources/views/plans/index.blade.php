@extends('layouts.app')

@section('title', 'Investment Plans | Zenith Edge Investment')

@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32">
            <a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a>
            <i class="ph ph-caret-double-right text-white"></i>
            <div class="caption1 text-white">Investment Plans</div>
        </div>
        <div class="text-nav">
            <div class="heading3 text-white">Our Investment Plans</div>
        </div>
    </div>
</div>

<div class="form-contact style-one mt-80 mb-80">
    <div class="container">
        <div class="row row-gap-32 justify-content-center">
            @forelse($plans as $plan)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="bg-surface bora-16 p-32 hover-box-shadow h-100 flex-columns-between">
                    <div>
                        <div class="heading6 text-blue">{{ $plan->name }}</div>
                        <div class="body3 text-secondary mt-12">{{ $plan->description }}</div>
                        <div class="line mt-20 mb-20"></div>
                        <div class="flex-item-center gap-8 mt-12">
                            <i class="ph ph-chart-line-up text-blue fs-20"></i>
                            <span class="body3">ROI: <strong>{{ $plan->roi_percent }}%</strong></span>
                        </div>
                        <div class="flex-item-center gap-8 mt-8">
                            <i class="ph ph-calendar text-blue fs-20"></i>
                            <span class="body3">Duration: <strong>{{ $plan->duration_days }} days</strong></span>
                        </div>
                        <div class="flex-item-center gap-8 mt-8">
                            <i class="ph ph-currency-dollar text-blue fs-20"></i>
                            <span class="body3">Min: <strong>${{ number_format($plan->min_amount, 0) }}</strong>
                                @if($plan->max_amount)
                                    — Max: <strong>${{ number_format($plan->max_amount, 0) }}</strong>
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="mt-32">
                        <a href="{{ route('register') }}" class="button-share display-block text-center bg-blue text-white text-button pt-12 pb-12 bora-8 hover-button-black">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <div class="body2 text-secondary">No investment plans available at the moment. Please check back later.</div>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
