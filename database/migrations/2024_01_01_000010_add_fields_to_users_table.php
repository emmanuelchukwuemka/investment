<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('email');
            $table->string('country')->nullable()->after('phone');
            $table->enum('role', ['user', 'admin'])->default('user')->after('country');
            $table->decimal('balance', 15, 2)->default(0)->after('role');
            $table->string('referral_code', 10)->unique()->nullable()->after('balance');
            $table->unsignedBigInteger('referred_by')->nullable()->after('referral_code');
            $table->foreign('referred_by')->references('id')->on('users')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['referred_by']);
            $table->dropColumn(['phone', 'country', 'role', 'balance', 'referral_code', 'referred_by']);
        });
    }
};
