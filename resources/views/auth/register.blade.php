@extends('layouts.app')

@section('title', 'Register | Webull Robin Empresa')

@section('content')
<div class="slider-sub">
    <div class="bg-img"><img src="{{ asset('lassets/images/banner/contact.png') }}" alt="banner"></div>
    <div class="container">
        <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="{{ route('home') }}">Home</a><i class="ph ph-caret-double-right text-white"></i>
            <div class="caption1 text-white">Register</div>
        </div>
        <div class="text-nav">
            <div class="heading3 text-white">Register</div>
        </div>
    </div>
</div>
<div class="form-contact style-one mt-100">
    <div class="container">
        <form action="{{ route('register.post') }}" method="post">
            @csrf
            <div class="text-center" style="text-align: center;"><img src="{{ asset('img/favicon.png') }}" style="width: 40px;"> <b>WEBULL ROBIN EMPRESA</b></div>

            <div class="row">
                <div class="col-md-12" style="margin: 10px;">
                    <label>Full Name</label>
                    <input name="name" id="name" type="text" value="{{ old('name') }}" class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" placeholder="Name*" required>
                    @error('name')<div style="color:red;font-size:13px;margin-top:4px;">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-12" style="margin: 10px;">
                    <label>Email</label>
                    <input name="email" id="mail" type="email" value="{{ old('email') }}" class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" placeholder="E-mail*" required>
                    @error('email')<div style="color:red;font-size:13px;margin-top:4px;">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-4">
                    <label>Phone Number</label>
                    <input name="phone" id="phone" type="text" value="{{ old('phone') }}" class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" placeholder="Phone Number*" required>
                    @error('phone')<div style="color:red;font-size:13px;margin-top:4px;">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-4">
                    <label>Country</label>
                    <select name="country" class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" required>
                        <option value="">Select Country</option>
                        @php
                        $countries = ["China","India","United States","Indonesia","Brazil","Pakistan","Nigeria","Bangladesh","Russia","Japan","Mexico","Philippines","Vietnam","Ethiopia","Egypt","Germany","Iran","Turkey","Democratic Republic of the Congo","Thailand","France","United Kingdom","Italy","Burma","South Africa","South Korea","Colombia","Spain","Ukraine","Tanzania","Kenya","Argentina","Algeria","Poland","Sudan","Uganda","Canada","Iraq","Morocco","Peru","Uzbekistan","Saudi Arabia","Malaysia","Venezuela","Nepal","Afghanistan","Yemen","North Korea","Ghana","Mozambique","Taiwan","Australia","Ivory Coast","Syria","Madagascar","Angola","Cameroon","Sri Lanka","Romania","Burkina Faso","Niger","Kazakhstan","Netherlands","Chile","Malawi","Ecuador","Guatemala","Mali","Cambodia","Senegal","Zambia","Zimbabwe","Chad","South Sudan","Belgium","Cuba","Tunisia","Guinea","Greece","Portugal","Rwanda","Czech Republic","Somalia","Haiti","Benin","Burundi","Bolivia","Hungary","Sweden","Belarus","Dominican Republic","Azerbaijan","Honduras","Austria","United Arab Emirates","Israel","Switzerland","Tajikistan","Bulgaria","Hong Kong (China)","Serbia","Papua New Guinea","Paraguay","Laos","Jordan","El Salvador","Eritrea","Libya","Togo","Sierra Leone","Nicaragua","Kyrgyzstan","Denmark","Finland","Slovakia","Singapore","Turkmenistan","Norway","Lebanon","Costa Rica","Central African Republic","Ireland","Georgia","New Zealand","Republic of the Congo","Palestine","Liberia","Croatia","Oman","Bosnia and Herzegovina","Puerto Rico","Kuwait","Moldov","Mauritania","Panama","Uruguay","Armenia","Lithuania","Albania","Mongolia","Jamaica","Namibia","Lesotho","Qatar","Macedonia","Slovenia","Botswana","Latvia","Gambia","Kosovo","Guinea-Bissau","Gabon","Equatorial Guinea","Trinidad and Tobago","Estonia","Mauritius","Swaziland","Bahrain","Timor-Leste","Djibouti","Cyprus","Fiji","Reunion (France)","Guyana","Comoros","Bhutan","Montenegro","Macau (China)","Solomon Islands","Western Sahara","Luxembourg","Suriname","Cape Verde","Malta","Guadeloupe (France)","Martinique (France)","Brunei","Bahamas","Iceland","Maldives","Belize","Barbados","French Polynesia (France)","Vanuatu","New Caledonia (France)","French Guiana (France)","Mayotte (France)","Samoa","Sao Tom and Principe","Saint Lucia","Guam (USA)","Curacao (Netherlands)","Saint Vincent and the Grenadines","Kiribati","United States Virgin Islands (USA)","Grenada","Tonga","Aruba (Netherlands)","Federated States of Micronesia","Jersey (UK)","Seychelles","Antigua and Barbuda","Isle of Man (UK)","Andorra","Dominica","Bermuda (UK)","Guernsey (UK)","Greenland (Denmark)","Marshall Islands","American Samoa (USA)","Cayman Islands (UK)","Saint Kitts and Nevis","Northern Mariana Islands (USA)","Faroe Islands (Denmark)","Sint Maarten (Netherlands)","Saint Martin (France)","Liechtenstein","Monaco","San Marino","Turks and Caicos Islands (UK)","Gibraltar (UK)","British Virgin Islands (UK)","Aland Islands (Finland)","Caribbean Netherlands (Netherlands)","Palau","Cook Islands (NZ)","Anguilla (UK)","Wallis and Futuna (France)","Tuvalu","Nauru","Saint Barthelemy (France)","Saint Pierre and Miquelon (France)","Montserrat (UK)","Saint Helena, Ascension and Tristan da Cunha (UK)","Svalbard and Jan Mayen (Norway)","Falkland Islands (UK)","Norfolk Island (Australia)","Christmas Island (Australia)","Niue (NZ)","Tokelau (NZ)","Vatican City","Cocos (Keeling) Islands (Australia)","Pitcairn Islands (UK)"];
                        @endphp
                        @foreach($countries as $country)
                            <option value="{{ $country }}" {{ old('country') == $country ? 'selected' : '' }}>{{ $country }}</option>
                        @endforeach
                    </select>
                    @error('country')<div style="color:red;font-size:13px;margin-top:4px;">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-4">
                    <label>Gender</label>
                    <select name="gender" class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" required>
                        <option value="">Select Gender</option>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                    @error('gender')<div style="color:red;font-size:13px;margin-top:4px;">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-6">
                    <label>Password</label>
                    <input name="password" id="password" type="password" class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" placeholder="password*" required>
                    @error('password')<div style="color:red;font-size:13px;margin-top:4px;">{{ $message }}</div>@enderror
                </div>
                <div class="col-md-6">
                    <label>Confirm Password</label>
                    <input name="password_confirmation" type="password" class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" placeholder="Confirm Password*" required>
                </div>

                <div class="col-md-12" style="margin: 10px;">
                    <label>Referral Code</label>
                    <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" type="text" name="referral" value="{{ old('referral', request('ref')) }}">
                    @error('referral')<div style="color:red;font-size:13px;margin-top:4px;">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <p class="u-mb-medium">I hereby confirm *</p>
                            <ol class="u-mb-medium">
                                <li class="u-mb-small"><p>1. This is an online trading platform and all communications will be done electronically. I agree to receive all communications via email.</p></li>
                                <li class="u-mb-small"><p>2. I have read, understood, and agreed to be bound by ALL the Terms and Conditions as set out in the Webull Robin Empresa website and all related platforms, products and services.</p></li>
                                <li class="u-mb-small"><p>3. I am of legal age in the country in which I reside and confirm that all the details given in this form are correct. I will inform Webull Robin Empresa in writing if there are any changes to these details.</p></li>
                                <li class="u-mb-small"><p>4. I confirm that I will trade only in my own name and will not use this account to trade on behalf of another individual.</p></li>
                                <li class="u-mb-small"><p>5. I confirm that I am liable for all costs set out in the Cost Profile published on the website (open to edits). I agree to meet my payment obligations and all other terms applicable to my Account as set out in the Cost Profile.</p></li>
                            </ol>
                            <div class="form-group">
                                <input class="bg-surface" id="checkbox1" name="remember" type="checkbox" required style="width: 10px;">
                                <label for="checkbox1">I confirm</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <input type="submit" class="button-share hover-border-blue bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48" value="Register">
        </form>
        <br>
        <div>Already registered? <a href="{{ route('login') }}">Sign In</a></div>
    </div>
</div>
@endsection
