<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesafiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desafios', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('disciplina_id');
            $table->foreign('disciplina_id')
                ->references('id')
                ->on('disciplinas');
            $table->string('invitado', 250);
            $table->string('retador', 250);
            $table->integer('puntaje');
            $table->string('ganador', 250);
            $table->integer('parent_id');
            $table->string('fase', 250);
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
        Schema::dropIfExists('desafios');
    }
}
