<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('carrera_id');
            $table->unsignedInteger('seccionperiodo_id');
            $table->foreign('carrera_id')->references('id')->on('carreras'); 
            $table->foreign('seccionperiodo_id')->references('id')->on('seccionperiodos');
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
        Schema::dropIfExists('matriculas');
    }
}
