<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('zodiac', function (Blueprint $table) {
            $table->dropColumn('text_work');
            $table->dropColumn('text_love');
            $table->dropColumn('text_health');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('zodiac', function (Blueprint $table) {
            //
        });
    }
};
