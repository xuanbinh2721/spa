<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('times', function (Blueprint $table) {
            $table->unique('time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('times', function (Blueprint $table) {
            if (Schema::hasColumn('times', 'time')) {
                Schema::table('times', function (Blueprint $table) {
                    $table->dropColumn('time');
                });
            }
        });
    }
};
