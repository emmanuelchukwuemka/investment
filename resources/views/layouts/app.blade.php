<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('lassets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('lassets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lassets/css/bootstrap-drawer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lassets/icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('lassets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('lassets/css/animate-4.1.1.min.css') }}">
    <title>@yield('title', 'Zenith Edge Investment')</title>
    @yield('head')
</head>
<body>

    {{-- FLASH MESSAGES --}}
    @if(session('success'))
    <div style="background:#d4edda;color:#155724;padding:12px 20px;text-align:center;font-weight:600;position:relative;z-index:9999;">
        ✓ {{ session('success') }}
    </div>
    @endif
    @if(session('error'))
    <div style="background:#f8d7da;color:#721c24;padding:12px 20px;text-align:center;font-weight:600;position:relative;z-index:9999;">
        ✗ {{ session('error') }}
    </div>
    @endif
    @if($errors->any())
    <div style="background:#f8d7da;color:#721c24;padding:12px 20px;text-align:center;font-weight:600;position:relative;z-index:9999;">
        @foreach($errors->all() as $error)
            <div>✗ {{ $error }}</div>
        @endforeach
    </div>
    @endif

    <div id="header">
        <div class="style-home-five">
            <div class="top-nav style-one bg-dark">
                <div class="container flex-between h-44">
                    <div class="left-block flex-item-center">
                        <div class="location flex-item-center">
                            <i class="ph-light ph-map-pin text-white fs-20"></i>
                            <span class="ml-8 caption1 text-white">California, USA.</span>
                        </div>
                        <div class="mail ml-28 flex-item-center">
                            <i class="ph-light ph-envelope text-white fs-20"></i>
                            <span class="ml-8 caption1 text-white">support@zenithedgeinvestment.com</span>
                        </div>
                    </div>
                    <div class="right-block flex-item-center gap-20">
                        <div class="line h-24 w-1 bg-grey"></div>
                        <div class="list-social flex-item-center gap-10 style-one">
                            <a class="item bora-50 w-28 h-28 border-grey-2px flex-center" href="https://www.facebook.com/" target="_blank"><i class="icon-facebook fs-12"></i></a>
                            <a class="item bora-50 w-28 h-28 border-grey-2px flex-center" href="https://www.linkedin.com/" target="_blank"><i class="icon-in fs-12"></i></a>
                            <a class="item bora-50 w-28 h-28 border-grey-2px flex-center" href="https://www.twitter.com/" target="_blank"><i class="icon-twitter fs-10"></i></a>
                            <a class="item bora-50 w-28 h-28 border-grey-2px flex-center" href="https://www.instagram.com/" target="_blank"><i class="icon-insta fs-10"></i></a>
                            <a class="item bora-50 w-28 h-28 border-grey-2px flex-center" href="https://www.youtube.com/" target="_blank"><i class="icon-youtube fs-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="style-subpage style-home-five">
            <div class="header-menu style-one bg-white">
                <div class="container flex-between h-80">
                    <a class="menu-left-block" href="{{ route('home') }}" style="text-decoration:none;">
                        <span style="font-size:1.3rem;font-weight:700;color:#1a3c6b;letter-spacing:-0.5px;white-space:nowrap;">Zenith Edge<span style="color:#c9a227;"> Investment</span></span>
                    </a>
                    <div class="menu-center-block h-100">
                        <ul class="menu-nav flex-item-center h-100">
                            <li class="nav-item h-100 flex-center home">
                                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item h-100 flex-center about">
                                <a class="nav-link" href="#!">Who we are <i class="ph ph-caret-down fs-14"></i></a>
                                <ul class="sub-nav hidden">
                                    <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('about') }}">About us</a></li>
                                    <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('mission') }}">Our Mission</a></li>
                                    <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('values') }}">Our Values</a></li>
                                    <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('investors') }}">Our Investment</a></li>
                                </ul>
                            </li>
                            <li class="nav-item h-100 flex-center services">
                                <a class="nav-link" href="#!">What We Offer <i class="ph ph-caret-down fs-14"></i></a>
                                <ul class="sub-nav hidden">
                                    <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('gold') }}">Gold</a></li>
                                    <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('cryptocurrency') }}">Cryptocurrency</a></li>
                                    <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('stocks') }}">Stocks and Bonds</a></li>
                                    <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('cfds') }}">CFDs</a></li>
                                    <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('oil-gas') }}">Oil & Gas</a></li>
                                    <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('forex') }}">Forex</a></li>
                                </ul>
                            </li>
                            @auth
                                <li class="nav-item h-100 flex-center about"><a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a></li>
                            @else
                                <li class="nav-item h-100 flex-center about"><a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a></li>
                                <li class="nav-item h-100 flex-center about"><a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a></li>
                            @endauth
                            <li class="nav-item h-100 flex-center about"><a class="nav-link" href="{{ route('login') }}">Insurance</a></li>
                            <li class="nav-item h-100 flex-center about"><a class="nav-link" href="{{ route('loan') }}">Loan</a></li>
                            <li class="nav-item h-100 flex-center about"><a class="nav-link" href="{{ route('real-estate') }}">Real Estate</a></li>
                            <li class="nav-item h-100 flex-center about"><a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                            @auth
                                <li class="nav-item h-100 flex-center about">
                                    <form action="{{ route('logout') }}" method="POST" style="display:inline">
                                        @csrf
                                        <button type="submit" class="nav-link" style="background:none;border:none;cursor:pointer;color:inherit;font:inherit;padding:20px 14px;">Logout</button>
                                    </form>
                                </li>
                            @endauth
                        </ul>
                    </div>
                    <div class="menu-right-block flex-item-center">
                        <div class="icon-call"><i class="icon-phone-call fs-36"></i></div>
                        <div class="text ml-12">
                            <div class="text caption1">Call Us</div>
                            <div class="number text-button">
                                <a href="https://api.whatsapp.com/send?phone=+13104618235" style="color: white;">+(310) 461 8235</a>
                            </div>
                        </div>
                        <div class="menu-humburger display-none pointer"><i class="ph-bold ph-list display-block"></i></div>
                    </div>
                </div>
                <div id="menu-mobile-block">
                    <div class="menu-mobile-main">
                        <div class="container">
                            <ul class="menu-nav-mobile h-100 pt-4 pb-4">
                                <li class="nav-item-mobile h-100 flex-column gap-8 pt-8 pb-8 pl-12 pr-12 pointer home">
                                    <a class="fs-14 nav-link-mobile" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item-mobile h-100 flex-column gap-8 pt-4 pb-8 pl-12 pr-12 pointer about">
                                    <a class="fs-14 nav-link-mobile" href="#!">Who we are <i class="ph-fill ph-caret-down fs-12"></i></a>
                                    <ul class="sub-nav-mobile">
                                        <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8"><a class="sub-nav-link fs-14" href="{{ route('about') }}">About us</a></li>
                                        <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8"><a class="sub-nav-link fs-14" href="{{ route('mission') }}">Our Mission</a></li>
                                        <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8"><a class="sub-nav-link fs-14" href="{{ route('values') }}">Our Values</a></li>
                                        <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8"><a class="sub-nav-link fs-14" href="{{ route('investors') }}">Our Investment plan</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item-mobile h-100 flex-column gap-8 pt-4 pb-8 pl-12 pr-12 pointer services">
                                    <a class="fs-14 nav-link-mobile" href="#!">What We Offer <i class="ph-fill ph-caret-down fs-12"></i></a>
                                    <ul class="sub-nav-mobile">
                                        <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8"><a class="sub-nav-link fs-14" href="{{ route('gold') }}">Gold</a></li>
                                        <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8"><a class="sub-nav-link fs-14" href="{{ route('cryptocurrency') }}">Cryptocurrency</a></li>
                                        <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8"><a class="sub-nav-link fs-14" href="{{ route('stocks') }}">Stocks and Bonds</a></li>
                                        <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8"><a class="sub-nav-link fs-14" href="{{ route('cfds') }}">CFDs</a></li>
                                        <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8"><a class="sub-nav-link fs-14" href="{{ route('oil-gas') }}">Oil & Gas</a></li>
                                        <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8"><a class="sub-nav-link fs-14" href="{{ route('forex') }}">Forex</a></li>
                                    </ul>
                                </li>
                                @auth
                                    <li class="nav-item-mobile h-100 flex-column gap-8 pt-8 pb-8 pl-12 pr-12 pointer home">
                                        <a class="fs-14 nav-link-mobile" href="{{ route('dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="nav-item-mobile h-100 flex-column gap-8 pt-8 pb-8 pl-12 pr-12 pointer home">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="fs-14 nav-link-mobile" style="background:none;border:none;cursor:pointer;">Logout</button>
                                        </form>
                                    </li>
                                @else
                                    <li class="nav-item-mobile h-100 flex-column gap-8 pt-8 pb-8 pl-12 pr-12 pointer home">
                                        <a class="fs-14 nav-link-mobile" href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li class="nav-item-mobile h-100 flex-column gap-8 pt-8 pb-8 pl-12 pr-12 pointer home">
                                        <a class="fs-14 nav-link-mobile" href="{{ route('register') }}">Register</a>
                                    </li>
                                @endauth
                                <li class="nav-item-mobile h-100 flex-column gap-8 pt-8 pb-8 pl-12 pr-12 pointer home">
                                    <a class="fs-14 nav-link-mobile" href="{{ route('login') }}">Insurance</a>
                                </li>
                                <li class="nav-item-mobile h-100 flex-column gap-8 pt-8 pb-8 pl-12 pr-12 pointer home">
                                    <a class="fs-14 nav-link-mobile" href="{{ route('loan') }}">Loan</a>
                                </li>
                                <li class="nav-item-mobile h-100 flex-column gap-8 pt-8 pb-8 pl-12 pr-12 pointer home">
                                    <a class="fs-14 nav-link-mobile" href="{{ route('real-estate') }}">Real Estate</a>
                                </li>
                                <li class="nav-item-mobile h-100 flex-column gap-8 pt-8 pb-8 pl-12 pr-12 pointer home">
                                    <a class="fs-14 nav-link-mobile" href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content">
        @yield('content')
        <a class="scroll-to-top-btn" href="#header"><i class="ph-bold ph-caret-up"></i></a>
        <div class="pb-100"></div>
    </div>

    <div id="footer">
        <div class="style-five">
            <div class="footer-block bg-dark pt-60">
                <div class="container">
                    <div class="row flex-between pb-40">
                        <div class="col-3">
                            <div class="footer-company-infor flex-columns-between gap-20">
                                <span style="font-size:1.2rem;font-weight:700;color:#fff;letter-spacing:-0.5px;">Zenith Edge<span style="color:#c9a227;"> Investment</span></span>
                                <div class="text caption1 text-white">Zenith Edge Investment is based in California, USA. We provide long term and short-term Investments.</div>
                                <div class="list-social flex-item-center gap-10 style-one">
                                    <a class="item bora-50 w-28 h-28 border-grey-2px flex-center" href="https://www.facebook.com/" target="_blank"><i class="icon-facebook fs-12"></i></a>
                                    <a class="item bora-50 w-28 h-28 border-grey-2px flex-center" href="https://www.linkedin.com/" target="_blank"><i class="icon-in fs-12"></i></a>
                                    <a class="item bora-50 w-28 h-28 border-grey-2px flex-center" href="https://www.twitter.com/" target="_blank"><i class="icon-twitter fs-10"></i></a>
                                    <a class="item bora-50 w-28 h-28 border-grey-2px flex-center" href="https://www.instagram.com/" target="_blank"><i class="icon-insta fs-10"></i></a>
                                    <a class="item bora-50 w-28 h-28 border-grey-2px flex-center" href="https://www.youtube.com/" target="_blank"><i class="icon-youtube fs-10"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="footer-navigate flex-center gap-80">
                                <div class="footer-nav-item">
                                    <div class="item-heading text-button-small text-white">Quick Links</div>
                                    <ul class="list-nav mt-4">
                                        <li class="mt-12"><a class="caption1 text-line hover-underline" href="{{ route('about') }}">About Us</a></li>
                                        <li class="mt-12"><a class="caption1 text-line hover-underline" href="{{ route('investors') }}">Investments/contract plan</a></li>
                                        <li class="mt-12"><a class="caption1 text-line hover-underline" href="{{ route('login') }}">Login</a></li>
                                        <li class="mt-12"><a class="caption1 text-line hover-underline" href="{{ route('register') }}">Register</a></li>
                                        <li class="mt-12"><a class="caption1 text-line hover-underline" href="{{ route('imprint') }}">Imprint</a></li>
                                    </ul>
                                </div>
                                <div class="footer-nav-item">
                                    <div class="item-heading text-button-small text-white">Support</div>
                                    <ul class="list-nav mt-4">
                                        <li class="mt-12"><a class="caption1 text-line hover-underline" href="{{ route('contact') }}">Contact Us</a></li>
                                        <li class="mt-12"><a class="caption1 text-line hover-underline" href="{{ route('contact') }}">System status</a></li>
                                        <li class="mt-12"><a class="caption1 text-line hover-underline" href="{{ route('faq') }}">Faq</a></li>
                                        <li class="mt-12"><a class="caption1 text-line hover-underline" href="{{ route('rules') }}">Rules</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="company-contact">
                                <div class="heading text-button-small text-white">Newsletter</div>
                                <div class="mt-12 flex-item-center">
                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M26.43 16.1254C25.785 16.1254 25.275 15.6004 25.275 14.9704C25.275 14.4154 24.72 13.2604 23.79 12.2554C22.875 11.2804 21.87 10.7104 21.03 10.7104C20.385 10.7104 19.875 10.1854 19.875 9.55539C19.875 8.92539 20.4 8.40039 21.03 8.40039C22.53 8.40039 24.105 9.21039 25.485 10.6654C26.775 12.0304 27.6 13.7254 27.6 14.9554C27.6 15.6004 27.075 16.1254 26.43 16.1254Z" fill="#C1D8FF"></path>
                                        <path d="M31.8446 16.125C31.1996 16.125 30.6896 15.6 30.6896 14.97C30.6896 9.645 26.3546 5.325 21.0446 5.325C20.3996 5.325 19.8896 4.8 19.8896 4.17C19.8896 3.54 20.3996 3 21.0296 3C27.6296 3 32.9996 8.37 32.9996 14.97C32.9996 15.6 32.4746 16.125 31.8446 16.125Z" fill="#C1D8FF"></path>
                                        <path d="M17.685 21.315L12.78 26.22C12.24 25.74 11.715 25.245 11.205 24.735C9.66 23.175 8.265 21.54 7.02 19.83C5.79 18.12 4.8 16.41 4.08 14.715C3.36 13.005 3 11.37 3 9.81C3 8.79 3.18 7.815 3.54 6.915C3.9 6 4.47 5.16 5.265 4.41C6.225 3.465 7.275 3 8.385 3C8.805 3 9.225 3.09 9.6 3.27C9.99 3.45 10.335 3.72 10.605 4.11L14.085 9.015C14.355 9.39 14.55 9.735 14.685 10.065C14.82 10.38 14.895 10.695 14.895 10.98C14.895 11.34 14.79 11.7 14.58 12.045C14.385 12.39 14.1 12.75 13.74 13.11L12.6 14.295C12.435 14.46 12.36 14.655 12.36 14.895C12.36 15.015 12.375 15.12 12.405 15.24C12.45 15.36 12.495 15.45 12.525 15.54C12.795 16.035 13.26 16.68 13.92 17.46C14.595 18.24 15.315 19.035 16.095 19.83C16.635 20.355 17.16 20.865 17.685 21.315Z" fill="#C1D8FF"></path>
                                        <path d="M32.9554 27.4955C32.9554 27.9155 32.8804 28.3505 32.7304 28.7705C32.6854 28.8905 32.6404 29.0105 32.5804 29.1305C32.3254 29.6705 31.9954 30.1805 31.5604 30.6605C30.8254 31.4705 30.0154 32.0555 29.1004 32.4305C29.0854 32.4305 29.0704 32.4455 29.0554 32.4455C28.1704 32.8055 27.2104 33.0005 26.1754 33.0005C24.6454 33.0005 23.0104 32.6405 21.2854 31.9055C19.5604 31.1705 17.8354 30.1805 16.1254 28.9355C15.5404 28.5005 14.9554 28.0655 14.4004 27.6005L19.3054 22.6955C19.7254 23.0105 20.1004 23.2505 20.4154 23.4155C20.4904 23.4455 20.5804 23.4905 20.6854 23.5355C20.8054 23.5805 20.9254 23.5955 21.0604 23.5955C21.3154 23.5955 21.5104 23.5055 21.6754 23.3405L22.8154 22.2155C23.1904 21.8405 23.5504 21.5555 23.8954 21.3755C24.2404 21.1655 24.5854 21.0605 24.9604 21.0605C25.2454 21.0605 25.5454 21.1205 25.8754 21.2555C26.2054 21.3905 26.5504 21.5855 26.9254 21.8405L31.8904 25.3655C32.2804 25.6355 32.5504 25.9505 32.7154 26.3255C32.8654 26.7005 32.9554 27.0755 32.9554 27.4955Z" fill="#2868D8"></path>
                                    </svg>
                                    <div class="text ml-16">
                                        <div class="caption2 text-line">Need help? 24/7</div>
                                        <div class="fw-700 text-white mt-4">
                                            <a href="https://api.whatsapp.com/send?phone=+19134088462" style="color: white;">+1 913-408-8462</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="locate mt-12 flex-item-center">
                                    <i class="ph-light ph-map-pin text-line"></i>
                                    <div class="caption1 text-line ml-8">California, USA</div>
                                </div>
                                <div class="send-block mt-20 flex-item-center">
                                    <input class="caption1 text-secondary" type="text" placeholder="Your email address">
                                    <button class="flex-center"><i class="ph ph-paper-plane-tilt text-white"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-line"></div>
                    <div class="footer-bottom flex-between pt-12 pb-12">
                        <div class="left-block flex-item-center">
                            <div class="copy-right text-line caption1">©{{ date('Y') }} Zenith Edge Investment. All Rights Reserved.</div>
                        </div>
                        <div class="nav-link flex-item-center gap-10">
                            <a class="text-line caption1 hover-underline" href="{{ route('terms') }}">Terms Of Services</a>
                            <span class="text-line caption1">|</span>
                            <a class="text-line caption1 hover-underline" href="{{ route('terms') }}">Privacy Policy</a>
                            <span class="text-line caption1">|</span>
                            <a class="text-line caption1 hover-underline" href="{{ route('terms') }}">Cookie Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('lassets/js/jquery-3.7.0.js') }}"></script>
    <script src="{{ asset('lassets/js/jquery-migrate-3.4.1.js') }}"></script>
    <script src="{{ asset('lassets/js/slick.min.js') }}"></script>
    <script src="{{ asset('lassets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('lassets/js/countUp.min.js') }}"></script>
    <script src="{{ asset('lassets/js/phosphor-icon.js') }}"></script>
    <script src="{{ asset('lassets/js/scrollreveal-4.0.0.min.js') }}"></script>
    <script src="{{ asset('lassets/js/bootstrap-drawer.min.js') }}"></script>
    <script src="{{ asset('lassets/js/drawer.min.js') }}"></script>
    <script src="{{ asset('lassets/js/main.min.js') }}"></script>

    <script type="text/javascript">
        (function() {
            var options = { whatsapp: "+19134088462", call_to_action: "Message us", position: "left" };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript'; s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    @yield('scripts')
</body>
</html>
