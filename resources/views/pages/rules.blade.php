@extends('layouts.app')

@section('title', 'Rules | Zenith Edge Investment')

@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i>
            <div class="caption1 text-white">Rules</div>
        </div>
        <div class="text-nav"><div class="heading3 text-white">Rules</div></div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        <h2 class="intro-heading uppercase">Rules</h2>
        <div class="container-fluid">
            <p>Please read these website terms of use carefully before you start using this website and register for an account. By using this website, you confirm that you accept these terms of use and agree to abide by them.</p>
            <p>Participation in the program is anonymous. We will never ask you to provide any documents that prove your identity or other documents that contain your personal information. In addition, we do not require you to pass any authentication program by sending a file at your physical address or phone number.</p>
            <p>Our company will never sell or share your personal information (user, full name, email and information about your deposit) to any third party.</p>
            <p>The activities of our company belong to the legal field; the company is officially registered and strictly abides by all laws. Participation in the program may involve certain cryptocurrency deposits.</p>
            <p>Our company accepts cryptocurrency as a payment method for investment. Zenith Edge Investment is not responsible for the behavior of the payment system, which leads to negative consequences of payment delays or transfer of funds.</p>
            <p>Our company wants its partners to respect the privacy of other users, so it is highly recommended not to use the referral link to send bulk mail. In the event of such a complaint, the company has the right to block participants who are active senders and freeze their accounts.</p>
            <p>Zenith Edge Investment may modify these Terms of Use at any time by modifying this page. Please check this page from time to time to understand any changes we make as they are binding on you.</p>
            <p>As a private transaction, the program is exempt from the 1933 US Securities Act, the 1934 US Securities Exchange Act and the 1940 US Investment Corporation Act, as well as all other rules, regulations and amendments. We are not FDIC insured. We are not a licensed bank or a securities company.</p>
            <p>You agree that all information, communications and materials from Zenith Edge Investment are unsolicited and must be kept confidential and prevent any disclosure. In addition, the information, communications and materials contained herein shall not be considered as an offer, nor shall it be deemed to be an investment in a jurisdiction that is considered to be a non-disclosure or solicitation of an unlawful jurisdiction.</p>
        </div>
    </div>
</div>
@endsection
