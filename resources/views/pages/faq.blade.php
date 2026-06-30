@extends('layouts.app')

@section('title', 'FAQs | Webull Robin Empresa')

@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i>
            <div class="caption1 text-white">FAQs</div>
        </div>
        <div class="text-nav">
            <div class="heading3 text-white">FAQs</div>
            <div class="sub-heading mt-8 text-white fw-400">Explore our frequently asked questions and our answers to them.</div>
        </div>
    </div>
</div>

<div class="faq-block mt-100">
    <div class="container">
        <div class="row flex-center">
            <div class="col-12 col-lg-8">
                <div class="list-question">
                    <div class="question-item hover-box-shadow pointer mt-20 pl-28 pr-28 bora-8 border-line-1px">
                        <div class="question-item-main flex-between pt-16 pb-16 heading7">How to register in the project?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                        <div class="content-question"><div class="border-line"></div><div class="body3 text-secondary pt-16 pb-16">In order to register in this project, you need to click on the "Registration" button at the top of the page and fill in the required fields of the questionnaire.</div></div>
                    </div>
                    <div class="question-item hover-box-shadow pointer mt-20 pl-28 pr-28 bora-8 border-line-1px">
                        <div class="question-item-main flex-between pt-16 pb-16 heading7">Who is allowed to register and participate in this investment project?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                        <div class="content-question"><div class="border-line"></div><div class="body3 text-secondary pt-16 pb-16">Any adult citizen. The country of residence does not matter.</div></div>
                    </div>
                    <div class="question-item hover-box-shadow pointer mt-20 pl-28 pr-28 bora-8 border-line-1px">
                        <div class="question-item-main flex-between pt-16 pb-16 heading7">Is the investor obligated to provide reliable information about himself?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                        <div class="content-question"><div class="border-line"></div><div class="body3 text-secondary pt-16 pb-16">No, you can remain anonymous and decide what information to provide.</div></div>
                    </div>
                    <div class="question-item hover-box-shadow pointer mt-20 pl-28 pr-28 bora-8 border-line-1px">
                        <div class="question-item-main flex-between pt-16 pb-16 heading7">How do I access my personal cabinet?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                        <div class="content-question"><div class="border-line"></div><div class="body3 text-secondary pt-16 pb-16">To log in, you must use the login and password that you have chosen and indicated during the registration.</div></div>
                    </div>
                </div>
                <div class="list-question mt-40">
                    <div class="question-item hover-box-shadow pointer mt-20 pl-28 pr-28 bora-8 border-line-1px">
                        <div class="question-item-main flex-between pt-16 pb-16 heading7">From which device can I access my personal cabinet?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                        <div class="content-question"><div class="border-line"></div><div class="body3 text-secondary pt-16 pb-16">From any: phone, tablet, computer.</div></div>
                    </div>
                    <div class="question-item hover-box-shadow pointer mt-20 pl-28 pr-28 bora-8 border-line-1px">
                        <div class="question-item-main flex-between pt-16 pb-16 heading7">What should I do if I forgot my password for logging in to my account?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                        <div class="content-question"><div class="border-line"></div><div class="body3 text-secondary pt-16 pb-16">You can use the form to recover passwords or contact customer support.</div></div>
                    </div>
                    <div class="question-item hover-box-shadow pointer mt-20 pl-28 pr-28 bora-8 border-line-1px">
                        <div class="question-item-main flex-between pt-16 pb-16 heading7">How quickly after registration does the investor need to make a deposit?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                        <div class="content-question"><div class="border-line"></div><div class="body3 text-secondary pt-16 pb-16">At any convenient time. After registration, you can carefully study the conditions of the service plans and only after that make the deposit.</div></div>
                    </div>
                    <div class="question-item hover-box-shadow pointer mt-20 pl-28 pr-28 bora-8 border-line-1px">
                        <div class="question-item-main flex-between pt-16 pb-16 heading7">When do accrual to my deposit start?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                        <div class="content-question"><div class="border-line"></div><div class="body3 text-secondary pt-16 pb-16">All accruals are carried every second. Just as you wish.</div></div>
                    </div>
                    <div class="question-item hover-box-shadow pointer mt-20 pl-28 pr-28 bora-8 border-line-1px">
                        <div class="question-item-main flex-between pt-16 pb-16 heading7">Is there a fee for withdrawing profits?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                        <div class="content-question"><div class="border-line"></div><div class="body3 text-secondary pt-16 pb-16">No, all payments are instant and conducted without commissions. The minimum withdrawal amount is $10.50 BTC.</div></div>
                    </div>
                    <div class="question-item hover-box-shadow pointer mt-20 pl-28 pr-28 bora-8 border-line-1px">
                        <div class="question-item-main flex-between pt-16 pb-16 heading7">How to become a member of the referral program?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                        <div class="content-question"><div class="border-line"></div><div class="body3 text-secondary pt-16 pb-16">It is enough to be a registered participant in the project. Your referral link is stored in your personal cabinet.</div></div>
                    </div>
                    <div class="question-item hover-box-shadow pointer mt-20 pl-28 pr-28 bora-8 border-line-1px">
                        <div class="question-item-main flex-between pt-16 pb-16 heading7">How many levels are there in the referral system?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                        <div class="content-question"><div class="border-line"></div><div class="body3 text-secondary pt-16 pb-16">There are two levels in the referral system of our project, this will allow you to make profit from sub-referrals.</div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="more-question-block mt-100">
    <div class="container">
        <div class="row flex-center">
            <div class="col-12 col-lg-8">
                <div class="content bg-gradient-blue bora-16 flex-columns-center gap-16 pt-32 pb-32 pl-28 pr-28">
                    <div class="bg-img w-120"><img class="w-100" src="{{ asset('lassets/images/component/avatar-group.png') }}" alt=""></div>
                    <div class="text text-center">
                        <div class="heading6 text-white">Still have questions?</div>
                        <div class="body3 text-white mt-8">Can't find the answer you're looking for? Please chat to our friendly team.</div>
                    </div>
                    <a class="button-share hover-button-black bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48" href="{{ route('contact') }}">Chat Center</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
