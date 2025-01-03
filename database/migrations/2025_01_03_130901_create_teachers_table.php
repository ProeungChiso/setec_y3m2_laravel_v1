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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_code')
            ->unique();
            $table->string('teacher_name', 150);
            $table->date('teacher_dob');
            $table->string('teacher_email');
            $table->string('teacher_phone');
            $table->string('teacher_address')
            ->nullable();
            $table->binary('teacher_img');

            $table->bigInteger('gender_id')
            ->unsigned();
            $table->foreign('gender_id')
            ->references('id')
            ->on('genders')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
