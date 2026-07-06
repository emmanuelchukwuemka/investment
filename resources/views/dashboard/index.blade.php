@extends('layouts.app')
@section('title', 'Dashboard | Zenith Edge Investment')
@section('content')

<div class="zei-dash">
    <div class="container">

        {{-- Welcome Header --}}
        <div style="margin-bottom:32px">
            <h1 style="font-size:1.6rem;font-weight:900;color:var(--navy);margin:0 0 4px">Welcome back, {{ Auth::user()->name }}</h1>
            <p style="color:var(--muted);font-size:14px;margin:0">Manage your investments and track your portfolio performance.</p>
        </div>

        {{-- STAT CARDS --}}
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="zei-dash-stat">
                    <div class="zei-dash-stat-icon"><i class="icon-wallet"></i></div>
                    <div class="zei-dash-stat-num">${{ number_format(Auth::user()->balance, 2) }}</div>
                    <div class="zei-dash-stat-label">Account Balance</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="zei-dash-stat" style="border-left-color:var(--blue)">
                    <div class="zei-dash-stat-icon" style="color:var(--blue)"><i class="icon-rocket"></i></div>
                    <div class="zei-dash-stat-num">{{ $activeInvestments }}</div>
                    <div class="zei-dash-stat-label">Active Investments</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="zei-dash-stat" style="border-left-color:var(--gold)">
                    <div class="zei-dash-stat-icon" style="color:var(--gold)"><i class="icon-user-happy"></i></div>
                    <div class="zei-dash-stat-num">{{ $totalReferrals }}</div>
                    <div class="zei-dash-stat-label">Total Referrals</div>
                </div>
            </div>
        </div>

        {{-- REFERRAL LINK --}}
        <div class="zei-dash-panel mb-4">
            <div class="zei-panel-title">Your Referral Link</div>
            <div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap">
                <input type="text" id="refLink" value="{{ url('/register?ref=' . Auth::user()->referral_code) }}" class="zei-inp" style="flex:1;min-width:200px;background:var(--bg)" readonly>
                <button onclick="copyRef()" class="zei-btn zei-btn-navy" style="white-space:nowrap">Copy Link</button>
            </div>
            <p style="font-size:13px;color:var(--muted);margin:10px 0 0">Earn <strong>10%</strong> on Level 1 referral deposits and <strong>10%</strong> on Level 2 sub-referral profits.</p>
        </div>

        {{-- ACTION PANELS --}}
        <div class="row g-4 mb-4">
            <div class="col-lg-4">
                <div class="zei-dash-panel">
                    <div class="zei-panel-title">Make a Deposit</div>
                    <form action="{{ route('dashboard.deposit') }}" method="POST">
                        @csrf
                        <div class="zei-fg">
                            <label>Amount (USD)</label>
                            <input type="number" name="amount" min="10" step="0.01" class="zei-inp" placeholder="Enter amount" required>
                        </div>
                        <div class="zei-fg">
                            <label>Payment Method</label>
                            <select name="payment_method" class="zei-sel" required>
                                <option value="bitcoin">Bitcoin (BTC)</option>
                                <option value="ethereum">Ethereum (ETH)</option>
                                <option value="usdt">USDT (TRC20)</option>
                                <option value="bank">Bank Transfer</option>
                            </select>
                        </div>
                        <button type="submit" class="zei-btn zei-btn-green" style="width:100%;justify-content:center;padding:12px">Submit Deposit</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="zei-dash-panel">
                    <div class="zei-panel-title">Request Withdrawal</div>
                    <form action="{{ route('dashboard.withdraw') }}" method="POST">
                        @csrf
                        <div class="zei-fg">
                            <label>Amount (USD)</label>
                            <input type="number" name="amount" min="10" step="0.01" class="zei-inp" placeholder="Enter amount" required>
                        </div>
                        <div class="zei-fg">
                            <label>Wallet / Account</label>
                            <input type="text" name="payment_method" class="zei-inp" placeholder="BTC address or bank account" required>
                        </div>
                        <button type="submit" class="zei-btn zei-btn-navy" style="width:100%;justify-content:center;padding:12px">Request Withdrawal</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="zei-dash-panel">
                    <div class="zei-panel-title">Start Investment</div>
                    <form action="{{ route('dashboard.invest') }}" method="POST">
                        @csrf
                        <div class="zei-fg">
                            <label>Select Plan</label>
                            <select name="plan_id" class="zei-sel" required>
                                <option value="">Choose a plan</option>
                                @foreach($plans as $plan)
                                <option value="{{ $plan->id }}">{{ $plan->name }} &mdash; {{ $plan->roi_percent }}% / {{ $plan->duration_days }}d (Min: ${{ number_format($plan->min_amount, 0) }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="zei-fg">
                            <label>Amount (USD)</label>
                            <input type="number" name="amount" min="1" step="0.01" class="zei-inp" placeholder="Enter amount" required>
                        </div>
                        <button type="submit" class="zei-btn zei-btn-green" style="width:100%;justify-content:center;padding:12px">Invest Now</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- MY INVESTMENTS --}}
        <div class="zei-dash-panel mb-4">
            <div class="zei-panel-title">My Investments</div>
            @if($investments->isEmpty())
            <div style="text-align:center;padding:40px;color:var(--muted)">
                <div style="font-size:2rem;margin-bottom:12px">&#128200;</div>
                <div style="font-size:15px;font-weight:600;margin-bottom:6px">No investments yet</div>
                <div style="font-size:14px">Start investing today to see your portfolio here.</div>
            </div>
            @else
            <div class="zei-table-wrap">
                <table class="zei-table">
                    <thead>
                        <tr>
                            <th>Plan</th>
                            <th>Amount</th>
                            <th>ROI</th>
                            <th>Status</th>
                            <th>Ends At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($investments as $inv)
                        <tr>
                            <td style="font-weight:600;color:var(--navy)">{{ $inv->plan->name ?? 'N/A' }}</td>
                            <td>${{ number_format($inv->amount, 2) }}</td>
                            <td style="color:var(--green);font-weight:700">${{ number_format($inv->roi_amount, 2) }}</td>
                            <td>
                                <span class="zei-badge {{ $inv->status=='active' ? 'zei-badge-green' : ($inv->status=='completed' ? 'zei-badge-blue' : 'zei-badge-red') }}">
                                    {{ ucfirst($inv->status) }}
                                </span>
                            </td>
                            <td style="color:var(--muted)">{{ $inv->ends_at ? $inv->ends_at->format('M d, Y') : '—' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>

        {{-- RECENT TRANSACTIONS --}}
        <div class="zei-dash-panel">
            <div class="zei-panel-title">Recent Transactions</div>
            @if($transactions->isEmpty())
            <div style="text-align:center;padding:40px;color:var(--muted)">
                <div style="font-size:2rem;margin-bottom:12px">&#128203;</div>
                <div style="font-size:15px;font-weight:600;margin-bottom:6px">No transactions yet</div>
                <div style="font-size:14px">Your transaction history will appear here.</div>
            </div>
            @else
            <div class="zei-table-wrap">
                <table class="zei-table">
                    <thead>
                        <tr>
                            <th>Reference</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $txn)
                        <tr>
                            <td style="font-size:12px;font-family:monospace;color:var(--muted)">{{ $txn->reference }}</td>
                            <td style="font-weight:600;text-transform:capitalize">{{ str_replace('_',' ',$txn->type) }}</td>
                            <td style="font-weight:700">${{ number_format($txn->amount, 2) }}</td>
                            <td>
                                <span class="zei-badge {{ $txn->status=='approved' ? 'zei-badge-green' : ($txn->status=='pending' ? 'zei-badge-yellow' : 'zei-badge-red') }}">
                                    {{ ucfirst($txn->status) }}
                                </span>
                            </td>
                            <td style="color:var(--muted)">{{ $txn->created_at->format('M d, Y') }}</td>
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
function copyRef(){
    var el=document.getElementById('refLink');
    el.select();
    document.execCommand('copy');
    alert('Referral link copied to clipboard!');
}
</script>
@endsection
