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

        // Demo admin account
        User::firstOrCreate(['email' => 'admin@nexvaultcapital.com'], [
            'name'     => 'Admin',
            'email'    => 'admin@nexvaultcapital.com',
            'password' => Hash::make('password'),
            'role'     => 'admin',
            'country'  => 'United States',
            'balance'  => 0,
        ]);

        // Demo user account
        User::firstOrCreate(['email' => 'demo@nexvaultcapital.com'], [
            'name'     => 'Demo User',
            'email'    => 'demo@nexvaultcapital.com',
            'password' => Hash::make('password'),
            'role'     => 'user',
            'country'  => 'United States',
            'balance'  => 1500.00,
        ]);
    }
}
