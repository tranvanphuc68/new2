<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_courses', function (Blueprint $table) {
            $table->bigInteger('id_course')->unsigned();
            $table->bigInteger('id_student')->unsigned();
            $table->timestamps();

            $table->foreign('id_course')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('id_student')->references('id')->on('users')->onDelete('cascade');
            $table->primary(['id_course', 'id_student']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_courses');
    }
}
