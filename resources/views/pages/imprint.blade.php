@extends('layouts.app')
@section('title', 'Imprint | Webull Robin Empresa')
@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i><div class="caption1 text-white">Imprint</div></div>
        <div class="text-nav"><div class="heading3 text-white">Imprint</div></div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        <h2 class="intro-heading uppercase">Imprint</h2>
        <div class="row row-gap-32 mt-40">
            <div class="col-12 col-md-6">
                <div class="bg-surface bora-16 p-32">
                    <div class="heading6">Company Information</div>
                    <div class="body3 text-secondary mt-16">
                        <strong>Company Name:</strong> Webull Robin Empresa<br>
                        <strong>Registered:</strong> California, USA<br>
                        <strong>FINRA CRD#:</strong> 7482994<br>
                        <strong>License:</strong> LOFSA (Labuan Financial Services Authority)<br>
                        <strong>Protection:</strong> SIPC (Security Investor Protection Corporation)
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="bg-surface bora-16 p-32">
                    <div class="heading6">Contact Information</div>
                    <div class="body3 text-secondary mt-16">
                        <strong>Email:</strong> support@webullrobinempresa.com<br>
                        <strong>Phone:</strong> +(310) 461 8235<br>
                        <strong>WhatsApp:</strong> +1 913-408-8462<br>
                        <strong>Address:</strong> California, USA<br>
                        <strong>Support Hours:</strong> 24/7
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
