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
		'ar_matriculaRepresentante',
		'ar_representa',
		'ar_intimacao',
	);
    //AdvogadoRepresentante 1:1 Processo
	public function advogadoRepresentante_processo(){
		return $this->belongsTo('App\Processo', 'ar_processo_id');
	}
}
