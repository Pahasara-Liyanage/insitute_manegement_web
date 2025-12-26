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
        Schema::create('student_models', function (Blueprint $table) {
            $table->id();
             $table->string('student_name');
               $table->string('student_dob');
                $table->string('student_gender');
                 $table->string('student_phone');
            $table->string('student_school');
                $table->string('student_address');
                 $table->foreignId('subject_model_id')->constrained('subject_models')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_models');
    }
};
