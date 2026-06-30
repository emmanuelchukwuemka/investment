@extends('layouts.app')

@section('title', 'Terms and Conditions | Zenith Edge Investment')

@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i>
            <div class="caption1 text-white">Terms and Conditions</div>
        </div>
        <div class="text-nav"><div class="heading3 text-white">Terms and Conditions</div></div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        <h2 class="intro-heading uppercase text-center">Terms and Conditions</h2>
        <p class="intro-text-lead">
            Please read the guidelines below<br>
            In using this website you are deemed to have read and agreed to the following terms and conditions:
        </p>

        <h4 class="text-center">Privacy Statement</h4>
        <p>Zenith Edge Investment knows that you care how information about you is used and shared. Hence we make a strong commitment to protect and respect the privacy principles regarding the information that you provide. All the data given by a member to Zenith Edge Investment will be only privately used and not disclosed to any third parties. We will not sell, share, or rent your personal information to any third party or use your e-mail address for unsolicited mail. Any emails sent by this Company will only be in connection with the provision of agreed services.</p>

        <h4 class="text-center">Guidance & Professional advice</h4>
        <p>Trading carry a high degree of risk, and may not be suitable for all investors. Before deciding to invest in Zenith Edge Investment you should carefully consider your financial condition and your level of experience. You should be aware of all the risks associated with trading and seek advice from an independent financial adviser if you have any doubts. The possibility exists that you could sustain a loss of some or all of your initial investment and therefore you should not invest money that you cannot afford to lose. You are investing at your own risk and you agree that a past performance is not a guarantee for the same future performance.</p>

        <h4 class="text-center">Use of site</h4>
        <p>SPAM violators will be permanently removed from the site with immediate effect. Zenith Edge Investment reserves the right to accept or decline any member for membership without explanation.</p>

        <h4 class="text-center">Responsibilities & General Terms</h4>
        <p>Zenith Edge Investment is available only to the members of the site. You agree to be of legal age in your country to join this site and in all the cases your minimum age must be 18 years. Every deposit is considered to be a private transaction between Zenith Edge Investment and its member.</p>

        <h4 class="text-center">Disclaimer & Limitation of liability</h4>
        <p>We reserve the right to change the rules, commissions and rates of the program at any time and at our sole discretion without notice, especially in order to respect the integrity of the members' interests as a whole. You agree that it is your sole responsibility to review the current terms.</p>
    </div>
</div>
@endsection
