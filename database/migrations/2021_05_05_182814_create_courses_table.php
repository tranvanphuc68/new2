<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('id_teacher')->unsigned()->nullable();
            $table->string('description');
            $table->string('timetable');
            $table->integer('max_students');
            $table->integer('sum_time');
            $table->integer('lessons');
            $table->string('link')->nullable();
            $table->double('fee',9,0);
            $table->double('salary',9,0);
            $table->integer('status_salary')->default('0');
            $table->integer('status')->default('1');
            $table->timestamps();
            
            $table->foreign('id_teacher')->references('id')->on('users')->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}