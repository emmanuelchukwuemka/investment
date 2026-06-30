@extends('layouts.app')

@section('title', 'Webull Robin Empresa')

@section('content')
<div class="slider-block style-one">
    <div class="prev-arrow flex-center"><i class="ph-bold ph-caret-left text-white"></i></div>
    <div class="slider-main">
        <div class="slider-item">
            <div class="bg-img"><img class="w-100 h-100" src="{{ asset('img/people.jpg') }}" alt=""></div>
            <div class="container">
                <div class="text-content flex-columns-between row-gap-40">
                    <div class="heading2 animate__animated animate__fadeInUp animate__delay-0-2s" style="color: white;">Welcome to Webull Robin Empresa</div>
                    <div class="body2 text-secondary animate__animated animate__fadeInUp animate__delay-0-5s" style="color: white;">We drive the bear and bull market</div>
                    <div class="button-block animate__animated animate__fadeInUp animate__delay-0-8s"><a class="button-share display-inline-block hover-button-black bg-blue text-white text-button pl-28 pr-28 pt-12 pb-12 bora-8" href="{{ route('login') }}">Get Started</a></div>
                </div>
            </div>
        </div>
        <div class="slider-item">
            <div class="bg-img"><img class="w-100 h-100" src="{{ asset('img/sky.jpg') }}" alt=""></div>
            <div class="container">
                <div class="text-content flex-columns-between row-gap-40">
                    <div class="heading2" style="color: white;">We trade digital assets</div>
                    <div class="body2 text-secondary" style="color: white;">We have expert gold traders ready to increase your income</div>
                    <div class="button-block"><a class="button-share display-inline-block hover-button-black bg-blue text-white text-button pl-28 pr-28 pt-12 pb-12 bora-8" href="{{ route('login') }}">Get Started</a></div>
                </div>
            </div>
        </div>
        <div class="slider-item">
            <div class="bg-img"><img class="w-100 h-100" src="{{ asset('img/tree1.jpg') }}" alt=""></div>
            <div class="container">
                <div class="text-content flex-columns-between row-gap-40">
                    <div class="heading2" style="color: white;">Forex Trading</div>
                    <div class="body2 text-secondary" style="color: white;">We trade forex like professionals</div>
                    <div class="button-block"><a class="button-share display-inline-block hover-button-black bg-blue text-white text-button pl-28 pr-28 pt-12 pb-12 bora-8" href="{{ route('login') }}">Get Started</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="next-arrow flex-center"><i class="ph-bold ph-caret-right text-white"></i></div>
</div>

<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script>
<div id="coinmarketcap-widget-marquee" coins="1,1027,825,1839,2010,52,74" currency="USD" theme="light" transparent="false" show-symbol-logo="true"></div>

<div class="video-block style-four mt-100">
    <div class="container">
        <div class="list-feature bg-surface p-40 bora-20 overflow-hidden w-100">
            <div class="row row-gap-32">
                <div class="col-12 col-xl-3 col-md-6 col-sm-6 flex-columns-center"><i class="icon-user-happy fs-48"></i>
                    <div class="count-block flex-item-center mt-24">
                        <div class="counter heading3">23</div><span class="heading3"></span>
                    </div>
                    <div class="body1 mt-4 text-center">Countries</div>
                </div>
                <div class="col-12 col-xl-3 col-md-6 col-sm-6 flex-columns-center"><i class="icon-rocket fs-42"></i>
                    <div class="count-block flex-item-center mt-24">
                        <div class="counter heading3">1.77</div><span class="heading3">k</span>
                    </div>
                    <div class="body1 mt-4 text-center">Trader</div>
                </div>
                <div class="col-12 col-xl-3 col-md-6 col-sm-6 flex-columns-center"><i class="icon-target fs-42"></i>
                    <div class="count-block flex-item-center mt-24">
                        <div class="counter heading3">298</div><span class="heading3">k</span>
                    </div>
                    <div class="body1 mt-4 text-center">Users</div>
                </div>
                <div class="col-12 col-xl-3 col-md-6 col-sm-6 flex-columns-center"><i class="icon-wallet fs-36"></i>
                    <div class="count-block flex-item-center mt-24">
                        <div class="counter heading3">10,894,799</div><span class="heading3"></span>
                    </div>
                    <div class="body1 mt-4 text-center">Income generated</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="service-style-five mt-100">
    <div class="container">
        <div class="heading3 text-center">Services that Empower Your <br>Financial Journey</div>
    </div>
    <div class="service-block mt-80">
        <div class="container">
            <div class="list-service row mt-32 row-gap-32">
                <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px"><a class="service-item-main flex-column gap-16">
                        <div class="heading flex-between"><i class="icon-coin-chair text-blue fs-60"></i><div class="number heading3 text-placehover">01</div></div>
                        <div class="desc"><div class="heading7 hover-text-blue">Cryptocurrency Trading</div><div class="body3 text-secondary mt-4">Experience the excitement and potential of the cryptocurrency market with our expert trading services.</div></div>
                        <div class="read-block flex-item-center gap-4 hover-text-blue"><span class="fs-14 fw-700 text-blue">Read More</span><i class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                    </a></div>
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px"><a class="service-item-main flex-column gap-16">
                        <div class="heading flex-between"><i class="icon-hand-tick text-blue fs-60"></i><div class="number heading3 text-placehover">02</div></div>
                        <div class="desc"><div class="heading7 hover-text-blue">Portfolio Management</div><div class="body3 text-secondary mt-4">We analyze market trends, manage risks, and optimize your portfolio to maximize returns and achieve your financial goals.</div></div>
                        <div class="read-block flex-item-center gap-4 hover-text-blue"><span class="fs-14 fw-700 text-blue">Read More</span><i class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                    </a></div>
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px"><a class="service-item-main flex-column gap-16">
                        <div class="heading flex-between"><i class="icon-hand-house text-blue fs-60"></i><div class="number heading3 text-placehover">03</div></div>
                        <div class="desc"><div class="heading7 hover-text-blue">Investment Advice</div><div class="body3 text-secondary mt-4">Our team of experienced advisors will guide you in making informed investment decisions, whether you're a beginner or an experienced trader.</div></div>
                        <div class="read-block flex-item-center gap-4 hover-text-blue"><span class="fs-14 fw-700 text-blue">Read More</span><i class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                    </a></div>
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px"><a class="service-item-main flex-column gap-16">
                        <div class="heading flex-between"><i class="icon-gear-warning text-blue fs-60"></i><div class="number heading3 text-placehover">04</div></div>
                        <div class="desc"><div class="heading7 hover-text-blue">Risk Management</div><div class="body3 text-secondary mt-4">We employ industry-leading tools and techniques to protect your investments and minimize potential losses.</div></div>
                        <div class="read-block flex-item-center gap-4 hover-text-blue"><span class="fs-14 fw-700 text-blue">Read More</span><i class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                    </a></div>
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px"><a class="service-item-main flex-column gap-16">
                        <div class="heading flex-between"><i class="icon-text-search text-blue fs-60"></i><div class="number heading3 text-placehover">05</div></div>
                        <div class="desc"><div class="heading7 hover-text-blue">Research and Analysis</div><div class="body3 text-secondary mt-4">We provide timely reports, market updates, and data-driven insights to help you make informed trading decisions.</div></div>
                        <div class="read-block flex-item-center gap-4 hover-text-blue"><span class="fs-14 fw-700 text-blue">Read More</span><i class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                    </a></div>
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px"><a class="service-item-main flex-column gap-16">
                        <div class="heading flex-between"><i class="icon-education text-blue fs-52"></i><div class="number heading3 text-placehover">06</div></div>
                        <div class="desc"><div class="heading7 hover-text-blue">Education and Resources</div><div class="body3 text-secondary mt-4">Expand your knowledge and skills in cryptocurrency trading through our educational resources.</div></div>
                        <div class="read-block flex-item-center gap-4 hover-text-blue"><span class="fs-14 fw-700 text-blue">Read More</span><i class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                    </a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-home-five mt-100">
    <div class="container">
        <div class="row flex-between row-gap-32">
            <div class="col-12 col-lg-6">
                <div class="text-about">
                    <div class="heading3 mt-24">What We offer</div>
                    <div class="body3 text-secondary mt-20">Explore our mission to provide reliable and innovative cryptocurrency trading solutions, backed by expert insights and cutting-edge technology.</div>
                    <div class="list mt-40">
                        <div class="row row-gap-6">
                            <div class="col-12 col-sm-6 left">
                                <div class="item flex-item-center gap-12"><i class="ph-fill ph-square text-blue"></i><div class="heading7">Real-Estate</div></div>
                                <div class="item flex-item-center gap-12 mt-12"><i class="ph-fill ph-square text-blue"></i><div class="heading7">Forex</div></div>
                                <div class="item flex-item-center gap-12 mt-12"><i class="ph-fill ph-square text-blue"></i><div class="heading7">Crypto Trading</div></div>
                            </div>
                            <div class="col-12 col-sm-6 right">
                                <div class="item flex-item-center gap-12"><i class="ph-fill ph-square text-blue"></i><div class="heading7">Oil & Gas</div></div>
                                <div class="item flex-item-center gap-12 mt-12"><i class="ph-fill ph-square text-blue"></i><div class="heading7">CFDs</div></div>
                                <div class="item flex-item-center gap-12 mt-12"><i class="ph-fill ph-square text-blue"></i><div class="heading7">Stocks & Bonds</div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 col-md-8 col-sm-8">
                <div class="bg-img w-100"><img class="w-100" src="{{ asset('img/people.jpg') }}" alt=""></div>
                <div class="sub-img"><img src="{{ asset('lassets/images/component/sub-about5-left.png') }}" alt=""><img src="{{ asset('lassets/images/component/sub-about5.png') }}" alt=""></div>
            </div>
        </div>
    </div>
</div>

<div class="card-block mt-100">
    <div class="container">
        <div class="bg-img w-100"><img src="{{ asset('lassets/images/component/phone1-home5.png') }}" alt=""><img src="{{ asset('lassets/images/component/phone2-home5.png') }}" alt=""><img src="{{ asset('lassets/images/component/phone3-home5.png') }}" alt=""></div>
        <div class="text mt-40 text-center">
            <div class="heading3 text-center">One of the Most Trusted Wealth Management Companies</div>
            <div class="body3 text-secondary mt-12 text-center">Webull Robin Empresa - Empowering Your Cryptocurrency Trading Journey. Experience secure and transparent trading with our expert team and cutting-edge solutions.</div>
        </div>
    </div>
</div>

<div class="style-five">
    <div class="partner-five-col style-one mt-100 bg-blue">
        <div class="list pt-32 pb-32">
            <div class="bg-img flex-center"><img class="w-100" src="{{ asset('img/master.png') }}" alt=""></div>
            <div class="bg-img flex-center"><img class="w-100" src="{{ asset('img/paypal.png') }}" alt=""></div>
            <div class="bg-img flex-center"><img class="w-100" src="{{ asset('img/coinbase.png') }}" alt=""></div>
            <div class="bg-img flex-center"><img class="w-100" src="{{ asset('img/blockchain.png') }}" alt=""></div>
            <div class="bg-img flex-center"><img class="w-100" src="{{ asset('img/coingeko.png') }}" alt=""></div>
        </div>
    </div>
</div>

<section style="color: black; margin: 0px; padding: 0px; background-color: #072b5b; color: white;">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-0">
                <h2 class="h2 text-center" style="color: white;"><img src="{{ asset('img/favicon.png') }}" style="width: 20px;"> How and Where to buy bitcoin?<br>
                    <h1 class="text-center text-primary mb-5"></h1>
                </h2>
            </div>
            <div class="col-lg-3 col-md-6 col-12 text-center" style="margin-bottom: 10px;">
                <div class="py-5 bg-light">
                    <iframe width="200" height="100" src="https://www.youtube.com/embed/hzHLeeU1tFE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h5><small><a href="https://www.localbitcoins.com/">WWW.LOCALBITCOINS.COM</a></small></h5>
                    <p>You can buy bitcoin with localbitcoins.com by clicking on the link above.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 text-center" style="margin-bottom: 10px;">
                <div class="py-5 bg-light">
                    <iframe width="200" height="100" src="https://www.youtube.com/embed/OtqlUJSLbXo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h5><small><a href="https://www.blockchain.info/">WWW.BLOCKCHAIN.INFO</a></small></h5>
                    <p>You can buy bitcoin with blockchain.info by clicking on the link above.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 text-center" style="margin-bottom: 10px;">
                <div class="py-5 bg-light">
                    <iframe width="200" height="100" src="https://www.youtube.com/embed/EjB5qFW0bJ8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h5><small><a href="https://www.paxful.com/">WWW.PAXFUL.COM</a></small></h5>
                    <p>You can buy bitcoin with paxful.com by clicking on the link above.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 text-center" style="margin-bottom: 10px;">
                <div class="py-5 bg-light">
                    <iframe width="200" height="100" src="https://www.youtube.com/embed/txYefByOD_8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h5><small><a href="https://www.coinbase.com/">WWW.COINBASE.COM</a></small></h5>
                    <p>You can buy bitcoin with coinbase.com by clicking on the link above.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="tradingview-widget-container">
        <div id="tradingview_fe344"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">BTCUSDT Chart</span></a> by TradingView</div>
        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
        <script type="text/javascript">
            new TradingView.MediumWidget({
                "symbols": [["BINANCE:BTCUSDT|ALL"],["BINANCE:ETHUSD|ALL"]],
                "chartOnly": false, "width": "100%", "height": 400, "locale": "en",
                "colorTheme": "light", "gridLineColor": "rgba(240, 243, 250, 0)",
                "fontColor": "#787B86", "isTransparent": false, "autosize": false,
                "showFloatingTooltip": true, "showVolume": false, "scalePosition": "no",
                "scaleMode": "Normal", "fontFamily": "Trebuchet MS, sans-serif",
                "noTimeScale": false, "chartType": "area", "lineColor": "#2962FF",
                "bottomColor": "rgba(41, 98, 255, 0)", "topColor": "rgba(41, 98, 255, 0.3)",
                "container_id": "tradingview_fe344"
            });
        </script>
    </div>
</section>

<div class="project-five mt-100">
    <div class="container">
        <div class="heading text-center">
            <div class="heading3 text-center mt-16">How it Works</div>
        </div>
        <div class="list-project mt-40">
            <div class="project-above">
                <div class="row flex-between gap-24">
                    <div class="col-12 col-lg-6 pr-80">
                        <div class="bg-img w-100"><img class="w-100" src="{{ asset('lassets/images/banner/project-above-home5.png') }}" alt=""></div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="text-infor">
                            <div class="heading4">Personal Financial Assessment</div>
                            <div class="body2 text-secondary mt-16">Learn how to be financial free using the power of cryptocurrency</div>
                            <div class="list-service mt-32">
                                <div class="service-item flex-item-center"><i class="ph-bold ph-check text-blue fs-24"></i><div class="text-button ml-12">Create an account</div></div>
                                <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-blue fs-24"></i><div class="text-button ml-12">Select plan</div></div>
                                <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-blue fs-24"></i><div class="text-button ml-12">Make Payment</div></div>
                                <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-blue fs-24"></i><div class="text-button ml-12">Receive your ROI</div></div>
                            </div>
                            <div class="button-block mt-32"><a class="button-share hover-bg-blue text-white bg-on-surface text-button display-inline-flex pt-12 pb-12 pl-28 pr-28 bora-8 flex-item-center gap-8" href="{{ route('login') }}"><i class="ph ph-arrow-right text-white fs-20"></i><span>Get started</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-below mt-100">
                <div class="row flex-between row-gap-40">
                    <div class="col-12 col-lg-5">
                        <div class="text-infor">
                            <div class="heading4">Referral System</div>
                            <div class="body2 text-secondary mt-16">Getting a bonus from the company is always nice. Especially when it takes a minimum of effort. Just tell everyone about your success in our company and give your individual link to register a new investor. Once your referral makes a deposit, you earn a profit of 10% of the amount. The sub-referral will bring you 10% of the profit.</div>
                            <div class="button-block mt-32"><a class="button-share hover-bg-blue text-white bg-on-surface text-button display-inline-flex pt-12 pb-12 pl-28 pr-28 bora-8 flex-item-center gap-8" href="{{ route('login') }}"><i class="ph ph-arrow-right text-white fs-20"></i><span>Get started</span></a></div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="bg-img w-100"><img class="w-100" src="{{ asset('lassets/images/banner/project-below-home5.png') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="testimonials-three mt-100">
    <div class="container">
        <div class="heading3 text-center">What People Are Saying</div>
        <div class="row list-comment">
            <div class="col-4">
                <div class="comment-item p-32 bg-surface bora-16 hover-box-shadow"><i class="icon-quotes fs-28"></i>
                    <div class="body3 mt-24">"Your personalized approach and care have improved my financial planning. I highly value your services and attention to detail in crafting financial plans."</div>
                    <div class="infor mt-16"><div class="text-button">Emily S.</div><div class="caption2 text-secondary mt-4">Developper Mangala</div></div>
                </div>
            </div>
            <div class="col-4">
                <div class="comment-item p-32 bg-surface bora-16 hover-box-shadow"><i class="icon-quotes fs-28"></i>
                    <div class="body3 mt-24">"I started Webull Robin Empresa been skeptical due to my previous bad experiences, but now I can confidently say that Webull Robin Empresa can be trusted 100%. I have made for than 150% in my investment."</div>
                    <div class="infor mt-16"><div class="text-button">Austin Cesar</div><div class="caption2 text-secondary mt-4">Canada</div></div>
                </div>
            </div>
            <div class="col-4">
                <div class="comment-item p-32 bg-surface bora-16 hover-box-shadow"><i class="icon-quotes fs-28"></i>
                    <div class="body3 mt-24">"It's without doubt that Webull Robin Empresa do deliver as promised. I was able to offset all my debts by using the NPF plan and with consistent approach, I am comfortably stable financially."</div>
                    <div class="infor mt-16"><div class="text-button">Julian Carol</div><div class="caption2 text-secondary mt-4">Italy</div></div>
                </div>
            </div>
            <div class="col-4">
                <div class="comment-item p-32 bg-surface bora-16 hover-box-shadow"><i class="icon-quotes fs-28"></i>
                    <div class="body3 mt-24">"I am incredibly pleased with your services! Your meticulous approach to financial planning has been a crucial factor in effectively managing my assets."</div>
                    <div class="infor mt-16"><div class="text-button">Peter P.</div><div class="caption2 text-secondary mt-4">Australia</div></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"><span class="blue-text">Forex Rates</span></a> by TradingView</div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
    {
        "width": "100%", "height": "700",
        "currencies": ["EUR","USD","JPY","GBP","CHF","AUD","CAD","NZD","CNY"],
        "isTransparent": false, "colorTheme": "light", "locale": "en"
    }
    </script>
</div>

<div class="tradingview-widget-container" style="margin-top: 50px;">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
    {
        "width": "100%", "height": 490, "defaultColumn": "overview",
        "screener_type": "crypto_mkt", "displayCurrency": "BTC",
        "colorTheme": "light", "locale": "en"
    }
    </script>
</div>

<div class="cta-block style-five mt-100">
    <div class="container">
        <div class="content">
            <div class="bg-cta w-100"><img class="w-100 h-100" src="{{ asset('lassets/images/cta/bg-cta5.png') }}" alt=""></div>
            <div class="text pt-70 pb-70 pl-100">
                <div class="row">
                    <div class="col-12 col-xl-8">
                        <div class="heading3 text-white">Empower Your Finances with Cryptocurrency</div>
                        <div class="body3 text-white mt-16">Discover the transformative power of cryptocurrency and revolutionize your financial journey. Join us now and embark on a path to financial empowerment</div>
                        <div class="button-block flex-item-center mt-32 gap-16">
                            <a class="button-share hover-bg-white bg-on-surface text-white text-button pl-55 pr-55 pt-14 pb-14 bora-8" href="{{ route('contact') }}">Discovery now</a>
                            <a class="button-share hover-button-black bg-white text-button pl-28 pr-28 pt-14 pb-14 bora-8 flex-item-center gap-8" href="{{ route('contact') }}"><i class="ph-fill ph-phone"></i><span><a href="https://api.whatsapp.com/send?phone=+19134088462" style="color: white;">+19134088462</a></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
