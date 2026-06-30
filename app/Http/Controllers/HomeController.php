<?php

namespace App\Http\Controllers;

use App\Models\InvestmentPlan;

class HomeController extends Controller
{
    public function index()
    {
        $plans = InvestmentPlan::active()->orderBy('min_amount')->get();
        return view('home', compact('plans'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sendContact(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        return back()->with('success', 'Your message has been received. We will respond within 24 hours.');
    }
}
