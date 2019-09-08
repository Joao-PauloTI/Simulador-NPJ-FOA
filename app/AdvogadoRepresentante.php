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
	);
    //AdvogadoRepresentante N:N Processo
	public function p_advogado_representante(){
		return $this->belongsToMany('App\Processo', 'advogado_representante_processos', 'ar_processo_id', 'p_advogado_representante_id');
	}
}
