<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbReu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        
        Schema::create('tb_reus', function (Blueprint $table) {
            $table->increments('id');
            //Chave estrangeira
            $table->integer('r_processo_id')->unsigned();
            $table->foreign('r_processo_id')->references('id')->on('tb_processos');
            //Dados Pessoais
            $table->string('r_estrangeiro'); //Estrangeiro e/ou brasileiro residente no exterior?
            $table->string('r_sexo');
            $table->bigInteger('r_cpf'); //CPF/CPNJ
            $table->string('r_nome');
            $table->string('r_expedidor'); //Orgão expedidor
            $table->date('r_emissao'); //Data de emissão
            $table->string('r_email');
            //Endereço
            $table->string('r_incerto'); //Endereço incerto
            $table->integer('r_cep');
            $table->string('r_estado');
            $table->string('r_cidade');
            $table->string('r_bairro');
            $table->string('r_tipoLogradouro');
            $table->string('r_logradouro');
            $table->integer('r_numeroEndereco');
            $table->string('r_complemento');
            $table->string('r_tipoEndereco');
            $table->string('r_referencia');
            $table->string('r_comprovante'); //O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial?
            //Valor do Pedido
            $table->decimal('r_valorPedido', 9, 2);
            $table->string('r_valorLiquido'); //O valor postulado é liquido?
            //Valor da Causa
            $table->decimal('r_valorCausa', 9, 2);
            $table->string('r_pretensao'); //A pretensão deduzida versa sobre obrigações vincendas?
            //Dados Complementares
            $table->string('r_estadoCivil');
            $table->string('r_profissao');
            $table->string('r_nacionalidade');
            $table->string('r_estadoNaturalidade');
            $table->string('r_cidadeNaturalidade');
            $table->string('r_pai'); //Nome do Pai
            $table->string('r_mae'); //Nome do Mãe
            $table->date('r_nascimento'); //Data de Nascimento
            $table->timestamps(); //Hora e data de cadastro
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_reu');
    }
}
