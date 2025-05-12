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
        Schema::create('teacher_models', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_fname');
            $table->string('teacher_lname');
            $table->string('teacher_email');
            $table->string('teacher_phone');
            $table->string('teacher_nic');
            $table->foreignId('subject_model_id')->constrained('subject_models')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_models');
    }
};
