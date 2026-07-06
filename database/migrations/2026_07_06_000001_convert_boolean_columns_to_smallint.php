<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        if (DB::connection()->getDriverName() !== 'pgsql') {
            return;
        }

        DB::statement('ALTER TABLE investment_plans ALTER COLUMN is_active TYPE SMALLINT USING is_active::int');

        if (DB::getSchemaBuilder()->hasTable('contact_messages')) {
            DB::statement('ALTER TABLE contact_messages ALTER COLUMN "read" TYPE SMALLINT USING "read"::int');
        }
    }

    public function down(): void
    {
        if (DB::connection()->getDriverName() !== 'pgsql') {
            return;
        }

        DB::statement('ALTER TABLE investment_plans ALTER COLUMN is_active TYPE BOOLEAN USING is_active::boolean');

        if (DB::getSchemaBuilder()->hasTable('contact_messages')) {
            DB::statement('ALTER TABLE contact_messages ALTER COLUMN "read" TYPE BOOLEAN USING "read"::boolean');
        }
    }
};
