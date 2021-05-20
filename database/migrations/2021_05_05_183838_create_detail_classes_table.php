<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_classes', function (Blueprint $table) {
            $table->bigInteger('id_course')->unsigned();
            $table->integer('number');
            $table->string('content');
            $table->date('date');
            $table->timestamps();

            $table->foreign('id_course')->references('id')->on('courses')->onDelete('cascade');
            $table->primary(['id_course', 'number']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_classes');
    }
}