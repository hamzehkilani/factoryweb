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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('Factory_Phone');
            $table->string('Start_Working_Days')->nullable();
            $table->string('End_Working_Days')->nullable();
            $table->string('Start_Working_Hours')->nullable();
            $table->string('End_Working_Hours')->nullable();
            $table->string('Factory_Email');
            $table->string('City');
            $table->string('Street_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contucts');
    }
};
