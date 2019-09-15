<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvogadoRepresentante extends Model
{
    protected $table = 'tb_advogado_representante';
    protected $fillable = array(
    	'ar_advogadoRepresentante',
		'ar_nome',
		'ar_estadoOAB',
		'ar_numeroOAB',
		'ar_matriculaRepresentante'
	);/*
    //AdvogadoRepresentante N:N Processo
	public function p_ar(){
		return $this->belongsToMany('App\Processo', 'tb_advogados_representantes_processos', 'ar_p_id', 'p_ar_id');
	}*/
}
