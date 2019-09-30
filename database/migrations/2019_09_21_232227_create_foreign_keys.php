<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::table('tb_autores', function (Blueprint $table) {
            $table->integer('a_processo_id')->unsigned()->nullable();
            $table->foreign('a_processo_id')->references('id')->on('tb_processos')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('tb_representantes_autores', function (Blueprint $table) {
            $table->integer('ra_processo_id')->unsigned()->nullable();
            $table->foreign('ra_processo_id')->references('id')->on('tb_processos')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('tb_reus', function (Blueprint $table) {
            $table->integer('r_processo_id')->unsigned()->nullable();
            $table->foreign('r_processo_id')->references('id')->on('tb_processos')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('tb_reus_juridicos', function (Blueprint $table) {
            $table->integer('rj_processo_id')->unsigned()->nullable();
            $table->foreign('rj_processo_id')->references('id')->on('tb_processos')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('tb_representantes_reu', function (Blueprint $table) {
            $table->integer('rr_processo_id')->unsigned()->nullable();
            $table->foreign('rr_processo_id')->references('id')->on('tb_processos')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('tb_documentos', function (Blueprint $table) {
            $table->integer('d_processo_id')->unsigned()->nullable();
            $table->foreign('d_processo_id')->references('id')->on('tb_processos')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tb_representantes_autores');
        Schema::dropIfExists('tb_reus');
        Schema::dropIfExists('tb_reus_juridicos');
        Schema::dropIfExists('tb_representantes_reu');
        Schema::dropIfExists('tb_documentos');
    }
}
