<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('lassets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('lassets/icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('lassets/css/animate-4.1.1.min.css') }}">
    <title>@yield('title', 'Zenith Edge Investment')</title>
    @yield('head')
<style>
/* ===== ZENITH EDGE INVESTMENT - REDESIGN 2026 ===== */
:root{
  --navy:#0d2b5c;
  --navy-dk:#071a3e;
  --blue:#1a56db;
  --green:#059669;
  --green-hov:#047857;
  --gold:#d97706;
  --bg:#f1f5f9;
  --border:#e2e8f0;
  --text:#1e293b;
  --muted:#64748b;
  --white:#ffffff;
}
*,*::before,*::after{box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;color:var(--text);background:#fff;overflow-x:hidden;margin:0;padding:0}
a{text-decoration:none}
img{max-width:100%}
ul{list-style:none;padding:0;margin:0}

/* ---- FLASH ---- */
.zei-flash{padding:13px 20px;font-size:14px;font-weight:600;text-align:center}
.zei-flash-ok{background:#d1fae5;color:#065f46;border-bottom:1px solid #a7f3d0}
.zei-flash-err{background:#fee2e2;color:#991b1b;border-bottom:1px solid #fca5a5}

/* ---- TOP BAR ---- */
#zei-topbar{background:var(--navy-dk);padding:9px 0;font-size:13px;color:rgba(255,255,255,.75)}
#zei-topbar a{color:rgba(255,255,255,.85);text-decoration:none}
#zei-topbar a:hover{color:#fff}
.zei-topbar-inner{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:8px}
.zei-topbar-left,.zei-topbar-right{display:flex;align-items:center;gap:20px}

/* ---- NAVBAR ---- */
#zei-navbar{background:var(--navy);position:sticky;top:0;z-index:1000;transition:background .4s,box-shadow .4s}
#zei-navbar.scrolled{background:var(--navy-dk);box-shadow:0 4px 24px rgba(0,0,0,.25)}
.zei-nav-inner{display:flex;align-items:center;justify-content:space-between;height:76px;gap:16px}

/* Logo */
.zei-logo{display:flex;align-items:center;gap:0;font-size:1.2rem;font-weight:900;color:#fff;letter-spacing:-0.5px;white-space:nowrap;flex-shrink:0;text-decoration:none}
.zei-logo-icon{width:36px;height:36px;border-radius:8px;background:var(--green);display:flex;align-items:center;justify-content:center;margin-right:10px;font-size:18px;font-weight:900;color:#fff;flex-shrink:0;line-height:1}
.zei-logo-text{display:flex;flex-direction:column;line-height:1.1}
.zei-logo-text strong{font-size:1rem;font-weight:900;color:#fff;letter-spacing:-.3px}
.zei-logo-text span{font-size:10px;font-weight:600;color:var(--green);letter-spacing:2px;text-transform:uppercase}

/* Nav links */
.zei-nav-links{display:flex;align-items:center;gap:0;margin:0;padding:0;height:76px}
.zei-nav-links>li{position:relative;height:100%;display:flex;align-items:center}
.zei-nav-links>li>a,.zei-nav-btn-link{display:flex;align-items:center;gap:5px;padding:0 15px;height:100%;font-size:13.5px;font-weight:500;color:rgba(255,255,255,.82);text-decoration:none;white-space:nowrap;border:none;background:none;cursor:pointer;font-family:inherit;position:relative;letter-spacing:.2px;transition:color .2s}
.zei-nav-links>li>a::after,.zei-nav-btn-link::after{content:'';position:absolute;bottom:0;left:15px;right:15px;height:3px;background:var(--green);border-radius:3px 3px 0 0;transform:scaleX(0);transform-origin:center;transition:transform .22s}
.zei-nav-links>li>a:hover,.zei-nav-btn-link:hover{color:#fff}
.zei-nav-links>li>a:hover::after,.zei-nav-btn-link:hover::after{transform:scaleX(1)}
.zei-nav-links>li>a.active{color:#fff}
.zei-nav-links>li>a.active::after{transform:scaleX(1)}

/* Dropdown */
.zei-dropdown-menu{display:none;position:absolute;top:100%;left:0;background:#fff;border-radius:10px;box-shadow:0 16px 48px rgba(0,0,0,.18);min-width:210px;padding:6px 0;z-index:999;border-top:3px solid var(--green)}
.zei-nav-links>li:hover .zei-dropdown-menu{display:block}
.zei-dropdown-menu a{display:flex;align-items:center;gap:10px;padding:11px 20px;font-size:13.5px;font-weight:500;color:var(--text);text-decoration:none;transition:background .15s,color .15s,padding-left .15s}
.zei-dropdown-menu a:hover{background:var(--bg);color:var(--navy);padding-left:26px}

/* Nav actions */
.zei-nav-actions{display:flex;align-items:center;gap:8px;flex-shrink:0}
.zei-btn{display:inline-flex;align-items:center;gap:6px;padding:9px 22px;border-radius:7px;font-size:13.5px;font-weight:600;text-decoration:none;border:2px solid transparent;cursor:pointer;transition:all .2s;white-space:nowrap;font-family:inherit}
.zei-btn-green{background:var(--green);color:#fff;border-color:var(--green)}
.zei-btn-green:hover{background:var(--green-hov);border-color:var(--green-hov);color:#fff;transform:translateY(-1px)}
.zei-btn-navy{background:var(--navy);color:#fff;border-color:var(--navy)}
.zei-btn-navy:hover{background:var(--navy-dk);color:#fff}
.zei-btn-outline-white{background:transparent;color:#fff;border-color:rgba(255,255,255,.5)}
.zei-btn-outline-white:hover{background:#fff;color:var(--navy)}
.zei-btn-ghost-nav{background:rgba(255,255,255,.1);color:#fff;border-color:rgba(255,255,255,.2);font-size:13px;padding:8px 18px}
.zei-btn-ghost-nav:hover{background:rgba(255,255,255,.2);color:#fff}
.zei-btn-lg{padding:13px 32px;font-size:15px;border-radius:8px}
.zei-btn-sm{padding:7px 18px;font-size:13px}
.zei-hamburger{display:none;background:none;border:none;cursor:pointer;padding:6px;color:#fff;flex-shrink:0}

/* ---- MOBILE MENU ---- */
#zei-mobile-overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:1900}
#zei-mobile-menu{display:none;position:fixed;top:0;right:0;bottom:0;width:300px;background:#fff;z-index:2000;overflow-y:auto;box-shadow:-8px 0 40px rgba(0,0,0,.18)}
#zei-mobile-menu.open{display:block}
#zei-mobile-overlay.open{display:block}
.zei-mobile-header{display:flex;justify-content:space-between;align-items:center;padding:18px 20px;background:var(--navy)}
.zei-mobile-close{background:rgba(255,255,255,.12);border:none;cursor:pointer;font-size:18px;color:#fff;line-height:1;padding:6px 10px;border-radius:6px}
.zei-mobile-nav{padding:8px 0}
.zei-mobile-nav>li>a,.zei-mobile-nav>li>button{display:block;width:100%;padding:14px 24px;font-size:15px;font-weight:500;color:var(--text);text-decoration:none;background:none;border:none;text-align:left;cursor:pointer;font-family:inherit;border-bottom:1px solid var(--border);transition:color .15s}
.zei-mobile-nav>li>a:hover,.zei-mobile-nav>li>button:hover{color:var(--navy);background:var(--bg)}
.zei-mobile-sub{padding:4px 0 4px 16px;background:var(--bg)}
.zei-mobile-sub a{display:block;padding:10px 24px;font-size:14px;color:var(--muted);text-decoration:none}
.zei-mobile-sub a:hover{color:var(--navy)}
.zei-mobile-cta{padding:20px 24px;display:flex;flex-direction:column;gap:10px}
.zei-mobile-nav .logout-btn{color:var(--text);background:none;border:none;border-bottom:1px solid var(--border)}

/* ---- PAGE HERO ---- */
.zei-page-hero{position:relative;min-height:260px;display:flex;align-items:center;overflow:hidden}
.zei-page-hero-bg{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}
.zei-page-hero-overlay{position:absolute;inset:0;background:linear-gradient(135deg,rgba(7,26,62,.93) 0%,rgba(13,43,92,.8) 100%)}
.zei-page-hero-content{position:relative;z-index:2;padding:60px 0}
.zei-breadcrumb{display:flex;align-items:center;gap:8px;margin-bottom:14px;font-size:13px}
.zei-breadcrumb a{color:rgba(255,255,255,.75);text-decoration:none}
.zei-breadcrumb a:hover{color:#fff}
.zei-breadcrumb .sep{color:rgba(255,255,255,.4)}
.zei-breadcrumb .cur{color:rgba(255,255,255,.6)}
.zei-page-title{font-size:2.4rem;font-weight:900;color:#fff;margin:0 0 8px}
.zei-page-sub{color:rgba(255,255,255,.8);font-size:16px;margin:0}

/* ---- SECTIONS ---- */
.zei-section{padding:80px 0}
.zei-section-sm{padding:50px 0}
.zei-section-lg{padding:110px 0}
.zei-label{display:inline-block;font-size:11px;font-weight:800;letter-spacing:2.5px;text-transform:uppercase;color:var(--green);margin-bottom:10px}
.zei-title{font-size:2rem;font-weight:900;color:var(--navy);line-height:1.2;margin:0 0 14px}
.zei-title-lg{font-size:2.6rem}
.zei-sub{font-size:16px;color:var(--muted);line-height:1.7;margin:0}

/* ---- HERO SLIDER ---- */
.zei-hero{position:relative;height:100vh;min-height:580px;max-height:900px;overflow:hidden}
.zei-hero-slides{position:relative;height:100%}
.zei-hero-slide{position:absolute;inset:0;opacity:0;transition:opacity 1s ease}
.zei-hero-slide.active{opacity:1}
.zei-hero-slide img{width:100%;height:100%;object-fit:cover}
.zei-hero-overlay{position:absolute;inset:0;background:linear-gradient(135deg,rgba(7,26,62,.9) 30%,rgba(13,43,92,.7) 100%)}
.zei-hero-body{position:absolute;inset:0;display:flex;align-items:center;z-index:2}
.zei-hero-text{max-width:700px}
.zei-hero-tag{font-size:12px;font-weight:800;letter-spacing:3px;text-transform:uppercase;color:var(--green);margin-bottom:18px;display:block}
.zei-hero h1{font-size:3.8rem;font-weight:900;color:#fff;line-height:1.08;margin:0 0 20px}
.zei-hero-desc{font-size:17px;color:rgba(255,255,255,.82);margin:0 0 36px;line-height:1.65;max-width:550px}
.zei-hero-actions{display:flex;gap:14px;flex-wrap:wrap}
.zei-hero-prev,.zei-hero-next{position:absolute;top:50%;transform:translateY(-50%);z-index:4;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.25);border-radius:50%;width:50px;height:50px;display:flex;align-items:center;justify-content:center;color:#fff;cursor:pointer;transition:background .2s;font-size:18px}
.zei-hero-prev:hover,.zei-hero-next:hover{background:var(--green);border-color:var(--green)}
.zei-hero-prev{left:24px}
.zei-hero-next{right:24px}
.zei-hero-dots{position:absolute;bottom:32px;left:50%;transform:translateX(-50%);z-index:4;display:flex;gap:8px}
.zei-hero-dot{width:9px;height:9px;border-radius:50%;background:rgba(255,255,255,.35);border:none;cursor:pointer;transition:all .2s}
.zei-hero-dot.active{background:#fff;transform:scale(1.25)}

/* ---- STATS ---- */
.zei-stats-wrap{background:#fff;border-radius:14px;box-shadow:0 4px 30px rgba(0,0,0,.07);padding:0;border:1px solid var(--border)}
.zei-stat-item{padding:32px 24px;text-align:center;border-right:1px solid var(--border);flex:1}
.zei-stat-item:last-child{border-right:none}
.zei-stat-num{font-size:2.4rem;font-weight:900;color:var(--navy);line-height:1;display:block}
.zei-stat-label{font-size:13px;color:var(--muted);margin-top:6px;display:block}

/* ---- SERVICE CARDS ---- */
.zei-service-card{background:#fff;border-radius:12px;border:1px solid var(--border);padding:30px;height:100%;transition:all .3s;position:relative;overflow:hidden}
.zei-service-card::before{content:'';position:absolute;bottom:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--green),var(--blue));transform:scaleX(0);transition:transform .3s;transform-origin:left}
.zei-service-card:hover{box-shadow:0 12px 40px rgba(0,0,0,.09);transform:translateY(-3px)}
.zei-service-card:hover::before{transform:scaleX(1)}
.zei-service-num{font-size:3rem;font-weight:900;color:var(--bg);position:absolute;top:12px;right:16px;line-height:1}
.zei-service-icon{width:50px;height:50px;border-radius:12px;background:rgba(13,43,92,.07);display:flex;align-items:center;justify-content:center;margin-bottom:18px;font-size:22px;color:var(--navy)}
.zei-service-title{font-size:16px;font-weight:700;color:var(--navy);margin:0 0 10px}
.zei-service-desc{font-size:13px;color:var(--muted);line-height:1.65;margin:0}

/* ---- CARDS ---- */
.zei-card{background:#fff;border-radius:12px;border:1px solid var(--border);padding:28px;transition:box-shadow .3s,transform .3s}
.zei-card:hover{box-shadow:0 10px 40px rgba(0,0,0,.08);transform:translateY(-2px)}

/* ---- PLAN CARDS ---- */
.zei-plan{border-radius:16px;padding:36px;transition:transform .3s,box-shadow .3s;height:100%;background:#fff;border:2px solid var(--border)}
.zei-plan.featured{background:var(--navy);border-color:var(--navy);color:#fff}
.zei-plan:hover{transform:translateY(-5px);box-shadow:0 20px 50px rgba(0,0,0,.13)}
.zei-plan-badge{display:inline-block;padding:4px 14px;border-radius:20px;font-size:11px;font-weight:800;letter-spacing:1.5px;text-transform:uppercase;background:var(--green);color:#fff;margin-bottom:18px}
.zei-plan-name{font-size:1.3rem;font-weight:800;margin:0 0 6px}
.zei-plan-roi{font-size:3.2rem;font-weight:900;line-height:1;margin:16px 0 4px;color:var(--navy)}
.featured .zei-plan-roi{color:#fff}
.zei-plan-roi-label{font-size:13px;color:var(--muted)}
.featured .zei-plan-roi-label{color:rgba(255,255,255,.6)}
.zei-plan-divider{height:1px;background:var(--border);margin:20px 0}
.featured .zei-plan-divider{background:rgba(255,255,255,.15)}
.zei-plan-feature{display:flex;align-items:center;gap:10px;padding:7px 0;font-size:14px}
.zei-plan-check{color:var(--green);font-weight:700;font-size:16px}
.featured .zei-plan-check{color:#6ee7b7}
.featured .zei-plan-feature{color:rgba(255,255,255,.85)}

/* ---- TESTIMONIALS ---- */
.zei-testi{background:#fff;border-radius:12px;border:1px solid var(--border);padding:28px;transition:box-shadow .3s}
.zei-testi:hover{box-shadow:0 8px 30px rgba(0,0,0,.07)}
.zei-testi-quote{font-size:2rem;color:var(--green);line-height:1;margin-bottom:12px}
.zei-testi-text{font-size:14px;color:var(--text);line-height:1.75;margin:0 0 20px}
.zei-testi-name{font-weight:700;font-size:14px;color:var(--navy)}
.zei-testi-role{font-size:12px;color:var(--muted);margin-top:2px}
.zei-stars{color:#f59e0b;font-size:13px;margin-bottom:12px}

/* ---- STEPS ---- */
.zei-step{display:flex;gap:20px;align-items:flex-start}
.zei-step-num{width:48px;height:48px;border-radius:50%;background:var(--navy);color:#fff;display:flex;align-items:center;justify-content:center;font-size:18px;font-weight:800;flex-shrink:0}
.zei-step-title{font-size:17px;font-weight:700;color:var(--navy);margin:0 0 6px}
.zei-step-desc{font-size:14px;color:var(--muted);line-height:1.6;margin:0}

/* ---- CONTACT ---- */
.zei-contact-box{background:linear-gradient(145deg,var(--navy) 0%,#1a4080 100%);border-radius:16px;padding:40px;color:#fff;height:100%}
.zei-contact-item{display:flex;align-items:center;gap:16px;padding:16px 0;border-bottom:1px solid rgba(255,255,255,.12)}
.zei-contact-item:last-child{border-bottom:none}
.zei-contact-icon{width:44px;height:44px;border-radius:50%;background:rgba(255,255,255,.13);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:18px}
.zei-form-wrap{background:#fff;border-radius:16px;padding:40px;border:1px solid var(--border)}

/* ---- FORMS ---- */
.zei-fg{margin-bottom:18px}
.zei-fg label{display:block;font-size:13px;font-weight:600;color:var(--text);margin-bottom:6px}
.zei-inp,.zei-sel,.zei-ta{width:100%;padding:11px 15px;border:1.5px solid var(--border);border-radius:8px;font-size:14px;color:var(--text);background:#fff;outline:none;transition:border-color .2s;font-family:inherit}
.zei-inp:focus,.zei-sel:focus,.zei-ta:focus{border-color:var(--blue)}
.zei-ta{min-height:110px;resize:vertical}
.zei-err{color:#dc2626;font-size:12px;margin-top:4px}

/* ---- AUTH ---- */
.zei-auth-wrap{min-height:calc(100vh - 120px);background:var(--bg);display:flex;align-items:center;justify-content:center;padding:60px 16px}
.zei-auth-card{background:#fff;border-radius:16px;box-shadow:0 4px 40px rgba(0,0,0,.08);width:100%;max-width:480px;padding:48px 40px}
.zei-auth-logo{font-size:1.3rem;font-weight:900;color:var(--navy);text-align:center;margin-bottom:28px;display:block}
.zei-auth-logo span{color:var(--green)}
.zei-auth-title{font-size:1.6rem;font-weight:800;color:var(--navy);text-align:center;margin:0 0 6px}
.zei-auth-sub{color:var(--muted);font-size:14px;text-align:center;margin:0 0 32px}

/* ---- DASHBOARD ---- */
.zei-dash{background:var(--bg);min-height:80vh;padding:48px 0}
.zei-dash-stat{background:#fff;border-radius:12px;padding:24px;border-left:4px solid var(--green);box-shadow:0 2px 8px rgba(0,0,0,.05)}
.zei-dash-stat-num{font-size:1.9rem;font-weight:900;color:var(--navy);line-height:1}
.zei-dash-stat-label{font-size:13px;color:var(--muted);margin-top:5px}
.zei-dash-stat-icon{font-size:28px;color:var(--green);margin-bottom:8px}
.zei-dash-panel{background:#fff;border-radius:12px;border:1px solid var(--border);padding:28px;height:100%}
.zei-panel-title{font-size:16px;font-weight:700;color:var(--navy);margin:0 0 20px;padding-bottom:14px;border-bottom:1px solid var(--border)}

/* ---- TABLE ---- */
.zei-table-wrap{overflow-x:auto;border-radius:10px;border:1px solid var(--border)}
.zei-table{width:100%;border-collapse:collapse;font-size:14px}
.zei-table thead th{background:var(--navy);color:#fff;padding:13px 16px;text-align:left;font-size:12px;font-weight:700;letter-spacing:.5px;white-space:nowrap}
.zei-table tbody td{padding:12px 16px;border-bottom:1px solid var(--border)}
.zei-table tbody tr:last-child td{border-bottom:none}
.zei-table tbody tr:hover td{background:#f8fafc}
.zei-badge{display:inline-flex;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:700}
.zei-badge-green{background:#d1fae5;color:#065f46}
.zei-badge-yellow{background:#fef3c7;color:#92400e}
.zei-badge-red{background:#fee2e2;color:#991b1b}
.zei-badge-blue{background:#dbeafe;color:#1e40af}

/* ---- FAQ ---- */
.zei-faq-item{border:1px solid var(--border);border-radius:10px;margin-bottom:10px;overflow:hidden}
.zei-faq-q{width:100%;display:flex;justify-content:space-between;align-items:center;padding:18px 24px;background:#fff;border:none;cursor:pointer;text-align:left;font-size:15px;font-weight:600;color:var(--navy);transition:background .2s;gap:16px;font-family:inherit}
.zei-faq-q:hover,.zei-faq-q.open{background:var(--navy);color:#fff}
.zei-faq-q .zei-faq-icon{flex-shrink:0;font-size:18px;font-weight:300;color:inherit;transition:transform .3s}
.zei-faq-q.open .zei-faq-icon{transform:rotate(45deg)}
.zei-faq-a{display:none;padding:20px 24px;background:var(--bg);font-size:14px;color:var(--muted);line-height:1.7}
.zei-faq-a.open{display:block}

/* ---- CTA BANNER ---- */
.zei-cta{background:linear-gradient(135deg,var(--navy) 0%,var(--navy-dk) 100%);padding:80px 0;text-align:center}
.zei-cta h2{font-size:2.4rem;font-weight:900;color:#fff;margin:0 0 16px}
.zei-cta p{font-size:16px;color:rgba(255,255,255,.78);margin:0 0 32px;max-width:560px;margin-left:auto;margin-right:auto;line-height:1.7}

/* ---- PARTNERS ---- */
.zei-partners{background:var(--navy);padding:28px 0}
.zei-partner-item{display:flex;align-items:center;justify-content:center;padding:0 16px;opacity:.65;transition:opacity .2s}
.zei-partner-item:hover{opacity:1}
.zei-partner-item img{max-height:36px;object-fit:contain;filter:brightness(0) invert(1)}

/* ---- FOOTER ---- */
#zei-footer{background:var(--navy-dk);color:#fff;padding:64px 0 0}
.zei-footer-brand{font-size:1.28rem;font-weight:900;letter-spacing:-0.5px;margin-bottom:14px}
.zei-footer-brand span{color:var(--green)}
.zei-footer-desc{color:rgba(255,255,255,.55);font-size:14px;line-height:1.75;margin-bottom:20px}
.zei-footer-h{font-size:12px;font-weight:800;text-transform:uppercase;letter-spacing:2px;color:rgba(255,255,255,.45);margin-bottom:18px}
.zei-footer-links li{margin-bottom:9px}
.zei-footer-links a{color:rgba(255,255,255,.65);font-size:14px;text-decoration:none;transition:color .2s}
.zei-footer-links a:hover{color:#fff}
.zei-footer-social{display:flex;gap:8px;margin-top:18px}
.zei-footer-social a{width:34px;height:34px;border-radius:50%;background:rgba(255,255,255,.1);display:flex;align-items:center;justify-content:center;color:#fff;font-size:12px;text-decoration:none;transition:background .2s}
.zei-footer-social a:hover{background:var(--green)}
.zei-footer-bottom{border-top:1px solid rgba(255,255,255,.08);margin-top:48px;padding:20px 0}
.zei-footer-bottom-inner{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px}
.zei-footer-bottom p,.zei-footer-bottom a{color:rgba(255,255,255,.4);font-size:13px;margin:0;text-decoration:none}
.zei-footer-bottom a:hover{color:rgba(255,255,255,.7)}
.zei-footer-bottom-links{display:flex;gap:16px}

/* ---- SCROLL TOP ---- */
#zei-scroll-top{position:fixed;bottom:100px;right:24px;width:42px;height:42px;border-radius:50%;background:var(--navy);color:#fff;display:flex;align-items:center;justify-content:center;cursor:pointer;border:none;opacity:0;pointer-events:none;transition:all .3s;z-index:900;font-size:16px;text-decoration:none}
#zei-scroll-top.visible{opacity:1;pointer-events:all}
#zei-scroll-top:hover{background:var(--green);color:#fff}

/* ---- PARTNER TICKER (home) ---- */
.zei-ticker-wrap{background:var(--bg);border-top:1px solid var(--border);border-bottom:1px solid var(--border);padding:0}

/* ---- UTILS ---- */
.zei-bg-light{background:var(--bg)}
.zei-bg-navy{background:var(--navy);color:#fff}
.zei-divider{height:1px;background:var(--border)}
.zei-text-green{color:var(--green)}
.zei-text-navy{color:var(--navy)}
.zei-text-muted{color:var(--muted)}

/* ---- RESPONSIVE ---- */
@media(max-width:991px){
  .zei-nav-links,.zei-nav-actions{display:none!important}
  .zei-hamburger{display:flex!important;align-items:center;justify-content:center}
  .zei-hero h1{font-size:2.8rem}
  .zei-stat-item{border-right:none;border-bottom:1px solid var(--border)}
  .zei-stat-item:last-child{border-bottom:none}
  .zei-stats-wrap{display:block}
}
@media(max-width:767px){
  .zei-hero{height:80vh;min-height:500px}
  .zei-hero h1{font-size:2rem}
  .zei-page-title{font-size:1.9rem}
  .zei-auth-card{padding:32px 20px}
  .zei-section{padding:60px 0}
  .zei-title{font-size:1.65rem}
  .zei-contact-box{padding:28px}
  .zei-form-wrap{padding:28px}
  .zei-plan{padding:28px}
  #zei-topbar{display:none}
}
@media(min-width:992px){
  .zei-stats-wrap{display:flex}
}
</style>
</head>
<body>

{{-- FLASH MESSAGES --}}
@if(session('success'))
<div class="zei-flash zei-flash-ok">{{ session('success') }}</div>
@endif
@if(session('error'))
<div class="zei-flash zei-flash-err">{{ session('error') }}</div>
@endif
@if($errors->any())
<div class="zei-flash zei-flash-err">
    @foreach($errors->all() as $error)<div>{{ $error }}</div>@endforeach
</div>
@endif

{{-- TOP BAR --}}
<div id="zei-topbar">
    <div class="container">
        <div class="zei-topbar-inner">
            <div class="zei-topbar-left">
                <span><i class="ph-light ph-map-pin" style="margin-right:5px"></i>California, USA</span>
                <span><i class="ph-light ph-envelope" style="margin-right:5px"></i>support@zenithedgeinvestment.com</span>
            </div>
            <div class="zei-topbar-right">
                <a href="https://api.whatsapp.com/send?phone=+15413211863"><i class="ph-light ph-phone" style="margin-right:4px"></i>+1 (541) 321-1863</a>
            </div>
        </div>
    </div>
</div>

{{-- NAVBAR --}}
<nav id="zei-navbar">
    <div class="container">
        <div class="zei-nav-inner">

            <a href="{{ route('home') }}" class="zei-logo">
                <div class="zei-logo-icon">Z</div>
                <div class="zei-logo-text">
                    <strong>Zenith Edge</strong>
                    <span>Investment</span>
                </div>
            </a>

            <ul class="zei-nav-links">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li class="zei-dropdown">
                    <a href="#!" class="zei-nav-btn-link">Who We Are <i class="ph ph-caret-down" style="font-size:11px;opacity:.7"></i></a>
                    <ul class="zei-dropdown-menu">
                        <li><a href="{{ route('about') }}">&#128204; About Us</a></li>
                        <li><a href="{{ route('mission') }}">&#127919; Our Mission</a></li>
                        <li><a href="{{ route('values') }}">&#9733; Our Values</a></li>
                        <li><a href="{{ route('investors') }}">&#128200; Our Investment</a></li>
                    </ul>
                </li>
                <li class="zei-dropdown">
                    <a href="#!" class="zei-nav-btn-link">What We Offer <i class="ph ph-caret-down" style="font-size:11px;opacity:.7"></i></a>
                    <ul class="zei-dropdown-menu">
                        <li><a href="{{ route('gold') }}">&#129351; Gold</a></li>
                        <li><a href="{{ route('cryptocurrency') }}">&#8383; Cryptocurrency</a></li>
                        <li><a href="{{ route('stocks') }}">&#128201; Stocks &amp; Bonds</a></li>
                        <li><a href="{{ route('cfds') }}">&#128250; CFDs</a></li>
                        <li><a href="{{ route('oil-gas') }}">&#9981; Oil &amp; Gas</a></li>
                        <li><a href="{{ route('forex') }}">&#128178; Forex</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('loan') }}">Loan</a></li>
                <li><a href="{{ route('real-estate') }}">Real Estate</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                @auth
                <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a></li>
                @endauth
            </ul>

            <div class="zei-nav-actions">
                @auth
                <form action="{{ route('logout') }}" method="POST" style="display:inline">
                    @csrf
                    <button type="submit" class="zei-btn zei-btn-ghost-nav">Logout</button>
                </form>
                @else
                <a href="{{ route('login') }}" class="zei-btn zei-btn-ghost-nav">Login</a>
                <a href="{{ route('register') }}" class="zei-btn zei-btn-green zei-btn-sm">Get Started &rarr;</a>
                @endauth
            </div>

            <button class="zei-hamburger" id="zei-open-menu" aria-label="Menu">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="24" height="24">
                    <line x1="3" y1="7" x2="21" y2="7"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="17" x2="21" y2="17"/>
                </svg>
            </button>
        </div>
    </div>
</nav>

{{-- MOBILE OVERLAY --}}
<div id="zei-mobile-overlay"></div>

{{-- MOBILE MENU --}}
<div id="zei-mobile-menu">
    <div class="zei-mobile-header">
        <div style="display:flex;align-items:center;gap:10px">
            <div style="width:32px;height:32px;border-radius:7px;background:var(--green);display:flex;align-items:center;justify-content:center;font-size:16px;font-weight:900;color:#fff">Z</div>
            <div style="line-height:1.1">
                <div style="font-size:.95rem;font-weight:900;color:#fff">Zenith Edge</div>
                <div style="font-size:9px;font-weight:600;color:var(--green);letter-spacing:2px;text-transform:uppercase">Investment</div>
            </div>
        </div>
        <button class="zei-mobile-close" id="zei-close-menu">&#215;</button>
    </div>
    <ul class="zei-mobile-nav">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>
            <button onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display==='none'?'block':'none'">Who We Are &#9660;</button>
            <ul class="zei-mobile-sub" style="display:none">
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('mission') }}">Our Mission</a></li>
                <li><a href="{{ route('values') }}">Our Values</a></li>
                <li><a href="{{ route('investors') }}">Our Investment</a></li>
            </ul>
        </li>
        <li>
            <button onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display==='none'?'block':'none'">What We Offer &#9660;</button>
            <ul class="zei-mobile-sub" style="display:none">
                <li><a href="{{ route('gold') }}">Gold</a></li>
                <li><a href="{{ route('cryptocurrency') }}">Cryptocurrency</a></li>
                <li><a href="{{ route('stocks') }}">Stocks & Bonds</a></li>
                <li><a href="{{ route('cfds') }}">CFDs</a></li>
                <li><a href="{{ route('oil-gas') }}">Oil & Gas</a></li>
                <li><a href="{{ route('forex') }}">Forex</a></li>
            </ul>
        </li>
        <li><a href="{{ route('loan') }}">Loan</a></li>
        <li><a href="{{ route('real-estate') }}">Real Estate</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        @auth
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        @endauth
    </ul>
    <div class="zei-mobile-cta">
        @auth
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="zei-btn zei-btn-navy" style="width:100%;justify-content:center">Logout</button>
        </form>
        @else
        <a href="{{ route('login') }}" class="zei-btn zei-btn-navy" style="width:100%;justify-content:center">Login</a>
        <a href="{{ route('register') }}" class="zei-btn zei-btn-green" style="width:100%;justify-content:center">Create Account</a>
        @endauth
    </div>
</div>

{{-- CONTENT --}}
<main id="zei-main">
    @yield('content')
</main>

{{-- SCROLL TO TOP --}}
<a href="#" id="zei-scroll-top" title="Back to top">&#8679;</a>

{{-- FOOTER --}}
<footer id="zei-footer">
    <div class="container">
        <div class="row" style="gap:0 0">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="zei-footer-brand">Zenith Edge<span> Investment</span></div>
                <p class="zei-footer-desc">We provide long-term and short-term investment opportunities backed by expert market analysis and secure trading infrastructure based in California, USA.</p>
                <div class="zei-footer-social">
                    <a href="https://www.facebook.com/" target="_blank"><i class="icon-facebook"></i></a>
                    <a href="https://www.linkedin.com/" target="_blank"><i class="icon-in"></i></a>
                    <a href="https://www.twitter.com/" target="_blank"><i class="icon-twitter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="icon-insta"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="icon-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-6 mb-4">
                <div class="zei-footer-h">Company</div>
                <ul class="zei-footer-links">
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('mission') }}">Our Mission</a></li>
                    <li><a href="{{ route('values') }}">Our Values</a></li>
                    <li><a href="{{ route('investors') }}">Investment Plan</a></li>
                    <li><a href="{{ route('imprint') }}">Imprint</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 col-6 mb-4">
                <div class="zei-footer-h">Support</div>
                <ul class="zei-footer-links">
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a href="{{ route('faq') }}">FAQs</a></li>
                    <li><a href="{{ route('rules') }}">Rules</a></li>
                    <li><a href="{{ route('terms') }}">Terms of Service</a></li>
                    <li><a href="{{ route('login') }}">Member Login</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="zei-footer-h">Contact</div>
                <ul class="zei-footer-links">
                    <li style="color:rgba(255,255,255,.65);font-size:14px;margin-bottom:10px"><i class="ph-light ph-map-pin" style="margin-right:6px"></i>California, USA</li>
                    <li style="margin-bottom:10px"><a href="https://api.whatsapp.com/send?phone=+15413211863"><i class="ph-light ph-phone" style="margin-right:6px"></i>+1 (541) 321-1863</a></li>
                    <li style="margin-bottom:20px"><a href="mailto:support@zenithedgeinvestment.com"><i class="ph-light ph-envelope" style="margin-right:6px"></i>support@zenithedgeinvestment.com</a></li>
                </ul>
                <div class="zei-footer-h">Newsletter</div>
                <div style="display:flex;gap:0;border-radius:8px;overflow:hidden;border:1px solid rgba(255,255,255,.15)">
                    <input type="email" placeholder="Your email" style="flex:1;padding:10px 14px;background:rgba(255,255,255,.07);border:none;color:#fff;font-size:13px;outline:none">
                    <button style="padding:10px 18px;background:var(--green);border:none;color:#fff;cursor:pointer;font-size:13px;font-weight:600">Go</button>
                </div>
            </div>
        </div>
    </div>
    <div class="zei-footer-bottom">
        <div class="container">
            <div class="zei-footer-bottom-inner">
                <p>&copy;{{ date('Y') }} Zenith Edge Investment. All Rights Reserved.</p>
                <div class="zei-footer-bottom-links">
                    <a href="{{ route('terms') }}">Terms</a>
                    <a href="{{ route('terms') }}">Privacy</a>
                    <a href="{{ route('terms') }}">Cookies</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('lassets/js/jquery-3.7.0.js') }}"></script>
<script src="{{ asset('lassets/js/phosphor-icon.js') }}"></script>

<script>
// Sticky navbar
window.addEventListener('scroll',function(){
    document.getElementById('zei-navbar').classList.toggle('scrolled',window.scrollY>20);
    document.getElementById('zei-scroll-top').classList.toggle('visible',window.scrollY>300);
});

// Mobile menu
var openBtn=document.getElementById('zei-open-menu');
var closeBtn=document.getElementById('zei-close-menu');
var mobileMenu=document.getElementById('zei-mobile-menu');
var overlay=document.getElementById('zei-mobile-overlay');
function openMenu(){mobileMenu.classList.add('open');overlay.classList.add('open');document.body.style.overflow='hidden';}
function closeMenu(){mobileMenu.classList.remove('open');overlay.classList.remove('open');document.body.style.overflow='';}
if(openBtn)openBtn.addEventListener('click',openMenu);
if(closeBtn)closeBtn.addEventListener('click',closeMenu);
if(overlay)overlay.addEventListener('click',closeMenu);

// Scroll top
document.getElementById('zei-scroll-top').addEventListener('click',function(e){e.preventDefault();window.scrollTo({top:0,behavior:'smooth'});});
</script>

<script type="text/javascript">
(function(){
    var options={whatsapp:"+15413211863",call_to_action:"Message us",position:"left"};
    var proto=document.location.protocol,host="getbutton.io",url=proto+"//static."+host;
    var s=document.createElement('script');
    s.type='text/javascript';s.async=true;
    s.src=url+'/widget-send-button/js/init.js';
    s.onload=function(){WhWidgetSendButton.init(host,proto,options);};
    var x=document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s,x);
})();
</script>

@yield('scripts')
</body>
</html>
