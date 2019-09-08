<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbRepresentantesAutores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('tb_representantes_autores', function (Blueprint $table) {
            $table->increments('id');
            //Chave estrangeira
            $table->integer('ra_processo_id')->unsigned();
            $table->foreign('ra_processo_id')->references('id')->on('tb_processos')->onDelete('cascade');
            //Dados Pessoais
            $table->string('ra_incapaz');
            $table->string('ra_massa'); //Massa Falida
            $table->string('ra_insolvente'); //Insolvente Civil
            $table->string('ra_preso');
            $table->string('ra_espolio'); //Espólio com interesse de Incapaz
            $table->string('ra_condominio');
            $table->string('ra_parte');
            $table->string('ra_ministerio'); //Ministério Público
            $table->string('ra_pessoa'); //Pessoa Física ou Jurídica
            $table->string('ra_sexo');
            $table->bigInteger('ra_cpf'); //CPF/CPNJ
            $table->string('ra_nome');
            $table->string('ra_menor'); //Menor de idade
            $table->string('ra_documento'); //Documento de identificação
            $table->integer('ra_numeroIdentificacao');
            $table->string('ra_emissor'); //Orgão emissor
            $table->date('ra_emissao'); //Data de emissão
            $table->bigInteger('ra_telefone');
            $table->string('ra_email');
            //Endereço
            $table->integer('ra_cep');
            $table->string('ra_estado');
            $table->string('ra_cidade');
            $table->string('ra_bairro');
            $table->string('ra_tipoLogradouro');
            $table->string('ra_logradouro');
            $table->integer('ra_numeroEndereco');
            $table->string('ra_complemento');
            $table->string('ra_tipoEndereco');
            $table->string('ra_referencia');
            $table->string('ra_comprovante'); //O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial?
            //Valor do Pedido
            $table->decimal('ra_valorPedido', 9, 2);
            $table->string('ra_valorLiquido'); //O valor postulado é liquido?
            //Valor da Causa
            $table->decimal('ra_valorCausa', 9, 2);
            $table->string('ra_pretensao'); //A pretensão deduzida versa sobre obrigações vincendas?
            //Dados Complementares
            $table->string('ra_estadoCivil');
            $table->string('ra_profissao');
            $table->string('ra_nacionalidade');
            $table->string('ra_estadoNaturalidade');
            $table->string('ra_cidadeNaturalidade');
            $table->string('ra_pai'); //Nome do Pai
            $table->string('ra_mae'); //Nome do Mãe
            $table->date('ra_nascimento'); //Data de Nascimento
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
        Schema::dropIfExists('tb_representantes_autores');
    }
}
