<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReuJuridico extends Model
{
    protected $table = 'tb_reus_juridicos';
    protected $fillable = array(
    	'rj_processo_id',
    	'rj_nome',
    	'rj_cnpj',
    	'rj_tipoEmpresa',
    	'rj_cep',
		'rj_estado',
		'rj_cidade',
		'rj_bairro',
		'rj_tipoLogradouro',
		'rj_logradouro',
		'rj_numeroEndereco',
		'rj_complemento',
		'rj_tipoEndereco',
		'rj_referencia',
    );
    //Reu 1:1 Processo
    public function reuJuridico_processo(){
    	return $this->belongsTo('App\Processo', 'rj_processo_id');
    }
}
