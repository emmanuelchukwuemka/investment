<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (DB::connection()->getDriverName() === 'pgsql') {
            DB::statement("ALTER TABLE transactions DROP CONSTRAINT IF EXISTS transactions_type_check");
            DB::statement("ALTER TABLE transactions ADD CONSTRAINT transactions_type_check CHECK (type IN ('deposit','withdrawal','roi','referral_bonus','admin_credit','admin_deduction'))");
        } else {
            DB::statement("ALTER TABLE transactions MODIFY COLUMN type ENUM('deposit','withdrawal','roi','referral_bonus','admin_credit','admin_deduction')");
        }
    }

    public function down(): void
    {
        if (DB::connection()->getDriverName() === 'pgsql') {
            DB::statement("ALTER TABLE transactions DROP CONSTRAINT IF EXISTS transactions_type_check");
            DB::statement("ALTER TABLE transactions ADD CONSTRAINT transactions_type_check CHECK (type IN ('deposit','withdrawal','roi','referral_bonus'))");
        } else {
            DB::statement("ALTER TABLE transactions MODIFY COLUMN type ENUM('deposit','withdrawal','roi','referral_bonus')");
        }
    }
};
