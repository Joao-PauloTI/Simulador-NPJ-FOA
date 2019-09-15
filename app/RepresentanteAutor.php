<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepresentanteAutor extends Model
{
    protected $table = 'tb_representantes_autores';
    protected $fillable = array(
 	  	'ra_incapaz',
		'ra_massa',
		'ra_insolvente',
		'ra_preso',
		'ra_espolio',
		'ra_condominio',
		'ra_parte',
		'ra_ministerio',
		'ra_pessoa',
		'ra_sexo',
		'ra_cpf',
		'ra_nome',
		'ra_documento',
		'ra_numeroIdentificacao',
		'ra_emissor',
		'ra_emissao',
		'ra_telefone',
		'ra_email',
		'ra_cep',
		'ra_estado',
		'ra_cidade',
		'ra_bairro',
		'ra_tipoLogradouro',
		'ra_logradouro',
		'ra_numeroEndereco',
		'ra_complemento',
		'ra_tipoEndereco',
		'ra_referencia',
		'ra_comprovante',
		'ra_valorPedido',
		'ra_valorLiquido',
		'ra_valorCausa',
		'ra_pretensao',
		'ra_estadoCivil',
		'ra_profissao',
		'ra_nacionalidade',
		'ra_estadoNaturalidade',
		'ra_cidadeNaturalidade',
		'ra_pai',
		'ra_mae',
		'ra_nascimento'
	);/*
	//RepresentanteAutor 1:1 Processo
    public function p_representante_autor(){
    	return $this->belongsTo('App\Processo');
    }*/
}
