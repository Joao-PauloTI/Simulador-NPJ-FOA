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
            //Dados Pessoais
            $table->string('rr_parte')->nullable();
            $table->string('rr_pessoa')->nullable(); //Pessoa Física ou Jurídica
            $table->string('rr_sexo')->nullable();
            $table->string('rr_cpf')->nullable(); //CPF/CPNJ
            $table->string('rr_nome')->nullable();
            $table->string('rr_documento')->nullable(); //Documento de identificação
            $table->string('rr_numeroIdentificacao')->nullable();
            $table->string('rr_emissor')->nullable(); //Orgão emissor
            $table->string('rr_emissao')->nullable(); //Data de emissão
            $table->string('rr_telefone')->nullable();
            $table->string('rr_email')->nullable();
            //Endereço
            $table->string('rr_incerto')->nullable();
            $table->string('rr_cep')->nullable();
            $table->string('rr_estado')->nullable();
            $table->string('rr_cidade')->nullable();
            $table->string('rr_bairro')->nullable();
            $table->string('rr_tipoLogradouro')->nullable();
            $table->string('rr_logradouro')->nullable();
            $table->string('rr_numeroEndereco')->nullable();
            $table->string('rr_complemento')->nullable();
            $table->string('rr_tipoEndereco')->nullable();
            $table->string('rr_referencia')->nullable();
            $table->string('rr_comprovante')->nullable(); //O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial?
            //Valor do Pedido
            $table->string('rr_valorPedido')->nullable();
            $table->string('rr_valorLiquido')->nullable(); //O valor postulado é liquido?
            //Valor da Causa
            $table->string('rr_valorCausa')->nullable();
            $table->string('rr_pretensao')->nullable(); //A pretensão deduzida versa sobre obrigações vincendas?
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
