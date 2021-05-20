<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->bigInteger('id_course')->unsigned();
            $table->bigInteger('id_student')->unsigned();
            $table->integer('num');
            $table->integer('status')->unsigned();
            $table->timestamps();

            $table->foreign(['id_course','num'])->references(['id_course', 'number'])->on('detail_classes')->onDelete('cascade');
            $table->foreign(['id_course','id_student'])->references(['id_course', 'id_student'])->on('students_courses')->onDelete('cascade');
            $table->primary(['id_course', 'id_student', 'num']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance');
    }
}