@extends('layouts.app')
@section('title', 'Zenith Edge Investment — Secure & Professional Trading')
@section('content')

{{-- HERO SLIDER --}}
<div class="zei-hero">
    <div class="zei-hero-slides">
        <div class="zei-hero-slide active">
            <img src="{{ asset('img/people.jpg') }}" alt="Zenith Edge Investment">
            <div class="zei-hero-overlay"></div>
        </div>
        <div class="zei-hero-slide">
            <img src="{{ asset('img/sky.jpg') }}" alt="Digital Assets">
            <div class="zei-hero-overlay"></div>
        </div>
        <div class="zei-hero-slide">
            <img src="{{ asset('img/tree1.jpg') }}" alt="Forex Trading">
            <div class="zei-hero-overlay"></div>
        </div>
    </div>
    <div class="zei-hero-body">
        <div class="container">
            <div class="zei-hero-text">
                <span class="zei-hero-tag">Licensed &amp; Regulated — FINRA CRD# 7482994</span>
                <h1>Your Gateway to<br>Financial Freedom</h1>
                <p class="zei-hero-desc">We drive the bear and bull market with expert strategies across crypto, forex, gold, stocks, and real estate.</p>
                <div class="zei-hero-actions">
                    <a href="{{ route('register') }}" class="zei-btn zei-btn-green zei-btn-lg">Start Investing</a>
                    <a href="{{ route('about') }}" class="zei-btn zei-btn-outline-white zei-btn-lg">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <button class="zei-hero-prev" id="hero-prev">&#8249;</button>
    <button class="zei-hero-next" id="hero-next">&#8250;</button>
    <div class="zei-hero-dots" id="hero-dots">
        <button class="zei-hero-dot active"></button>
        <button class="zei-hero-dot"></button>
        <button class="zei-hero-dot"></button>
    </div>
</div>

{{-- COIN TICKER --}}
<div class="zei-ticker-wrap">
    <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script>
    <div id="coinmarketcap-widget-marquee" coins="1,1027,825,1839,2010,52,74" currency="USD" theme="light" transparent="false" show-symbol-logo="true"></div>
</div>

{{-- STATS --}}
<div class="zei-section-sm zei-bg-light">
    <div class="container">
        <div class="zei-stats-wrap">
            <div class="zei-stat-item">
                <span class="zei-stat-num">23+</span>
                <span class="zei-stat-label">Countries Served</span>
            </div>
            <div class="zei-stat-item">
                <span class="zei-stat-num">1,770+</span>
                <span class="zei-stat-label">Active Traders</span>
            </div>
            <div class="zei-stat-item">
                <span class="zei-stat-num">298K+</span>
                <span class="zei-stat-label">Registered Users</span>
            </div>
            <div class="zei-stat-item">
                <span class="zei-stat-num">$10.8M+</span>
                <span class="zei-stat-label">Income Generated</span>
            </div>
        </div>
    </div>
</div>

{{-- SERVICES --}}
<div class="zei-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="zei-label">What We Do</span>
            <h2 class="zei-title">Services That Empower<br>Your Financial Journey</h2>
            <p class="zei-sub mx-auto">Comprehensive investment solutions designed to grow your wealth securely and consistently.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="zei-service-card">
                    <span class="zei-service-num">01</span>
                    <div class="zei-service-icon"><i class="icon-coin-chair"></i></div>
                    <div class="zei-service-title">Cryptocurrency Trading</div>
                    <p class="zei-service-desc">Expert crypto trading services leveraging advanced market analysis to maximize your digital asset returns.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="zei-service-card">
                    <span class="zei-service-num">02</span>
                    <div class="zei-service-icon"><i class="icon-hand-tick"></i></div>
                    <div class="zei-service-title">Portfolio Management</div>
                    <p class="zei-service-desc">We analyze market trends, manage risks, and optimize your portfolio to maximize returns and achieve your goals.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="zei-service-card">
                    <span class="zei-service-num">03</span>
                    <div class="zei-service-icon"><i class="icon-hand-house"></i></div>
                    <div class="zei-service-title">Investment Advisory</div>
                    <p class="zei-service-desc">Our experienced advisors guide you in making informed investment decisions, whether you're a beginner or expert.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="zei-service-card">
                    <span class="zei-service-num">04</span>
                    <div class="zei-service-icon"><i class="icon-gear-warning"></i></div>
                    <div class="zei-service-title">Risk Management</div>
                    <p class="zei-service-desc">Industry-leading tools and techniques to protect your investments and minimize potential losses in volatile markets.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="zei-service-card">
                    <span class="zei-service-num">05</span>
                    <div class="zei-service-icon"><i class="icon-text-search"></i></div>
                    <div class="zei-service-title">Research & Analysis</div>
                    <p class="zei-service-desc">Timely market reports, updates, and data-driven insights to help you make confident trading decisions every day.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="zei-service-card">
                    <span class="zei-service-num">06</span>
                    <div class="zei-service-icon"><i class="icon-education"></i></div>
                    <div class="zei-service-title">Education & Resources</div>
                    <p class="zei-service-desc">Expand your knowledge in trading through our comprehensive educational resources and expert-led materials.</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ABOUT / WHAT WE OFFER --}}
<div class="zei-section zei-bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2">
                <div style="border-radius:16px;overflow:hidden;position:relative">
                    <img src="{{ asset('img/people.jpg') }}" alt="About Zenith Edge Investment" style="width:100%;height:400px;object-fit:cover;border-radius:16px;display:block">
                    <div style="position:absolute;bottom:24px;left:24px;background:#fff;border-radius:12px;padding:18px 24px;box-shadow:0 8px 30px rgba(0,0,0,.14)">
                        <div style="font-size:2rem;font-weight:900;color:var(--navy);line-height:1">10+</div>
                        <div style="font-size:13px;color:var(--muted);margin-top:2px">Years of Excellence</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <span class="zei-label">What We Offer</span>
                <h2 class="zei-title">Diverse Markets,<br>One Trusted Platform</h2>
                <p class="zei-sub" style="margin-bottom:28px">We provide reliable and innovative investment solutions backed by expert insights and cutting-edge technology across multiple asset classes.</p>
                <div class="row g-2">
                    @php $offerings = ['Real Estate','Forex','Crypto Trading','Oil & Gas','CFDs','Stocks & Bonds']; @endphp
                    @foreach($offerings as $item)
                    <div class="col-6">
                        <div style="display:flex;align-items:center;gap:10px;padding:10px 0">
                            <div style="width:8px;height:8px;border-radius:50%;background:var(--green);flex-shrink:0"></div>
                            <span style="font-size:14px;font-weight:600;color:var(--text)">{{ $item }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div style="margin-top:28px">
                    <a href="{{ route('contact') }}" class="zei-btn zei-btn-navy zei-btn-lg" style="margin-right:12px">Contact Us</a>
                    <a href="{{ route('about') }}" style="font-size:14px;font-weight:600;color:var(--navy);text-decoration:none">Learn More &#8594;</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- PARTNER LOGOS --}}
<div class="zei-partners">
    <div class="container">
        <div class="row justify-content-center align-items-center g-0">
            <div class="col zei-partner-item"><img src="{{ asset('img/master.png') }}" alt="Mastercard"></div>
            <div class="col zei-partner-item"><img src="{{ asset('img/paypal.png') }}" alt="PayPal"></div>
            <div class="col zei-partner-item"><img src="{{ asset('img/coinbase.png') }}" alt="Coinbase"></div>
            <div class="col zei-partner-item"><img src="{{ asset('img/blockchain.png') }}" alt="Blockchain"></div>
            <div class="col zei-partner-item"><img src="{{ asset('img/coingeko.png') }}" alt="CoinGecko"></div>
        </div>
    </div>
</div>

{{-- HOW IT WORKS --}}
<div class="zei-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <img src="{{ asset('lassets/images/banner/project-above-home5.png') }}" alt="How it works" style="width:100%;border-radius:16px">
            </div>
            <div class="col-lg-7">
                <span class="zei-label">How It Works</span>
                <h2 class="zei-title" style="margin-bottom:36px">Start Earning in<br>4 Simple Steps</h2>
                <div class="d-flex flex-column gap-4">
                    <div class="zei-step">
                        <div class="zei-step-num">1</div>
                        <div>
                            <div class="zei-step-title">Create an Account</div>
                            <p class="zei-step-desc">Sign up in minutes with your email and basic information. No complex verification required to get started.</p>
                        </div>
                    </div>
                    <div class="zei-step">
                        <div class="zei-step-num">2</div>
                        <div>
                            <div class="zei-step-title">Select a Plan</div>
                            <p class="zei-step-desc">Browse our investment plans and choose one that matches your financial goals and risk tolerance.</p>
                        </div>
                    </div>
                    <div class="zei-step">
                        <div class="zei-step-num">3</div>
                        <div>
                            <div class="zei-step-title">Make a Deposit</div>
                            <p class="zei-step-desc">Fund your account via Bitcoin, Ethereum, USDT, or bank transfer. Deposits are processed instantly.</p>
                        </div>
                    </div>
                    <div class="zei-step">
                        <div class="zei-step-num" style="background:var(--green)">4</div>
                        <div>
                            <div class="zei-step-title">Receive Your ROI</div>
                            <p class="zei-step-desc">Watch your profits grow daily. Withdraw anytime with no hidden fees or waiting periods.</p>
                        </div>
                    </div>
                </div>
                <div style="margin-top:32px">
                    <a href="{{ route('register') }}" class="zei-btn zei-btn-green zei-btn-lg">Get Started Today</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- REFERRAL --}}
<div class="zei-section zei-bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="zei-label">Referral Program</span>
                <h2 class="zei-title">Earn More by<br>Referring Friends</h2>
                <p class="zei-sub" style="margin-bottom:24px">Getting a bonus from the company is always nice. Share your unique referral link — once your referral makes a deposit, you earn <strong>10% of the amount</strong>. Sub-referrals earn you an additional <strong>10% of their profit</strong>.</p>
                <div style="background:#fff;border-radius:12px;border:1px solid var(--border);padding:20px;margin-bottom:24px">
                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px">
                        <span style="font-size:14px;font-weight:600;color:var(--navy)">Level 1 Commission</span>
                        <span style="font-size:1.4rem;font-weight:900;color:var(--green)">10%</span>
                    </div>
                    <div style="display:flex;justify-content:space-between;align-items:center">
                        <span style="font-size:14px;font-weight:600;color:var(--navy)">Level 2 Commission</span>
                        <span style="font-size:1.4rem;font-weight:900;color:var(--blue)">10%</span>
                    </div>
                </div>
                <a href="{{ route('register') }}" class="zei-btn zei-btn-navy zei-btn-lg">Join & Earn</a>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('lassets/images/banner/project-below-home5.png') }}" alt="Referral Program" style="width:100%;border-radius:16px">
            </div>
        </div>
    </div>
</div>

{{-- TRADINGVIEW CHART --}}
<div class="zei-section-sm" style="background:#fff;border-top:1px solid var(--border)">
    <div class="container">
        <div class="text-center mb-4">
            <span class="zei-label">Live Markets</span>
            <h2 class="zei-title">Real-Time Market Data</h2>
        </div>
        <div class="tradingview-widget-container">
            <div id="tradingview_chart"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
            new TradingView.MediumWidget({
                "symbols":[["BINANCE:BTCUSDT|ALL"],["BINANCE:ETHUSD|ALL"]],
                "chartOnly":false,"width":"100%","height":380,"locale":"en",
                "colorTheme":"light","gridLineColor":"rgba(240,243,250,0)",
                "fontColor":"#787B86","isTransparent":false,"autosize":false,
                "showFloatingTooltip":true,"showVolume":false,"scalePosition":"no",
                "scaleMode":"Normal","fontFamily":"Inter,sans-serif","noTimeScale":false,
                "chartType":"area","lineColor":"#1a56db",
                "bottomColor":"rgba(26,86,219,0)","topColor":"rgba(26,86,219,0.2)",
                "container_id":"tradingview_chart"
            });
            </script>
        </div>
    </div>
</div>

{{-- TESTIMONIALS --}}
<div class="zei-section zei-bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <span class="zei-label">Client Stories</span>
            <h2 class="zei-title">What Our Investors Say</h2>
            <p class="zei-sub mx-auto">Real results from real people. Our investors trust us to grow their wealth.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="zei-testi">
                    <div class="zei-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <div class="zei-testi-quote">"</div>
                    <p class="zei-testi-text">Your personalized approach and attention to detail have completely transformed my financial planning. I highly value the care and expertise that goes into every recommendation.</p>
                    <div class="zei-testi-name">Emily S.</div>
                    <div class="zei-testi-role">Software Developer, USA</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="zei-testi" style="border-color:var(--green);box-shadow:0 8px 30px rgba(5,150,105,.1)">
                    <div class="zei-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <div class="zei-testi-quote" style="color:var(--navy)">"</div>
                    <p class="zei-testi-text">I started skeptical due to bad past experiences, but now I can confidently say Zenith Edge Investment can be trusted 100%. I have made more than 150% on my investment.</p>
                    <div class="zei-testi-name">Austin Cesar</div>
                    <div class="zei-testi-role">Entrepreneur, Canada</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="zei-testi">
                    <div class="zei-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <div class="zei-testi-quote">"</div>
                    <p class="zei-testi-text">Zenith Edge Investment delivers as promised. I was able to offset all my debts and with a consistent approach, I am now comfortably stable financially. Highly recommended!</p>
                    <div class="zei-testi-name">Julian Carol</div>
                    <div class="zei-testi-role">Business Owner, Italy</div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- FOREX RATES WIDGET --}}
<div style="border-top:1px solid var(--border)">
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
        {"width":"100%","height":"600","currencies":["EUR","USD","JPY","GBP","CHF","AUD","CAD","NZD"],"isTransparent":false,"colorTheme":"light","locale":"en"}
        </script>
    </div>
</div>

{{-- CTA BANNER --}}
<div class="zei-cta">
    <div class="container">
        <h2>Ready to Grow Your Wealth?</h2>
        <p>Join thousands of investors worldwide who trust Zenith Edge Investment to deliver consistent, secure returns.</p>
        <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap">
            <a href="{{ route('register') }}" class="zei-btn zei-btn-green zei-btn-lg">Create Free Account</a>
            <a href="https://api.whatsapp.com/send?phone=+15413211863" class="zei-btn zei-btn-outline-white zei-btn-lg">
                <i class="ph-light ph-phone"></i> +1 (541) 321-1863
            </a>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
// Hero slider
var slides=document.querySelectorAll('.zei-hero-slide');
var dots=document.querySelectorAll('.zei-hero-dot');
var cur=0,total=slides.length,timer;
function goTo(n){
    slides[cur].classList.remove('active');
    dots[cur].classList.remove('active');
    cur=(n+total)%total;
    slides[cur].classList.add('active');
    dots[cur].classList.add('active');
}
function startTimer(){timer=setInterval(function(){goTo(cur+1);},5000);}
function resetTimer(){clearInterval(timer);startTimer();}
document.getElementById('hero-prev').addEventListener('click',function(){goTo(cur-1);resetTimer();});
document.getElementById('hero-next').addEventListener('click',function(){goTo(cur+1);resetTimer();});
dots.forEach(function(d,i){d.addEventListener('click',function(){goTo(i);resetTimer();});});
startTimer();
</script>
@endsection
