<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbDocumentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('tb_documentos', function (Blueprint $table) {
            $table->increments('id');
            //Chave estrangeira
            $table->integer('d_processo_id')->unsigned();
            $table->foreign('d_processo_id')->references('id')->on('tb_processos')->onDelete('cascade');
            //Documentos
            $table->string('d_arquivo');
            $table->string('d_descricao');
            $table->string('d_tipoArquivo'); //atributo para categorizar os arquivos, mudando de acordo com a página de documento
            $table->timestamps(); //Hora e Data de cadsatro
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_documentos');
    }
}
