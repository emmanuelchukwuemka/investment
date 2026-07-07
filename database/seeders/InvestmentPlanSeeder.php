<?php

namespace Database\Seeders;

use App\Models\InvestmentPlan;
use Illuminate\Database\Seeder;

class InvestmentPlanSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            [
                'name'         => 'Starter',
                'description'  => 'Access to Crypto & Forex markets with weekly reports and email support.',
                'min_amount'   => 500,
                'max_amount'   => 4999,
                'roi_percent'  => 5.00,
                'duration_days'=> 30,
                'icon'         => 'fa-seedling',
                'is_active'    => 1,
            ],
            [
                'name'         => 'Growth',
                'description'  => 'Full market access with dedicated account manager and priority 24/7 support.',
                'min_amount'   => 5000,
                'max_amount'   => 49999,
                'roi_percent'  => 10.00,
                'duration_days'=> 60,
                'icon'         => 'fa-chart-line',
                'is_active'    => 1,
            ],
            [
                'name'         => 'Elite',
                'description'  => 'VIP access to all asset classes with personal wealth advisor and custom strategy.',
                'min_amount'   => 50000,
                'max_amount'   => null,
                'roi_percent'  => 18.00,
                'duration_days'=> 90,
                'icon'         => 'fa-crown',
                'is_active'    => 1,
            ],
        ];

        foreach ($plans as $plan) {
            InvestmentPlan::firstOrCreate(['name' => $plan['name']], $plan);
        }
    }
}
