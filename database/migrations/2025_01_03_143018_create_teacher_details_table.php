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
        Schema::create('teacher_details', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('teacher_id')
            ->unsigned();
            $table->foreign('teacher_id')
            ->references('id')
            ->on('teachers')
            ->onDelete('cascade');

            $table->bigInteger('schedule_id')
            ->unsigned();
            $table->foreign('schedule_id')
            ->references('id')
            ->on('schedules')
            ->onDelete('cascade');

            $table->bigInteger('subject_id')
            ->unsigned();
            $table->foreign('subject_id')
            ->references('id')
            ->on('subjects')
            ->onDelete('cascade');

            $table->bigInteger('major_id')
            ->unsigned();
            $table->foreign('major_id')
            ->references('id')
            ->on('majors')
            ->onDelete('cascade');

            $table->bigInteger('course_id')
            ->unsigned();
            $table->foreign('course_id')
            ->references('id')
            ->on('courses')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_details');
    }
};
