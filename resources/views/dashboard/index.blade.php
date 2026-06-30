@extends('layouts.app')

@section('title', 'Dashboard | Zenith Edge Investment')

@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32">
            <a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a>
            <i class="ph ph-caret-double-right text-white"></i>
            <div class="caption1 text-white">Dashboard</div>
        </div>
        <div class="text-nav">
            <div class="heading3 text-white">My Dashboard</div>
        </div>
    </div>
</div>

<div class="form-contact style-one mt-60">
    <div class="container">

        {{-- Welcome & Balance --}}
        <div class="row row-gap-24 mb-40">
            <div class="col-12 col-md-4">
                <div class="bg-surface bora-16 p-32 text-center hover-box-shadow">
                    <i class="icon-wallet text-blue fs-48"></i>
                    <div class="heading4 mt-16">${{ number_format(Auth::user()->balance, 2) }}</div>
                    <div class="body3 text-secondary mt-4">Account Balance</div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="bg-surface bora-16 p-32 text-center hover-box-shadow">
                    <i class="icon-rocket text-blue fs-48"></i>
                    <div class="heading4 mt-16">{{ $activeInvestments }}</div>
                    <div class="body3 text-secondary mt-4">Active Investments</div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="bg-surface bora-16 p-32 text-center hover-box-shadow">
                    <i class="icon-user-happy text-blue fs-48"></i>
                    <div class="heading4 mt-16">{{ $totalReferrals }}</div>
                    <div class="body3 text-secondary mt-4">Total Referrals</div>
                </div>
            </div>
        </div>

        {{-- Referral Link --}}
        <div class="bg-surface bora-16 p-32 mb-40">
            <div class="heading6 mb-16">Your Referral Link</div>
            <div class="flex-item-center gap-12">
                <input type="text" id="refLink" value="{{ url('/register?ref=' . Auth::user()->referral_code) }}"
                    class="w-100 bg-white text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" readonly>
                <button onclick="copyRef()" class="button-share bg-blue text-white text-button pl-20 pr-20 pt-12 pb-12 bora-8" style="white-space:nowrap;">Copy</button>
            </div>
            <div class="caption2 text-secondary mt-8">Earn 10% commission on Level 1 referrals and 10% on Level 2 referrals.</div>
        </div>

        <div class="row row-gap-32">

            {{-- DEPOSIT --}}
            <div class="col-12 col-md-6 col-lg-4">
                <div class="bg-surface bora-16 p-32 hover-box-shadow">
                    <div class="heading6 mb-20">Make a Deposit</div>
                    <form action="{{ route('dashboard.deposit') }}" method="POST">
                        @csrf
                        <label class="caption1 text-secondary">Amount (USD)</label>
                        <input type="number" name="amount" min="10" step="0.01"
                            class="w-100 bg-white text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8 mt-8"
                            placeholder="Enter amount" required>
                        <label class="caption1 text-secondary mt-12 display-block">Payment Method</label>
                        <select name="payment_method" class="w-100 bg-white text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8 mt-8" required>
                            <option value="bitcoin">Bitcoin (BTC)</option>
                            <option value="ethereum">Ethereum (ETH)</option>
                            <option value="usdt">USDT (TRC20)</option>
                            <option value="bank">Bank Transfer</option>
                        </select>
                        <button type="submit" class="button-share bg-blue text-white text-button pl-28 pr-28 pt-12 pb-12 bora-8 w-100 mt-20">Submit Deposit</button>
                    </form>
                </div>
            </div>

            {{-- WITHDRAW --}}
            <div class="col-12 col-md-6 col-lg-4">
                <div class="bg-surface bora-16 p-32 hover-box-shadow">
                    <div class="heading6 mb-20">Request Withdrawal</div>
                    <form action="{{ route('dashboard.withdraw') }}" method="POST">
                        @csrf
                        <label class="caption1 text-secondary">Amount (USD)</label>
                        <input type="number" name="amount" min="10" step="0.01"
                            class="w-100 bg-white text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8 mt-8"
                            placeholder="Enter amount" required>
                        <label class="caption1 text-secondary mt-12 display-block">Wallet / Account</label>
                        <input type="text" name="payment_method"
                            class="w-100 bg-white text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8 mt-8"
                            placeholder="BTC address or bank account" required>
                        <button type="submit" class="button-share bg-blue text-white text-button pl-28 pr-28 pt-12 pb-12 bora-8 w-100 mt-20">Request Withdrawal</button>
                    </form>
                </div>
            </div>

            {{-- INVEST --}}
            <div class="col-12 col-md-6 col-lg-4">
                <div class="bg-surface bora-16 p-32 hover-box-shadow">
                    <div class="heading6 mb-20">Start Investment</div>
                    <form action="{{ route('dashboard.invest') }}" method="POST">
                        @csrf
                        <label class="caption1 text-secondary">Select Plan</label>
                        <select name="plan_id" class="w-100 bg-white text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8 mt-8" required>
                            <option value="">Choose a plan</option>
                            @foreach($plans as $plan)
                                <option value="{{ $plan->id }}">{{ $plan->name }} — {{ $plan->roi_percent }}% ROI / {{ $plan->duration_days }}d (Min: ${{ number_format($plan->min_amount, 0) }})</option>
                            @endforeach
                        </select>
                        <label class="caption1 text-secondary mt-12 display-block">Amount (USD)</label>
                        <input type="number" name="amount" min="1" step="0.01"
                            class="w-100 bg-white text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8 mt-8"
                            placeholder="Enter amount" required>
                        <button type="submit" class="button-share bg-blue text-white text-button pl-28 pr-28 pt-12 pb-12 bora-8 w-100 mt-20">Invest Now</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- Recent Investments --}}
        <div class="mt-60">
            <div class="heading6 mb-20">My Investments</div>
            @if($investments->isEmpty())
                <div class="bg-surface bora-16 p-32 text-center text-secondary">No investments yet. Start investing today!</div>
            @else
            <div style="overflow-x:auto;">
                <table style="width:100%;border-collapse:collapse;">
                    <thead>
                        <tr style="background:#072b5b;color:white;">
                            <th style="padding:12px 16px;text-align:left;">Plan</th>
                            <th style="padding:12px 16px;text-align:left;">Amount</th>
                            <th style="padding:12px 16px;text-align:left;">ROI</th>
                            <th style="padding:12px 16px;text-align:left;">Status</th>
                            <th style="padding:12px 16px;text-align:left;">Ends At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($investments as $inv)
                        <tr style="border-bottom:1px solid #eee;">
                            <td style="padding:12px 16px;">{{ $inv->plan->name ?? 'N/A' }}</td>
                            <td style="padding:12px 16px;">${{ number_format($inv->amount, 2) }}</td>
                            <td style="padding:12px 16px;">${{ number_format($inv->roi_amount, 2) }}</td>
                            <td style="padding:12px 16px;">
                                <span style="padding:4px 10px;border-radius:20px;font-size:12px;background:{{ $inv->status=='active' ? '#d4edda' : ($inv->status=='completed' ? '#cce5ff' : '#f8d7da') }};color:{{ $inv->status=='active' ? '#155724' : ($inv->status=='completed' ? '#004085' : '#721c24') }};">
                                    {{ ucfirst($inv->status) }}
                                </span>
                            </td>
                            <td style="padding:12px 16px;">{{ $inv->ends_at ? $inv->ends_at->format('M d, Y') : '—' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>

        {{-- Recent Transactions --}}
        <div class="mt-60">
            <div class="heading6 mb-20">Recent Transactions</div>
            @if($transactions->isEmpty())
                <div class="bg-surface bora-16 p-32 text-center text-secondary">No transactions yet.</div>
            @else
            <div style="overflow-x:auto;">
                <table style="width:100%;border-collapse:collapse;">
                    <thead>
                        <tr style="background:#072b5b;color:white;">
                            <th style="padding:12px 16px;text-align:left;">Reference</th>
                            <th style="padding:12px 16px;text-align:left;">Type</th>
                            <th style="padding:12px 16px;text-align:left;">Amount</th>
                            <th style="padding:12px 16px;text-align:left;">Status</th>
                            <th style="padding:12px 16px;text-align:left;">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $txn)
                        <tr style="border-bottom:1px solid #eee;">
                            <td style="padding:12px 16px;font-size:12px;">{{ $txn->reference }}</td>
                            <td style="padding:12px 16px;">{{ ucfirst($txn->type) }}</td>
                            <td style="padding:12px 16px;">${{ number_format($txn->amount, 2) }}</td>
                            <td style="padding:12px 16px;">
                                <span style="padding:4px 10px;border-radius:20px;font-size:12px;background:{{ $txn->status=='approved' ? '#d4edda' : ($txn->status=='pending' ? '#fff3cd' : '#f8d7da') }};color:{{ $txn->status=='approved' ? '#155724' : ($txn->status=='pending' ? '#856404' : '#721c24') }};">
                                    {{ ucfirst($txn->status) }}
                                </span>
                            </td>
                            <td style="padding:12px 16px;">{{ $txn->created_at->format('M d, Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>

    </div>
</div>
@endsection

@section('scripts')
<script>
function copyRef() {
    var el = document.getElementById('refLink');
    el.select();
    document.execCommand('copy');
    alert('Referral link copied!');
}
</script>
@endsection
