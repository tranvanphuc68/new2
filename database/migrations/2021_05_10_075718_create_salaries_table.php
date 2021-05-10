<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->bigInteger('id_course')->unsigned();
            $table->bigInteger('id_teacher')->unsigned();
            $table->integer('status');
            $table->timestamps();
            $table->primary(['id_course', 'id_teacher']);

            $table->foreign('id_course')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('id_teacher')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
}
