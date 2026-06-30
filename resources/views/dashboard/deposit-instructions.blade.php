@extends('layouts.app')

@section('title', 'Deposit Instructions | {{ config("app.name") }}')

@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32">
            <a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a>
            <i class="ph ph-caret-double-right text-white"></i>
            <a class="hover-underline caption1 text-white" href="{{ route('dashboard') }}">Dashboard</a>
            <i class="ph ph-caret-double-right text-white"></i>
            <div class="caption1 text-white">Deposit Instructions</div>
        </div>
        <div class="text-nav">
            <div class="heading3 text-white">Complete Your Deposit</div>
        </div>
    </div>
</div>

<div class="form-contact style-one mt-60 mb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">

                {{-- Success / Error --}}
                @if(session('success'))
                    <div style="background:#d4edda;color:#155724;padding:14px 20px;border-radius:10px;margin-bottom:24px;">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Step indicator --}}
                <div style="display:flex;gap:0;margin-bottom:32px;">
                    <div style="flex:1;text-align:center;padding:10px;background:#072b5b;color:#fff;border-radius:8px 0 0 8px;font-size:13px;font-weight:600;">
                        &#10003; Step 1: Request Created
                    </div>
                    <div style="flex:1;text-align:center;padding:10px;background:{{ $transaction->proof_path ? '#28a745' : '#1a73e8' }};color:#fff;font-size:13px;font-weight:600;">
                        {{ $transaction->proof_path ? '&#10003; Step 2: Proof Uploaded' : 'Step 2: Send Payment' }}
                    </div>
                    <div style="flex:1;text-align:center;padding:10px;background:#e0e0e0;color:#555;border-radius:0 8px 8px 0;font-size:13px;font-weight:600;">
                        Step 3: Admin Approval
                    </div>
                </div>

                {{-- Reference card --}}
                <div style="background:#f8f9fa;border:1px solid #e0e0e0;border-radius:12px;padding:20px;margin-bottom:24px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;">
                    <div>
                        <div style="font-size:12px;color:#888;">Transaction Reference</div>
                        <div style="font-size:15px;font-weight:700;color:#072b5b;font-family:monospace;">{{ $transaction->reference }}</div>
                    </div>
                    <div>
                        <div style="font-size:12px;color:#888;">Amount to Send</div>
                        <div style="font-size:22px;font-weight:700;color:#1a73e8;">${{ number_format($transaction->amount, 2) }}</div>
                    </div>
                    <div>
                        <div style="font-size:12px;color:#888;">Status</div>
                        <span style="padding:4px 14px;border-radius:20px;font-size:12px;font-weight:600;background:#fff3cd;color:#856404;">Pending</span>
                    </div>
                </div>

                {{-- Payment details --}}
                <div style="background:#fff;border:1px solid #e0e0e0;border-radius:12px;padding:28px;margin-bottom:24px;">
                    <div style="font-size:16px;font-weight:700;color:#072b5b;margin-bottom:20px;">
                        Payment Details — {{ $paymentInfo['label'] }}
                    </div>

                    @if($transaction->payment_method === 'bank')
                        {{-- Bank Transfer --}}
                        <div style="display:grid;gap:14px;">
                            @foreach([
                                'Bank Name'      => $paymentInfo['bank_name'],
                                'Account Name'   => $paymentInfo['account_name'],
                                'Account Number' => $paymentInfo['account_number'],
                                'Routing Number' => $paymentInfo['routing_number'],
                                'SWIFT / BIC'    => $paymentInfo['swift_code'],
                                'Country'        => $paymentInfo['country'],
                            ] as $label => $value)
                            @if($value)
                            <div style="display:flex;justify-content:space-between;align-items:center;padding:10px 16px;background:#f8f9fa;border-radius:8px;">
                                <span style="font-size:13px;color:#666;">{{ $label }}</span>
                                <div style="display:flex;align-items:center;gap:10px;">
                                    <span style="font-size:14px;font-weight:600;color:#072b5b;font-family:monospace;">{{ $value }}</span>
                                    <button onclick="copyText('{{ $value }}')" style="background:#072b5b;color:#fff;border:none;padding:4px 10px;border-radius:5px;cursor:pointer;font-size:11px;">Copy</button>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div style="margin-top:16px;padding:12px 16px;background:#fff3cd;border-radius:8px;font-size:13px;color:#856404;">
                            <strong>Important:</strong> Include your reference number <strong>{{ $transaction->reference }}</strong> in the transfer description/memo.
                        </div>
                    @else
                        {{-- Crypto --}}
                        <div style="text-align:center;margin-bottom:20px;">
                            <div style="font-size:13px;color:#888;margin-bottom:8px;">Send exactly</div>
                            <div style="font-size:28px;font-weight:700;color:#1a73e8;">${{ number_format($transaction->amount, 2) }}</div>
                            <div style="font-size:13px;color:#888;margin-top:4px;">worth of {{ $paymentInfo['label'] }} via {{ $paymentInfo['network'] }}</div>
                        </div>

                        @if($paymentInfo['address'])
                        <div style="background:#f8f9fa;border:2px dashed #1a73e8;border-radius:10px;padding:20px;text-align:center;">
                            <div style="font-size:12px;color:#888;margin-bottom:8px;">Wallet Address</div>
                            <div id="walletAddr" style="font-size:14px;font-weight:700;color:#072b5b;font-family:monospace;word-break:break-all;margin-bottom:12px;">{{ $paymentInfo['address'] }}</div>
                            <button onclick="copyText('{{ $paymentInfo['address'] }}')" style="background:#072b5b;color:#fff;border:none;padding:8px 20px;border-radius:8px;cursor:pointer;font-size:13px;">&#128203; Copy Address</button>
                        </div>
                        <div style="margin-top:16px;padding:12px 16px;background:#f8d7da;border-radius:8px;font-size:13px;color:#721c24;">
                            <strong>Warning:</strong> Send only <strong>{{ $paymentInfo['label'] }}</strong> on the <strong>{{ $paymentInfo['network'] }}</strong> to this address. Sending the wrong coin will result in permanent loss.
                        </div>
                        @else
                        <div style="padding:16px;background:#f8d7da;border-radius:8px;color:#721c24;font-size:13px;text-align:center;">
                            Wallet address not configured yet. Please contact support.
                        </div>
                        @endif
                    @endif
                </div>

                {{-- Proof upload --}}
                <div style="background:#fff;border:1px solid #e0e0e0;border-radius:12px;padding:28px;margin-bottom:24px;">
                    <div style="font-size:16px;font-weight:700;color:#072b5b;margin-bottom:8px;">Upload Payment Proof</div>
                    <div style="font-size:13px;color:#888;margin-bottom:20px;">After sending payment, upload a screenshot or PDF of your transaction receipt to speed up approval.</div>

                    @if($transaction->proof_path)
                        <div style="padding:12px 16px;background:#d4edda;border-radius:8px;color:#155724;font-size:13px;margin-bottom:16px;">
                            &#10003; Proof already uploaded. You can replace it below if needed.
                        </div>
                    @endif

                    <form action="{{ route('dashboard.deposit.proof', $transaction) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if($errors->any())
                            <div style="padding:12px 16px;background:#f8d7da;border-radius:8px;color:#721c24;font-size:13px;margin-bottom:16px;">
                                {{ $errors->first() }}
                            </div>
                        @endif
                        <div style="border:2px dashed #ddd;border-radius:10px;padding:24px;text-align:center;">
                            <input type="file" name="proof" id="proofFile" accept=".jpg,.jpeg,.png,.pdf" style="display:none;" onchange="showFileName(this)">
                            <label for="proofFile" style="cursor:pointer;">
                                <div style="font-size:32px;">&#128247;</div>
                                <div style="font-size:14px;color:#072b5b;font-weight:600;margin-top:8px;" id="fileLabel">Click to select file</div>
                                <div style="font-size:12px;color:#aaa;margin-top:4px;">JPG, PNG or PDF — max 5MB</div>
                            </label>
                        </div>
                        <button type="submit" style="width:100%;background:#072b5b;color:#fff;border:none;padding:12px;border-radius:8px;cursor:pointer;font-size:14px;font-weight:600;margin-top:16px;">
                            Upload Proof
                        </button>
                    </form>
                </div>

                <div style="text-align:center;">
                    <a href="{{ route('dashboard') }}" style="color:#1a73e8;font-size:13px;text-decoration:none;">&#8592; Back to Dashboard</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
function copyText(text) {
    navigator.clipboard.writeText(text).then(function() {
        alert('Copied to clipboard!');
    });
}
function showFileName(input) {
    if (input.files && input.files[0]) {
        document.getElementById('fileLabel').textContent = input.files[0].name;
    }
}
</script>
@endsection
