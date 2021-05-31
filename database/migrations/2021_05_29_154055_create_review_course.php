<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_course', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('course_name');
            $table->float('input');
            $table->float('output');
            $table->float('time');
            $table->float('duration');
            $table->float('tuition', $total = 11);
            $table->text('target');
            $table->string('student');

            $table->string('skill_speaking');
            $table->string('skill_writing');
            $table->string('skill_listening');
            $table->string('skill_reading');
            $table->string('vocabulary');
            $table->string('grammar');
            $table->string('final_test');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_course');
    }
}
