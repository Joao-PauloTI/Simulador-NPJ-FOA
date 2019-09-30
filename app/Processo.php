<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    protected $table = 'tb_processos';
    protected $fillable = array(
    	'p_grerjMotivo',
    	'p_grerjNumero',
	    'p_dependencia',
	    'p_prioridadeDeficiente',
	    'p_tutela',
	    'p_prioridadePortador',
	    'p_gratuidade',
	    'p_exame',
	    'p_comarca',
	    'p_competencia',
	    'p_conciliacao',
	    'p_classe',
	    'p_distribuicao',
	    'p_valor',
	    'p_veracidade'
	);
    //Processo N:N AdvogadoRepresentante
	/*public function ar_p(){
		return $this->belongsToMany('App\AdvogadoRepresentante', 'tb_advogados_representantes_processos', 'p_ar_id', 'ar_p_id');
	}*/
	//Processo 1:N Autor
	public function processo_autor(){
		return $this->hasMany('App\Autor', 'a_processo_id');
	}
	//Processo 1:N RepresentanteAutor
	public function processo_representanteAutor(){
		return $this->hasMany('App\RepresentanteAutor', 'ra_processo_id');
	}
	//Processo 1:N Reu
	public function processo_reu(){
		return $this->hasMany('App\Reu', 'r_processo_id');
	}
	//Processo 1:N Reu Jurídico
	public function processo_reuJuridico(){
		return $this->hasMany('App\ReuJuridico', 'rj_processo_id');
	}
	//Processo 1:N RepresentanteReu
	public function processo_representanteReu(){
		return $this->hasMany('App\RepresentanteReu', 'rr_processo_id');
	}
	//Processo 1:N Documento
	public function processo_documento(){
		return $this->hasMany('App\Documento', 'd_processo_id');
	}
}
