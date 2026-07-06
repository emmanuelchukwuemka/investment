@extends('layouts.app')
@section('title', 'Imprint | Zenith Edge Investment')
@section('content')

<div class="zei-page-hero">
    <img src="{{ asset('lassets/images/banner/contact.png') }}" alt="Imprint" class="zei-page-hero-bg">
    <div class="zei-page-hero-overlay"></div>
    <div class="container">
        <div class="zei-page-hero-content">
            <div class="zei-breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="sep">&#8250;</span>
                <span class="cur">Imprint</span>
            </div>
            <h1 class="zei-page-title">Imprint</h1>
        </div>
    </div>
</div>

<div class="zei-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="zei-card" style="height:100%">
                    <div style="font-size:17px;font-weight:800;color:var(--navy);margin-bottom:20px;padding-bottom:14px;border-bottom:2px solid var(--green)">Company Information</div>
                    <table style="width:100%;font-size:14px;border-collapse:separate;border-spacing:0 10px">
                        <tr>
                            <td style="color:var(--muted);padding-right:16px;font-weight:600;width:45%;vertical-align:top">Company Name</td>
                            <td style="color:var(--text);font-weight:700">Zenith Edge Investment</td>
                        </tr>
                        <tr>
                            <td style="color:var(--muted);font-weight:600;vertical-align:top">Registered In</td>
                            <td style="color:var(--text)">California, USA</td>
                        </tr>
                        <tr>
                            <td style="color:var(--muted);font-weight:600;vertical-align:top">FINRA CRD#</td>
                            <td style="color:var(--text)">7482994</td>
                        </tr>
                        <tr>
                            <td style="color:var(--muted);font-weight:600;vertical-align:top">License</td>
                            <td style="color:var(--text)">LOFSA (Labuan Financial Services Authority)</td>
                        </tr>
                        <tr>
                            <td style="color:var(--muted);font-weight:600;vertical-align:top">Protection</td>
                            <td style="color:var(--text)">SIPC (Security Investor Protection Corporation)</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="zei-card" style="height:100%">
                    <div style="font-size:17px;font-weight:800;color:var(--navy);margin-bottom:20px;padding-bottom:14px;border-bottom:2px solid var(--green)">Contact Information</div>
                    <table style="width:100%;font-size:14px;border-collapse:separate;border-spacing:0 10px">
                        <tr>
                            <td style="color:var(--muted);padding-right:16px;font-weight:600;width:35%;vertical-align:top">Email</td>
                            <td><a href="mailto:support@zenithedgeinvestment.com" style="color:var(--blue)">support@zenithedgeinvestment.com</a></td>
                        </tr>
                        <tr>
                            <td style="color:var(--muted);font-weight:600;vertical-align:top">Phone</td>
                            <td><a href="https://api.whatsapp.com/send?phone=+19253015238" style="color:var(--blue)">+1 (925) 301-5238</a></td>
                        </tr>
                        <tr>
                            <td style="color:var(--muted);font-weight:600;vertical-align:top">WhatsApp</td>
                            <td><a href="https://api.whatsapp.com/send?phone=+19253015238" style="color:var(--blue)">+1 (925) 301-5238</a></td>
                        </tr>
                        <tr>
                            <td style="color:var(--muted);font-weight:600;vertical-align:top">Address</td>
                            <td style="color:var(--text)">California, USA</td>
                        </tr>
                        <tr>
                            <td style="color:var(--muted);font-weight:600;vertical-align:top">Support</td>
                            <td><span style="background:#d1fae5;color:#065f46;padding:3px 12px;border-radius:20px;font-size:12px;font-weight:700">24 / 7</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
