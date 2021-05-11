<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->bigInteger('id_course')->unsigned();
            $table->bigInteger('id_student')->unsigned();
            $table->string('content');
            $table->timestamps();
            $table->primary(['id_course', 'id_student']);

            $table->foreign('id_course')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('id_student')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_teachers');
    }
}
