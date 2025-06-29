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
        Schema::create('batch_models', function (Blueprint $table) {
            $table->id();
            $table->string('batch_code');
            $table->string('Grade');
            $table->string('Year');
            $table->foreignId('subject_model_id')->constrained('subject_models')->onDelete('cascade');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batch_models');
    }
};
