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
        Schema::create('tb_autores', function (Blueprint $table) {
            $table->increments('id');
            //Dados Pessoais
            $table->string('a_incapaz')->nullable();
            $table->string('a_massa')->nullable(); //Massa Falida
            $table->string('a_insolvente')->nullable(); //Insolvente Civil
            $table->string('a_preso')->nullable();
            $table->string('a_espolio')->nullable(); //Espólio com interesse de Incapaz
            $table->string('a_condominio')->nullable();
            $table->string('a_ministerio')->nullable(); //Ministério Público
            $table->string('a_pessoa')->nullable(); //Pessoa Física ou Jurídica
            $table->string('a_estrangeiro')->nullable(); //Estrangeiro e/ou brasileiro residente no exterior?
            $table->string('a_sexo')->nullable();
            $table->string('a_cpf')->nullable(); //CPF/CPNJ
            $table->string('a_nome')->nullable();
            $table->string('a_menor')->nullable(); //Menor de idade
            $table->string('a_documento')->nullable(); //Documento de identificação
            $table->string('a_numeroIdentificacao')->nullable();
            $table->string('a_expedidor')->nullable(); //Orgão expedidor
            $table->string('a_emissao')->nullable(); //Data de emissão
            $table->string('a_telefone')->nullable();
            $table->string('a_email')->nullable();
            //Endereço
            $table->string('a_cep')->nullable();
            $table->string('a_estado')->nullable();
            $table->string('a_cidade')->nullable();
            $table->string('a_bairro')->nullable();
            $table->string('a_tipoLogradouro')->nullable();
            $table->string('a_logradouro')->nullable();
            $table->string('a_numeroEndereco')->nullable();
            $table->string('a_complemento')->nullable();
            $table->string('a_tipoEndereco')->nullable();
            $table->longText('a_referencia')->nullable();
            $table->string('a_comprovante')->nullable(); //O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial?
            //Valor do Pedido
            $table->string('a_valorPedido')->nullable();
            $table->string('a_valorLiquido')->nullable(); //O valor postulado é liquido?
            //Valor da Causa
            $table->string('a_valorCausa')->nullable();
            $table->string('a_pretensao')->nullable(); //A pretensão deduzida versa sobre obrigações vincendas?
            //Dados Complementares
            $table->string('a_estadoCivil')->nullable();
            $table->string('a_profissao')->nullable();
            $table->string('a_nacionalidade')->nullable();
            $table->string('a_estadoNaturalidade')->nullable();
            $table->string('a_cidadeNaturalidade')->nullable();
            $table->string('a_pai')->nullable(); //Nome do Pai
            $table->string('a_mae')->nullable(); //Nome do Mãe
            $table->string('a_nascimento')->nullable(); //Data de Nascimento
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
