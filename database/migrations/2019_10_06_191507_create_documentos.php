<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('tb_documento_comprovantes_residencia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dcr_arquivo')->nullable();
            $table->string('dcr_descricao')->nullable();
            $table->timestamps(); //Hora e data de cadastro
        });

        Schema::create('tb_documento_cpf', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dcpf_arquivo')->nullable();
            $table->string('dcpf_descricao')->nullable();
            $table->timestamps(); //Hora e data de cadastro
        });

        Schema::create('tb_documento_procuracoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dpr_arquivo')->nullable();
            $table->string('dpr_descricao')->nullable();
            $table->timestamps(); //Hora e data de cadastro
        });

        Schema::create('tb_documento_anexos_peticao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dap_arquivo')->nullable();
            $table->string('dap_descricao')->nullable();
            $table->timestamps(); //Hora e data de cadastro
        });

        Schema::create('tb_documento_peticao_inicial', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dpi_arquivo')->nullable();
            $table->string('dpi_descricao')->nullable();
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
        Schema::dropIfExists('tb_documento_comprovantes_residencia');
        Schema::dropIfExists('tb_documento_cpf');
        Schema::dropIfExists('tb_documento_procuracoes');
        Schema::dropIfExists('tb_documento_anexos_peticao');
        Schema::dropIfExists('tb_documento_peticao_inicial');
    }
}
