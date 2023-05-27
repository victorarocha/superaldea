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
        Schema::create('home_person', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_id')->references('id')->on('homes')->cascadeOnDelete();
            $table->foreignId('person_id')->references('id')->on('people')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_person');
    }
};
