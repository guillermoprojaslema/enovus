<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAttributesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('rut')->unique()->after('email');
            $table->boolean('estado')->after('email');
            $table->string('perfil')->after('email');
            $table->unsignedBigInteger('cargo_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();

        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('cargo_id')->references('id')->on('cargos')->onDelete('set null');

        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['rut', 'estado', 'perfil', 'cargo_id']);
        });
    }
}
