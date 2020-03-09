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
        Schema::create('tb_processos', function (Blueprint $table) {
            $table->increments('id');
            //Numeração do Processo
            $table->string('p_numeracaoProcesso')->nullable();
            //GRERJ
            $table->string('p_grerjMotivo')->nullable(); //PossuiGrerj = não -> Motivo
            $table->integer('p_grerjNumero')->nullable(); //PossuiGrerj = sim -> Número
            //Processo Principal
            $table->string('p_dependencia')->nullable(); //Distribuição por Dependência
            //Dados do Processo
            $table->string('p_prioridadeDeficiente')->nullable(); //Prioridade p/ deficiente físico ou mental
            $table->string('p_tutela')->nullable(); //Tutela de Urgência
            $table->string('p_prioridadePortador')->nullable(); //Prioridade p/ portador de doença grave
            $table->string('p_gratuidade')->nullable(); //Gratuidade de Justiça
            $table->string('p_exame')->nullable(); //Exame Técnico
            $table->string('p_comarca')->nullable();
            $table->string('p_competencia')->nullable();
            $table->string('p_conciliacao')->nullable(); //Autor opta pela realização de audiência de conciliação ou de mediação?
            $table->string('p_classe')->nullable();
            $table->string('p_distribuicao')->nullable();
            $table->string('p_valor')->nullable(); //Valor da Causa
            $table->longText('p_veracidade')->nullable(); //Declaração de Veracidade
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
