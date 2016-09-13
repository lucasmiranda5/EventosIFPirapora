<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProgramacaoUsuari extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programacao_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario')->unsigned();
            $table->integer('evento')->unsigned();
            $table->integer('programacao')->unsigned();
            $table->enum('admin',['S','N']);
            $table->enum('pago',['S','N']);
            $table->enum('presenca',['S','N']);
            $table->timestamps();
            $table->foreign('evento')->references('id')->on('eventos');
            $table->foreign('usuario')->references('id')->on('usuarios');
            $table->foreign('programacao')->references('id')->on('programacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('programacao_usuario');
    }
}
