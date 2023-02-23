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
            $table->date('zodiac_date');
            $table->text('text_work');
            $table->text('text_love');
            $table->text('text_health');
            $table->string('sign', 20); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
