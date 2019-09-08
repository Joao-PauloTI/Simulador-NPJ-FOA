<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbProcessos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('tb_processos', function (Blueprint $table){
            $table->increments('id');
            //GRERJ
            $table->string('p_grerjMotivo'); //PossuiGrerj = não -> Motivo
            $table->integer('p_grerjNumero'); //PossuiGrerj = sim -> Número
            //Processo Principal
            $table->string('p_dependencia'); //Distribuição por Dependência
            //Dados do Processo
            $table->string('p_prioridadeDeficiente'); //Prioridade p/ deficiente físico ou mental
            $table->string('p_tutela'); //Tutela de Urgência
            $table->string('p_prioridadePortador'); //Prioridade p/ portador de doença grave
            $table->string('p_gratuidade'); //Gratuidade de Justiça
            $table->string('p_exame'); //Exame Técnico
            $table->string('p_comarca');
            $table->string('p_competencia');
            $table->string('p_classe');
            $table->string('p_distribuicao');
            $table->decimal('p_valor', 9, 2); //Valor da Causa
            $table->string('p_veracidade'); //Declaração de Veracidade
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
        Schema::dropIfExists('tb_Processos');
    }
}
