<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PreguntaRespuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta_respuesta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('valor');
            $table->unsignedBigInteger('pregunta_id')->nullable();
            $table->unsignedBigInteger('respuesta_id')->nullable();
        });

        Schema::table('pregunta_respuesta', function (Blueprint $table) {
            $table->foreign('pregunta_id')->references('id')->on('preguntas')->onDelete('set null');
        });

        Schema::table('pregunta_respuesta', function (Blueprint $table) {
            $table->foreign('respuesta_id')->references('id')->on('respuestas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregunta_respuesta');

    }
}
