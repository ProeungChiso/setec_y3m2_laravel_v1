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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_code')
            ->unique();
            $table->string('course_name',100);
            $table->decimal('course_price',10,2);
            $table->integer('duration');
            $table->text('course_desc');
            $table->timestamps();

            $table->unsignedBigInteger('major_id');
            $table->foreign('major_id')
            ->references('id')
            ->on('majors')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
