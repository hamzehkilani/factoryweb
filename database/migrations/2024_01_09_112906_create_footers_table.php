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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('Facebook_Url')->nullable();
            $table->string('Youtube_Url')->nullable();
            $table->string('Instagram_Url')->nullable();
            $table->string('twitter_Url')->nullable();
            $table->text('desciption');
            $table->string('Factory_name');
            $table->string('Designed_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
