@extends('layouts.app')

@section('title', 'Contact Us | Zenith Edge Investment')

@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i>
            <div class="caption1 text-white">Contact Us</div>
        </div>
        <div class="text-nav">
            <div class="heading3 text-white">Contact Us</div>
            <div class="sub-heading mt-8 text-white fw-400">Explore our Contact Us page for prompt assistance from our dedicated team.</div>
        </div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        <div class="row flex-center row-gap-32">
            <div class="col-12 col-xl-4">
                <div class="infor bg-blue bora-12 p-40">
                    <div class="heading5 text-white">Get it touch</div>
                    <div class="body3 text-white mt-8">We will get back to you within 24 hours, or call us everyday</div>
                    <div class="mt-40"></div>
                    <div class="list-social flex-item-center gap-10">
                        <a class="item bora-50 w-48 h-48 flex-center bg-surface" href="https://www.facebook.com/" target="_blank"><i class="icon-facebook icon-on-surface"></i></a>
                        <a class="item bora-50 w-48 h-48 flex-center bg-surface" href="https://www.linkedin.com/" target="_blank"><i class="icon-in icon-on-surface"></i></a>
                        <a class="item bora-50 w-48 h-48 flex-center bg-surface" href="https://www.twitter.com/" target="_blank"><i class="icon-twitter fs-14 icon-on-surface ml-1"></i></a>
                        <a class="item bora-50 w-48 h-48 flex-center bg-surface" href="https://www.instagram.com/" target="_blank"><i class="icon-insta fs-14 icon-on-surface"></i></a>
                        <a class="item bora-50 w-48 h-48 flex-center bg-surface" href="https://www.youtube.com/" target="_blank"><i class="icon-youtube fs-12 icon-on-surface"></i></a>
                    </div>
                    <div class="list-more-infor mt-40">
                        <div class="item flex-item-center gap-12"><i class="ph-bold ph-clock text-blue bg-white p-8 bora-50"></i>
                            <div class="line-y"></div>
                            <div class="text-button text-white">24/7</div>
                        </div>
                        <div class="item flex-item-center gap-12 mt-20"><i class="ph-fill ph-phone text-blue bg-white p-8 bora-50"></i>
                            <div class="line-y"></div>
                            <div class="text-button text-white"><a href="https://api.whatsapp.com/send?phone=+13104618235" style="color: white;">+(310) 461 8235</a></div>
                        </div>
                        <div class="item flex-item-center gap-12 mt-20"><i class="ph-bold ph-envelope-simple text-blue bg-white p-8 bora-50"></i>
                            <div class="line-y"></div>
                            <div class="text-button text-white">support@zenithedgeinvestment.com</div>
                        </div>
                        <div class="item flex-item-center gap-12 mt-20"><i class="ph-bold ph-map-pin text-blue bg-white p-8 bora-50"></i>
                            <div class="line-y"></div>
                            <div class="text-button text-white">California, USA.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 pl-55">
                <div class="form-block flex-columns-between gap-20">
                    <div class="heading">
                        <div class="heading5">Request a quote</div>
                        <div class="body3 text-secondary mt-8">We will get back to you within 24 hours, or call us everyday</div>
                    </div>
                    <form action="{{ route('contact.send') }}" method="post">
                        @csrf
                        <div class="row row-gap-20">
                            <div class="col-12 col-sm-6">
                                <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" type="text" name="phone" placeholder="Phone number" value="{{ old('phone') }}">
                            </div>
                            <div class="col-12">
                                <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                            </div>
                            <div class="col-12">
                                <textarea class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" name="message" cols="10" rows="4" placeholder="Your Message" required>{{ old('message') }}</textarea>
                            </div>
                        </div>
                        <div class="button-block mt-20">
                            <button type="submit" class="button-share hover-border-blue bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48">Submit request</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
