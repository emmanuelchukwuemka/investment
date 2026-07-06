@extends('layouts.app')
@section('title', 'Create Account | Zenith Edge Investment')
@section('content')
<div class="zei-auth-wrap" style="align-items:flex-start;padding-top:60px;padding-bottom:60px">
    <div class="zei-auth-card" style="max-width:600px">
        <a href="{{ route('home') }}" class="zei-auth-logo">Zenith Edge<span> Investment</span></a>
        <h1 class="zei-auth-title">Create Your Account</h1>
        <p class="zei-auth-sub">Join thousands of investors growing their wealth</p>

        <form action="{{ route('register.post') }}" method="post">
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <div class="zei-fg" style="margin-bottom:0">
                        <label>Full Name</label>
                        <input type="text" name="name" class="zei-inp" placeholder="John Doe" value="{{ old('name') }}" required>
                        @error('name')<div class="zei-err">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="zei-fg" style="margin-bottom:0">
                        <label>Email Address</label>
                        <input type="email" name="email" class="zei-inp" placeholder="you@example.com" value="{{ old('email') }}" required>
                        @error('email')<div class="zei-err">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="zei-fg" style="margin-bottom:0">
                        <label>Phone Number</label>
                        <input type="text" name="phone" class="zei-inp" placeholder="+1 234 567 8900" value="{{ old('phone') }}" required>
                        @error('phone')<div class="zei-err">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="zei-fg" style="margin-bottom:0">
                        <label>Gender</label>
                        <select name="gender" class="zei-sel" required>
                            <option value="">Select Gender</option>
                            <option value="male" {{ old('gender')=='male'?'selected':'' }}>Male</option>
                            <option value="female" {{ old('gender')=='female'?'selected':'' }}>Female</option>
                        </select>
                        @error('gender')<div class="zei-err">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="zei-fg" style="margin-bottom:0">
                        <label>Country</label>
                        <select name="country" class="zei-sel" required>
                            <option value="">Select Country</option>
                            @php $countries=["China","India","United States","Indonesia","Brazil","Pakistan","Nigeria","Bangladesh","Russia","Japan","Mexico","Philippines","Vietnam","Ethiopia","Egypt","Germany","Iran","Turkey","Democratic Republic of the Congo","Thailand","France","United Kingdom","Italy","Burma","South Africa","South Korea","Colombia","Spain","Ukraine","Tanzania","Kenya","Argentina","Algeria","Poland","Sudan","Uganda","Canada","Iraq","Morocco","Peru","Uzbekistan","Saudi Arabia","Malaysia","Venezuela","Nepal","Afghanistan","Yemen","North Korea","Ghana","Mozambique","Taiwan","Australia","Ivory Coast","Syria","Madagascar","Angola","Cameroon","Sri Lanka","Romania","Burkina Faso","Niger","Kazakhstan","Netherlands","Chile","Malawi","Ecuador","Guatemala","Mali","Cambodia","Senegal","Zambia","Zimbabwe","Chad","South Sudan","Belgium","Cuba","Tunisia","Guinea","Greece","Portugal","Rwanda","Czech Republic","Somalia","Haiti","Benin","Burundi","Bolivia","Hungary","Sweden","Belarus","Dominican Republic","Azerbaijan","Honduras","Austria","United Arab Emirates","Israel","Switzerland","Tajikistan","Bulgaria","Hong Kong","Serbia","Papua New Guinea","Paraguay","Laos","Jordan","El Salvador","Eritrea","Libya","Togo","Sierra Leone","Nicaragua","Kyrgyzstan","Denmark","Finland","Slovakia","Singapore","Turkmenistan","Norway","Lebanon","Costa Rica","Central African Republic","Ireland","Georgia","New Zealand","Republic of the Congo","Palestine","Liberia","Croatia","Oman","Bosnia and Herzegovina","Puerto Rico","Kuwait","Moldova","Mauritania","Panama","Uruguay","Armenia","Lithuania","Albania","Mongolia","Jamaica","Namibia","Lesotho","Qatar","Macedonia","Slovenia","Botswana","Latvia","Gambia","Kosovo","Guinea-Bissau","Gabon","Equatorial Guinea","Trinidad and Tobago","Estonia","Mauritius","Swaziland","Bahrain","Timor-Leste","Djibouti","Cyprus","Fiji","Guyana","Comoros","Bhutan","Montenegro","Macau","Solomon Islands","Luxembourg","Suriname","Cape Verde","Malta","Brunei","Bahamas","Iceland","Maldives","Belize","Barbados","Vanuatu","Samoa","Saint Lucia","Grenada","Tonga","Antigua and Barbuda","Dominica","Seychelles","Saint Kitts and Nevis","Liechtenstein","Monaco","San Marino","Palau","Nauru","Tuvalu","Vatican City"]; @endphp
                            @foreach($countries as $c)
                            <option value="{{ $c }}" {{ old('country')==$c?'selected':'' }}>{{ $c }}</option>
                            @endforeach
                        </select>
                        @error('country')<div class="zei-err">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="zei-fg" style="margin-bottom:0">
                        <label>Password</label>
                        <input type="password" name="password" class="zei-inp" placeholder="Min. 8 characters" required>
                        @error('password')<div class="zei-err">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="zei-fg" style="margin-bottom:0">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" class="zei-inp" placeholder="Repeat password" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="zei-fg" style="margin-bottom:0">
                        <label>Referral Code <span style="color:var(--muted);font-weight:400">(optional)</span></label>
                        <input type="text" name="referral" class="zei-inp" placeholder="Enter referral code if you have one" value="{{ old('referral', request('ref')) }}">
                        @error('referral')<div class="zei-err">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="col-12">
                    <div style="background:var(--bg);border-radius:10px;padding:20px;border:1px solid var(--border)">
                        <p style="font-size:13px;font-weight:700;color:var(--navy);margin:0 0 12px">Please confirm the following:</p>
                        <ol style="padding-left:16px;margin:0;font-size:13px;color:var(--muted);line-height:1.8">
                            <li>All communications will be done electronically via email.</li>
                            <li>I have read and agreed to all Terms and Conditions on this platform.</li>
                            <li>I am of legal age in my country of residence.</li>
                            <li>I will trade only in my own name on this account.</li>
                            <li>I am liable for all costs set out in the Cost Profile on the website.</li>
                        </ol>
                        <label style="display:flex;align-items:center;gap:8px;margin-top:14px;font-size:13px;font-weight:600;color:var(--navy);cursor:pointer">
                            <input type="checkbox" name="remember" required style="width:15px;height:15px"> I confirm all the above statements
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="zei-btn zei-btn-green" style="width:100%;justify-content:center;padding:13px;font-size:15px">Create My Account</button>
                </div>
            </div>
        </form>

        <p style="text-align:center;margin-top:20px;font-size:14px;color:var(--muted)">
            Already have an account? <a href="{{ route('login') }}" style="color:var(--navy);font-weight:700">Sign In</a>
        </p>
    </div>
</div>
@endsection
