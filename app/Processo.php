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
    //Processo 1:N Advogado
	public function processo_advogado(){
		return $this->hasMany('App\Advogado', 'ad_processo_id');
	}
	//Processo 1:N Defensor
	public function processo_defensor(){
		return $this->hasMany('App\Defensor', 'dp_processo_id');
	}
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
	//Processo 1:N ReuJurídico
	public function processo_reuJuridico(){
		return $this->hasMany('App\ReuJuridico', 'rj_processo_id');
	}
	//Processo 1:N RepresentanteReu
	public function processo_representanteReu(){
		return $this->hasMany('App\RepresentanteReu', 'rr_processo_id');
	}
	//Processo 1:N DocumentoComprovanteResidencia
	public function processo_documentoComprovanteResidencia(){
		return $this->hasMany('App\DocumentoComprovanteResidencia', 'dcr_processo_id');
	}
	//Processo 1:N DocumentoCpf
	public function processo_documentoCpf(){
		return $this->hasMany('App\DocumentoCpf', 'dcpf_processo_id');
	}
	//Processo 1:N DocumentoProcuracao
	public function processo_documentoProcuracao(){
		return $this->hasMany('App\DocumentoProcuracao', 'dpr_processo_id');
	}
	//Processo 1:N DocumentoAnexoPeticao
	public function processo_documentoAnexoPeticao(){
		return $this->hasMany('App\DocumentoAnexoPeticao', 'dap_processo_id');
	}
	//Processo 1:N DocumentoPeticaoInicial
	public function processo_documentoPeticaoInicial(){
		return $this->hasMany('App\DocumentoPeticaoInicial', 'dpi_processo_id');
	}
}
