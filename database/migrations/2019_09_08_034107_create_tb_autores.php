<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbAutores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('tb_autores', function (Blueprint $table) {
            $table->increments('id');
            //Chave estrangeira
            //$table->integer('a_processo_id')->unsigned();
            //$table->foreign('a_processo_id')->references('id')->on('tb_processos')->onDelete('cascade');
            //Dados Pessoais
            $table->string('a_incapaz');
            $table->string('a_massa'); //Massa Falida
            $table->string('a_insolvente'); //Insolvente Civil
            $table->string('a_preso');
            $table->string('a_espolio'); //Espólio com interesse de Incapaz
            $table->string('a_condominio');
            $table->string('a_ministerio'); //Ministério Público
            $table->string('a_pessoa'); //Pessoa Física ou Jurídica
            $table->string('a_estrangeiro'); //Estrangeiro e/ou brasileiro residente no exterior?
            $table->string('a_sexo');
            $table->string('a_cpf'); //CPF/CPNJ
            $table->string('a_nome');
            $table->string('a_menor'); //Menor de idade
            $table->string('a_documento'); //Documento de identificação
            $table->string('a_numeroIdentificacao');
            $table->string('a_expedidor'); //Orgão expedidor
            $table->string('a_emissao'); //Data de emissão
            $table->string('a_telefone');
            $table->string('a_email');
            //Advogado Representante
            $table->string('a_representa');
            $table->string('a_intimacao');
            //Endereço
            $table->string('a_cep');
            $table->string('a_estado');
            $table->string('a_cidade');
            $table->string('a_bairro');
            $table->string('a_tipoLogradouro');
            $table->string('a_logradouro');
            $table->string('a_numeroEndereco');
            $table->string('a_complemento');
            $table->string('a_tipoEndereco');
            $table->longText('a_referencia');
            $table->string('a_comprovante'); //O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial?
            //Valor do Pedido
            $table->string('a_valorPedido');
            $table->string('a_valorLiquido'); //O valor postulado é liquido?
            //Valor da Causa
            $table->string('a_valorCausa');
            $table->string('a_pretensao'); //A pretensão deduzida versa sobre obrigações vincendas?
            //Dados Complementares
            $table->string('a_estadoCivil');
            $table->string('a_profissao');
            $table->string('a_nacionalidade');
            $table->string('a_estadoNaturalidade');
            $table->string('a_cidadeNaturalidade');
            $table->string('a_pai'); //Nome do Pai
            $table->string('a_mae'); //Nome do Mãe
            $table->string('a_nascimento'); //Data de Nascimento
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
        Schema::dropIfExists('tb_autores');
    }
}
