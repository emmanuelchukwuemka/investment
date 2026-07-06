<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call(InvestmentPlanSeeder::class);

        // Admin account
        User::updateOrCreate(['email' => 'lenorawiri053@gmail.com'], [
            'name'     => 'Admin',
            'password' => Hash::make('Lenora12@'),
            'role'     => 'admin',
            'country'  => 'United States',
            'balance'  => 0,
        ]);

        // Demo user account
        User::updateOrCreate(['email' => 'demo@zenithedgeinvestment.com'], [
            'name'     => 'Demo User',
            'password' => Hash::make('M4MML9hcTp9p%#@'),
            'role'     => 'user',
            'country'  => 'United States',
            'balance'  => 1500.00,
        ]);
    }
}
