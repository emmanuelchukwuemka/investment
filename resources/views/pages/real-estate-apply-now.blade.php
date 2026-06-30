@extends('layouts.app')

@section('title', 'Real Estate Apply Now | Webull Robin Empresa')

@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32">
            <a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a>
            <i class="ph ph-caret-double-right text-white"></i>
            <div class="caption1 text-white">Real Estate Apply Now</div>
        </div>
        <div class="text-nav">
            <div class="heading3 text-white">Real Estate Apply Now</div>
        </div>
    </div>
</div>

<div class="form-contact style-one mt-100">
    <div class="container">
        <h3 class="text-center">Apply Now</h3>
        <p>
            Real estate investment involves the purchase, ownership, management, rental and/or sale
            of real estate for profit.
            Improvement of realty property as part of a real estate investment strategy is generally
            considered to be a sub-specialty of real estate investing called real estate development.
            Real estate is an asset form with limited liquidity relative to other investments
            (such as stocks or bonds that openly trade on financial markets).
            It is also capital intensive (although capital may be gained through mortgage leverage)
            and is highly cash flow dependent.
            If these factors are not well understood and managed by the investor, real estate
            becomes a risky investment.
        </p>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('real-estate.apply') }}" method="POST">
            @csrf
            <div class="me-contact-form">
                <input type="text" placeholder="Name" name="name" id="full_name"
                    class="require @error('name') is-invalid @enderror"
                    value="{{ old('name') }}"/>
                @error('name')<div class="text-danger">{{ $message }}</div>@enderror

                <input type="text" placeholder="Subject" name="subject" id="subject"
                    value="{{ old('subject') }}"/>

                <input type="text" placeholder="Email" name="email" id="email"
                    class="require @error('email') is-invalid @enderror"
                    value="{{ old('email') }}"/>
                @error('email')<div class="text-danger">{{ $message }}</div>@enderror

                <textarea placeholder="Message" name="message" id="message"
                    class="@error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                @error('message')<div class="text-danger">{{ $message }}</div>@enderror

                <button type="submit" class="me-btn submitForm">Submit</button>
            </div>
        </form>
    </div>
</div>

<a class="scroll-to-top-btn" href="#header"><i class="ph-bold ph-caret-up"></i></a>
<div class="pb-100"></div>
@endsection
