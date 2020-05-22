<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetidorequiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competidorequipos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('matricula_id');
            $table->unsignedInteger('equipo_id');
            $table->foreign('matricula_id')->references('id')->on('matriculas');
            $table->foreign('equipo_id')->references('id')->on('equipos');
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
        Schema::dropIfExists('competidorequipos');
    }
}
