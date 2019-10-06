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

        Schema::table('tb_advogados', function (Blueprint $table) {
            $table->integer('ad_processo_id')->unsigned()->nullable()->after('id');
            $table->foreign('ad_processo_id')->references('id')->on('tb_processos')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('tb_defensor_publico', function (Blueprint $table) {
            $table->integer('dp_processo_id')->unsigned()->nullable()->after('id');
            $table->foreign('dp_processo_id')->references('id')->on('tb_processos')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('tb_autores', function (Blueprint $table) {
            $table->integer('a_processo_id')->unsigned()->nullable()->after('id');
            $table->foreign('a_processo_id')->references('id')->on('tb_processos')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('tb_representantes_autores', function (Blueprint $table) {
            $table->integer('ra_processo_id')->unsigned()->nullable()->after('id');
            $table->foreign('ra_processo_id')->references('id')->on('tb_processos')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('tb_reus', function (Blueprint $table) {
            $table->integer('r_processo_id')->unsigned()->nullable()->after('id');
            $table->foreign('r_processo_id')->references('id')->on('tb_processos')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('tb_reus_juridicos', function (Blueprint $table) {
            $table->integer('rj_processo_id')->unsigned()->nullable()->after('id');
            $table->foreign('rj_processo_id')->references('id')->on('tb_processos')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('tb_representantes_reu', function (Blueprint $table) {
            $table->integer('rr_processo_id')->unsigned()->nullable()->after('id');
            $table->foreign('rr_processo_id')->references('id')->on('tb_processos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
