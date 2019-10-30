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
            //Dados Pessoais
            $table->string('ra_incapaz')->nullable();
            $table->string('ra_massa')->nullable(); //Massa Falida
            $table->string('ra_insolvente')->nullable(); //Insolvente Civil
            $table->string('ra_preso')->nullable();
            $table->string('ra_espolio')->nullable(); //Espólio com interesse de Incapaz
            $table->string('ra_condominio')->nullable();
            $table->string('ra_parte')->nullable();
            $table->string('ra_ministerio')->nullable(); //Ministério Público
            $table->string('ra_pessoa')->nullable(); //Pessoa Física ou Jurídica
            $table->string('ra_sexo')->nullable();
            $table->string('ra_cpf')->nullable(); //CPF/CPNJ
            $table->string('ra_nome')->nullable();
            $table->string('ra_documento')->nullable(); //Documento de identificação
            $table->string('ra_numeroIdentificacao')->nullable();
            $table->string('ra_emissor')->nullable(); //Orgão emissor
            $table->string('ra_emissao')->nullable(); //Data de emissão
            $table->string('ra_telefone')->nullable();
            $table->string('ra_email')->nullable();
            //Endereço
            $table->string('ra_cep')->nullable();
            $table->string('ra_estado')->nullable();
            $table->string('ra_cidade')->nullable();
            $table->string('ra_bairro')->nullable();
            $table->string('ra_tipoLogradouro')->nullable();
            $table->string('ra_logradouro')->nullable();
            $table->string('ra_numeroEndereco')->nullable();
            $table->string('ra_complemento')->nullable();
            $table->string('ra_tipoEndereco')->nullable();
            $table->string('ra_referencia')->nullable();
            $table->string('ra_comprovante')->nullable(); //O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial?
            //Dados Complementares
            $table->string('ra_estadoCivil')->nullable();
            $table->string('ra_profissao')->nullable();
            $table->string('ra_nacionalidade')->nullable();
            $table->string('ra_estadoNaturalidade')->nullable();
            $table->string('ra_cidadeNaturalidade')->nullable();
            $table->string('ra_pai')->nullable(); //Nome do Pai
            $table->string('ra_mae')->nullable(); //Nome do Mãe
            $table->string('ra_nascimento')->nullable(); //Data de Nascimento
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
