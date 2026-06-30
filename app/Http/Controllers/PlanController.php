<?php

namespace App\Http\Controllers;

use App\Models\InvestmentPlan;

class PlanController extends Controller
{
    public function index()
    {
        $plans = InvestmentPlan::active()->orderBy('min_amount')->get();
        return view('plans.index', compact('plans'));
    }
}
