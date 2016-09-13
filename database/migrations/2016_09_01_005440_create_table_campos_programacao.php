<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCamposProgramacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campos_programacao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('help');
            $table->string('tipo');
            $table->enum('obrigatorio',['S','N']);
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
        Schema::drop('campos_programacao');
    }
}
