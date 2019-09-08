<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbRepresentantesReu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('tb_representantes_reu', function (Blueprint $table) {
            $table->increments('id');
            //Chave estrangeira
            $table->integer('rr_processo_id')->unsigned();
            $table->foreign('rr_processo_id')->references('id')->on('tb_processos')->onDelete('cascade');
            //Dados Pessoais
            $table->string('rr_parte');
            $table->string('rr_pessoa'); //Pessoa Física ou Jurídica
            $table->string('rr_sexo');
            $table->bigInteger('rr_cpf'); //CPF/CPNJ
            $table->string('rr_nome');
            $table->string('rr_menor'); //Menor de idade
            $table->string('rr_documento'); //Documento de identificação
            $table->integer('rr_numeroIdentificacao');
            $table->string('rr_emissor'); //Orgão emissor
            $table->date('rr_emissao'); //Data de emissão
            $table->bigInteger('rr_telefone');
            $table->string('rr_email');
            //Endereço
            $table->integer('rr_cep');
            $table->string('rr_estado');
            $table->string('rr_cidade');
            $table->string('rr_bairro');
            $table->string('rr_tipoLogradouro');
            $table->string('rr_logradouro');
            $table->integer('rr_numeroEndereco');
            $table->string('rr_complemento');
            $table->string('rr_tipoEndereco');
            $table->string('rr_referencia');
            $table->string('rr_comprovante'); //O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial?
            //Valor do Pedido
            $table->decimal('rr_valorPedido', 9, 2);
            $table->string('rr_valorLiquido'); //O valor postulado é liquido?
            //Valor da Causa
            $table->decimal('rr_valorCausa', 9, 2);
            $table->string('rr_pretensao'); //A pretensão deduzida versa sobre obrigações vincendas?
            //Dados Complementares
            $table->string('rr_estadoCivil');
            $table->string('rr_profissao');
            $table->string('rr_nacionalidade');
            $table->string('rr_estadoNaturalidade');
            $table->string('rr_cidadeNaturalidade');
            $table->string('rr_pai'); //Nome do Pai
            $table->string('rr_mae'); //Nome do Mãe
            $table->date('rr_nascimento'); //Data de Nascimento
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
        Schema::dropIfExists('tb_representantes_reu');
    }
}
