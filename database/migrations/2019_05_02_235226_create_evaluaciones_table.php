<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->unsignedBigInteger('evaluador_id')->nullable();
            $table->unsignedBigInteger('evaluado_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('evaluaciones', function (Blueprint $table) {
            $table->foreign('evaluador_id')->references('id')->on('users')->onDelete('set null');
        });

        Schema::table('evaluaciones', function (Blueprint $table) {
            $table->foreign('evaluado_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluaciones');
    }
}
