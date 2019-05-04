<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->integer('valor')->nullable()->default(null);
            $table->unsignedBigInteger('pregunta_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('respuestas', function (Blueprint $table) {
            $table->foreign('pregunta_id')->references('id')->on('respuestas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
