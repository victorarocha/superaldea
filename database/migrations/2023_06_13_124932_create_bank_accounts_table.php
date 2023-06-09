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
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id()->startingValue(1000);
            $table->foreignId('person_id')->constrained();
            $table->string('account_number');
            $table->string('name');
            $table->foreignId('bank_id')->constrained();
            $table->string('reference')->nullable();
            $table->string('validation_message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_accounts');
    }
};
