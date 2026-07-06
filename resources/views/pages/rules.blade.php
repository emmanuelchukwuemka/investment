@extends('layouts.app')
@section('title', 'Rules | Zenith Edge Investment')
@section('content')
<div class="zei-page-hero">
    <img src="{{ asset('lassets/images/banner/contact.png') }}" alt="Rules" class="zei-page-hero-bg">
    <div class="zei-page-hero-overlay"></div>
    <div class="container">
        <div class="zei-page-hero-content">
            <div class="zei-breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">&#8250;</span><span class="cur">Rules</span></div>
            <h1 class="zei-page-title">Platform Rules</h1>
        </div>
    </div>
</div>
<div class="zei-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div style="background:#fff;border-radius:16px;border:1px solid var(--border);padding:48px">
                    <p style="font-size:15px;color:var(--muted);margin-bottom:28px;line-height:1.7">Please read these terms of use carefully before you start using this website and register for an account. By using this website, you confirm that you accept these terms.</p>
                    @php $rules=[
                        'Participation in the program is anonymous. We will never ask you to provide identity documents or personal information beyond what is required for account creation.',
                        'Our company will never sell or share your personal information (username, email, or deposit details) to any third party.',
                        'The activities of our company belong to the legal field. The company is officially registered and strictly abides by all applicable laws.',
                        'Our company accepts cryptocurrency as a payment method for investment. Zenith Edge Investment is not responsible for payment system behavior leading to delays or transfer issues.',
                        'It is highly recommended not to use your referral link to send bulk mail. Accounts found doing so may be blocked and frozen.',
                        'Zenith Edge Investment may modify these Terms of Use at any time by updating this page. It is your responsibility to check for changes.',
                        'As a private transaction, the program operates under applicable financial legislation. We are not FDIC insured and are not a licensed bank or securities company.',
                        'You agree that all information from Zenith Edge Investment is confidential and must not be disclosed. Nothing herein constitutes an offer or solicitation in any jurisdiction where such activity is prohibited.',
                    ]; @endphp
                    @foreach($rules as $i => $rule)
                    <div style="display:flex;gap:16px;margin-bottom:20px;padding-bottom:20px;border-bottom:1px solid var(--border){{ $i==count($rules)-1 ? ';border-bottom:none' : '' }}">
                        <div style="width:30px;height:30px;border-radius:50%;background:var(--navy);color:#fff;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:800;flex-shrink:0">{{ $i+1 }}</div>
                        <p style="font-size:14px;color:var(--muted);line-height:1.75;margin:4px 0 0">{{ $rule }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
