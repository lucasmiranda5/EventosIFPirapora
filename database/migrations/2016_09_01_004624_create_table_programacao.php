<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProgramacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programacao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('categoria')->unsigned();
            $table->integer('evento')->unsigned();
            $table->date('data_inicio');
            $table->date('data_termino');
            $table->time('hora_inicio');
            $table->time('hora_fim');
            $table->text('descricao');
            $table->float('valor');
            $table->date('data_limite');
            $table->integer('quantidade_pessoas');
            $table->string('facilitador');
            $table->enum('certificado',['S','N']);
            $table->integer('quant_horas');
            $table->text('bio_facilitador');
            $table->foreign('categoria')->references('id')->on('categoria_programacao');
            $table->foreign('evento')->references('id')->on('eventos');

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
        Schema::drop('programacao');
    }
}
