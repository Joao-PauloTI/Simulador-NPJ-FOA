<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbAdvogadoRepresentante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        
        Schema::create('tb_advogado_representante', function (Blueprint $table) {
            $table->increments('id');
            //Advogado / Representante
            $table->string('ar_advogadoRepresentante')->nullable(); //select box de advogado e representante
            $table->string('ar_nome')->nullable();
            $table->string('ar_estadoOAB')->nullable();
            $table->string('ar_numeroOAB')->nullable();
            $table->string('ar_matriculaRepresentante')->nullable();
            $table->string('ar_representa')->nullable();
            $table->string('ar_intimacao')->nullable();
            $table->timestamps(); //Hora e Data de cadastro
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_advogado_representante');
    }
}
