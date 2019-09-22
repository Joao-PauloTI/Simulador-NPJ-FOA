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
            //Dados Pessoais
            $table->string('r_estrangeiro')->nullable(); //Estrangeiro e/ou brasileiro residente no exterior?
            $table->string('r_sexo')->nullable();
            $table->string('r_cpf')->nullable(); //CPF/CPNJ
            $table->string('r_nome')->nullable();
            $table->string('r_documento')->nullable();
            $table->string('r_numeroIdentificacao')->nullable();
            $table->string('r_expedidor')->nullable(); //Orgão expedidor
            $table->string('r_emissao')->nullable(); //Data de emissão
            $table->string('r_email')->nullable();
            //Endereço
            $table->string('r_incerto')->nullable(); //Endereço incerto
            $table->string('r_cep')->nullable();
            $table->string('r_estado')->nullable();
            $table->string('r_cidade')->nullable();
            $table->string('r_bairro')->nullable();
            $table->string('r_tipoLogradouro')->nullable();
            $table->string('r_logradouro')->nullable();
            $table->string('r_numeroEndereco')->nullable();
            $table->string('r_complemento')->nullable();
            $table->string('r_tipoEndereco')->nullable();
            $table->string('r_referencia')->nullable();
            $table->string('r_comprovante')->nullable(); //O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial?
            //Valor do Pedido
            $table->string('r_valorPedido')->nullable();
            $table->string('r_valorLiquido')->nullable(); //O valor postulado é liquido?
            //Valor da Causa
            $table->string('r_valorCausa')->nullable();
            $table->string('r_pretensao')->nullable(); //A pretensão deduzida versa sobre obrigações vincendas?
            //Dados Complementares
            $table->string('r_estadoCivil')->nullable();
            $table->string('r_profissao')->nullable();
            $table->string('r_nacionalidade')->nullable();
            $table->string('r_estadoNaturalidade')->nullable();
            $table->string('r_cidadeNaturalidade')->nullable();
            $table->string('r_pai')->nullable(); //Nome do Pai
            $table->string('r_mae')->nullable(); //Nome do Mãe
            $table->string('r_nascimento')->nullable(); //Data de Nascimento
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
