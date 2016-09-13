<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCamposProgramacaoValor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campos_programacao_valor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('evento')->unsigned();
            $table->integer('usuario')->unsigned();
            $table->integer('campo')->unsigned();
            $table->integer('programacao')->unsigned();
            $table->text('valor');
            $table->timestamps();
            $table->foreign('evento')->references('id')->on('eventos');
            $table->foreign('campo')->references('id')->on('campos_eventos');
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
        Schema::drop('campos_programacao_valor');
    }
}
