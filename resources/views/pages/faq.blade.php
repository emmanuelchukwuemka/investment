@extends('layouts.app')
@section('title', 'FAQs | Zenith Edge Investment')
@section('content')

<div class="zei-page-hero">
    <img src="{{ asset('lassets/images/banner/contact.png') }}" alt="FAQs" class="zei-page-hero-bg">
    <div class="zei-page-hero-overlay"></div>
    <div class="container">
        <div class="zei-page-hero-content">
            <div class="zei-breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="sep">&#8250;</span>
                <span class="cur">FAQs</span>
            </div>
            <h1 class="zei-page-title">Frequently Asked Questions</h1>
            <p class="zei-page-sub">Find quick answers to the most common questions about our platform.</p>
        </div>
    </div>
</div>

<div class="zei-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                @php
                $faqs = [
                    ['q'=>'How do I register in the project?','a'=>'Click the "Create Account" button at the top of the page and fill in the required fields. Registration takes less than 2 minutes.'],
                    ['q'=>'Who is allowed to register and participate?','a'=>'Any adult citizen over 18 years of age. The country of residence does not matter — we serve clients in 23+ countries.'],
                    ['q'=>'Is the investor required to provide personal information?','a'=>'Basic information is needed to create your account. You decide what additional details to provide.'],
                    ['q'=>'How do I access my personal dashboard?','a'=>'Use the email and password you chose during registration to sign in at zenithedgeinvest.xyz/login.'],
                    ['q'=>'From which devices can I access my account?','a'=>'Any device — smartphone, tablet, or computer. Your dashboard is fully mobile-responsive.'],
                    ['q'=>'What if I forgot my password?','a'=>'Use the "Forgot Password" link on the login page to reset your password via email, or contact our support team.'],
                    ['q'=>'How quickly do I need to make a deposit after registration?','a'=>'Take all the time you need. Study the investment plans carefully before making any deposit.'],
                    ['q'=>'When do my investment returns start?','a'=>'Returns begin accruing from the moment your deposit is confirmed and your investment plan is activated.'],
                    ['q'=>'Is there a fee for withdrawing profits?','a'=>'No — all withdrawals are processed without commission. The minimum withdrawal amount is $10.'],
                    ['q'=>'How do I join the referral program?','a'=>'You are automatically enrolled when you register. Your unique referral link is available in your dashboard.'],
                    ['q'=>'How many referral levels are there?','a'=>'Two levels — you earn 10% on Level 1 referral deposits and 10% on Level 2 sub-referral profits.'],
                ];
                @endphp
                @foreach($faqs as $faq)
                <div class="zei-faq-item">
                    <button class="zei-faq-q" onclick="toggleFaq(this)">
                        {{ $faq['q'] }}
                        <span class="zei-faq-icon">+</span>
                    </button>
                    <div class="zei-faq-a">{{ $faq['a'] }}</div>
                </div>
                @endforeach

                <div style="background:linear-gradient(135deg,var(--navy) 0%,#1a4080 100%);border-radius:16px;padding:36px;text-align:center;margin-top:48px">
                    <h3 style="font-size:1.3rem;font-weight:800;color:#fff;margin:0 0 10px">Still Have Questions?</h3>
                    <p style="color:rgba(255,255,255,.7);font-size:14px;margin:0 0 24px">Our support team is available 24/7 to help you with anything.</p>
                    <a href="{{ route('contact') }}" class="zei-btn zei-btn-green zei-btn-lg">Contact Support</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
function toggleFaq(btn){
    var a=btn.nextElementSibling;
    var isOpen=btn.classList.contains('open');
    document.querySelectorAll('.zei-faq-q').forEach(function(b){
        b.classList.remove('open');
        b.nextElementSibling.classList.remove('open');
    });
    if(!isOpen){btn.classList.add('open');a.classList.add('open');}
}
</script>
@endsection
