@extends('layouts.app')
@section('title', 'Deposit Instructions | Zenith Edge Investment')
@section('content')
<div class="zei-dash">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div style="margin-bottom:28px">
                    <h1 style="font-size:1.5rem;font-weight:900;color:var(--navy);margin:0 0 4px">Complete Your Deposit</h1>
                    <p style="color:var(--muted);font-size:14px;margin:0">Follow the steps below to finalize your payment.</p>
                </div>
                <div style="display:flex;gap:0;margin-bottom:28px;border-radius:10px;overflow:hidden;border:1px solid var(--border)">
                    <div style="flex:1;text-align:center;padding:12px 8px;background:var(--navy);color:#fff;font-size:13px;font-weight:600">Step 1: Created</div>
                    <div style="flex:1;text-align:center;padding:12px 8px;background:var(--blue);color:#fff;font-size:13px;font-weight:600">Step 2: Send Payment</div>
                    <div style="flex:1;text-align:center;padding:12px 8px;background:var(--bg);color:var(--muted);font-size:13px;font-weight:600">Step 3: Approval</div>
                </div>
                <div class="zei-dash-panel mb-4">
                    <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px">
                        <div><div style="font-size:12px;color:var(--muted)">Reference</div><div style="font-size:14px;font-weight:700;font-family:monospace">{{ $transaction->reference }}</div></div>
                        <div><div style="font-size:12px;color:var(--muted)">Amount</div><div style="font-size:1.8rem;font-weight:900;color:var(--navy)">${{ number_format($transaction->amount, 2) }}</div></div>
                        <div><span class="zei-badge zei-badge-yellow">Pending</span></div>
                    </div>
                </div>
                <div class="zei-dash-panel mb-4">
                    <div class="zei-panel-title">Payment Details</div>
                    @if($transaction->payment_method === 'bank')
                        <div class="d-flex flex-column gap-2">
                            @php $fields = ['Bank Name'=>$paymentInfo['bank_name']??'','Account Name'=>$paymentInfo['account_name']??'','Account No'=>$paymentInfo['account_number']??'','Routing No'=>$paymentInfo['routing_number']??'']; @endphp
                            @foreach($fields as $label => $val)
                            @if($val)
                            <div style="display:flex;justify-content:space-between;padding:10px 14px;background:var(--bg);border-radius:8px;flex-wrap:wrap;gap:8px">
                                <span style="font-size:13px;color:var(--muted)">{{ $label }}</span>
                                <div style="display:flex;align-items:center;gap:8px">
                                    <span style="font-size:14px;font-weight:700;font-family:monospace">{{ $val }}</span>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div style="margin-top:12px;padding:12px 16px;background:#fef3c7;border-radius:8px;font-size:13px;color:#92400e">Include reference <strong>{{ $transaction->reference }}</strong> in transfer memo.</div>
                    @else
                        <div style="text-align:center;margin-bottom:16px">
                            <div style="font-size:1.8rem;font-weight:900;color:var(--navy)">${{ number_format($transaction->amount, 2) }}</div>
                            <div style="font-size:13px;color:var(--muted)">worth of {{ $paymentInfo['label'] }}</div>
                        </div>
                        @if(!empty($paymentInfo['address']))
                        <div style="background:var(--bg);border:2px dashed var(--blue);border-radius:12px;padding:24px;text-align:center">
                            <div style="font-size:12px;color:var(--muted);margin-bottom:8px">Wallet Address</div>
                            <div style="font-size:13px;font-weight:700;font-family:monospace;word-break:break-all;margin-bottom:14px">{{ $paymentInfo['address'] }}</div>
                        </div>
                        <div style="margin-top:12px;padding:12px 16px;background:#fee2e2;border-radius:8px;font-size:13px;color:#991b1b">Send only <strong>{{ $paymentInfo['label'] }}</strong>. Sending the wrong coin will result in permanent loss.</div>
                        @endif
                    @endif
                </div>
                <div class="zei-dash-panel mb-4">
                    <div class="zei-panel-title">Upload Payment Proof</div>
                    @if($transaction->proof_path)
                    <div style="padding:12px;background:#d1fae5;border-radius:8px;color:#065f46;font-size:13px;margin-bottom:16px">Proof already uploaded.</div>
                    @endif
                    <form action="{{ route('dashboard.deposit.proof', $transaction) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div style="border:2px dashed var(--border);border-radius:10px;padding:28px;text-align:center">
                            <input type="file" name="proof" id="pFile" accept=".jpg,.jpeg,.png,.pdf" style="display:none">
                            <label for="pFile" style="cursor:pointer;display:block">
                                <div style="font-size:2.5rem">&#128247;</div>
                                <div style="font-size:14px;color:var(--navy);font-weight:600">Click to select file</div>
                                <div style="font-size:12px;color:var(--muted)">JPG, PNG or PDF &mdash; max 5MB</div>
                            </label>
                        </div>
                        <button type="submit" class="zei-btn zei-btn-green" style="width:100%;justify-content:center;padding:13px;margin-top:16px">Upload Proof</button>
                    </form>
                </div>
                <div style="text-align:center"><a href="{{ route('dashboard') }}" style="color:var(--blue);font-size:13px;font-weight:600">&#8592; Back to Dashboard</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
