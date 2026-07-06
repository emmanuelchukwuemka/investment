<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()     { return view('pages.about'); }
    public function mission()   { return view('pages.mission'); }
    public function values()    { return view('pages.values'); }
    public function investors() { return view('pages.investors'); }
    public function faq()       { return view('pages.faq'); }
    public function rules()     { return view('pages.rules'); }
    public function imprint()   { return view('pages.imprint'); }
    public function terms()     { return view('pages.terms'); }
    public function gold()      { return view('pages.gold'); }
    public function cryptocurrency() { return view('pages.cryptocurrency'); }
    public function stocks()    { return view('pages.stocks'); }
    public function cfds()      { return view('pages.cfds'); }
    public function oilGas()    { return view('pages.oil-gas'); }
    public function forex()     { return view('pages.forex'); }
    public function loan()      { return view('pages.loan'); }
    public function realEstate() { return view('pages.real-estate'); }
    public function realEstateApply() { return view('pages.real-estate-apply-now'); }

    public function realEstateApplyStore(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:20',
            'message' => 'required|string|max:2000',
        ]);

        return back()->with('success', 'Your real estate application has been received. We will contact you within 48 hours.');
    }

    public function passwordReset() { return view('auth.password-reset'); }
}
