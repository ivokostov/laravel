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
        Schema::create('zodiac_texts', function (Blueprint $table) {
            $table->id();
            $table->text('meta_value');
            $table->string('meta_key', 20); 
            $table->integer('zodiac_ic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zodiac_texts');
    }
};
