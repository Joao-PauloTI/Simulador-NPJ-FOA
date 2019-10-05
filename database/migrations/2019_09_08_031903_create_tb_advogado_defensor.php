<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbAdvogadoDefensor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        
        Schema::create('tb_advogados', function (Blueprint $table) {
            $table->increments('id');
            //Advogado
            $table->string('ad_categoria')->nullable();
            $table->string('ad_nome')->nullable();
            $table->string('ad_estadoOAB')->nullable();
            $table->string('ad_numeroOAB')->nullable();
            $table->string('ad_representa')->nullable();
            $table->string('ad_intimacao')->nullable();
            $table->timestamps(); //Hora e Data de cadastro
        });
        Schema::create('tb_defensor_publico', function (Blueprint $table) {
            $table->increments('id');
            //Advogado / Representante
            $table->string('dp_categoria')->nullable();
            $table->string('dp_nome')->nullable();
            $table->string('dp_matricula')->nullable();
            $table->string('dp_representa')->nullable();
            $table->string('dp_intimacao')->nullable();
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
        Schema::dropIfExists('tb_advogado');
        Schema::dropIfExists('tb_defensor_publico');
    }
}
