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
	);/*
    //Processo N:N AdvogadoRepresentante
	public function ar_p(){
		return $this->belongsToMany('App\AdvogadoRepresentante', 'tb_advogados_representantes_processos', 'p_ar_id', 'ar_p_id');
	}
	//Processo 1:N Autor
	public function a_processo(){
		return $this->hasMany('App\Autor');
	}
	//Processo 1:N RepresentanteAutor
	public function ra_processo(){
		return $this->hasMany('App\RepresentanteAutor');
	}
	//Processo 1:N Reu
	public function r_processo(){
		return $this->hasMany('App\Reu');
	}
	//Processo 1:N RepresentanteReu
	public function rr_processo(){
		return $this->hasMany('App\RepresentanteReu');
	}
	//Processo 1:N Documento
	public function d_processo(){
		return $this->hasMany('App\Documento');
	}*/
}
