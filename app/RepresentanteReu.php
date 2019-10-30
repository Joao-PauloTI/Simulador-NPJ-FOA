<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepresentanteReu extends Model
{
    protected $table = 'tb_representantes_reu';
    protected $fillable = array(
    	'rr_processo_id',
		'rr_parte',
		'rr_pessoa',
		'rr_sexo',
		'rr_cpf',
		'rr_nome',
		'rr_menor',
		'rr_documento',
		'rr_numeroIdentificacao',
		'rr_emissor',
		'rr_emissao',
		'rr_telefone',
		'rr_email',
		'rr_incerto',
		'rr_cep',
		'rr_estado',
		'rr_cidade',
		'rr_bairro',
		'rr_tipoLogradouro',
		'rr_logradouro',
		'rr_numeroEndereco',
		'rr_complemento',
		'rr_tipoEndereco',
		'rr_referencia',
		'rr_comprovante',
		'rr_estadoCivil',
		'rr_profissao',
		'rr_nacionalidade',
		'rr_estadoNaturalidade',
		'rr_cidadeNaturalidade',
		'rr_pai',
		'rr_mae',
		'rr_nascimento'
    );
    //RepresentanteReu 1:1 Processo
    public function representanteReu_processo(){
    	return $this->belongsTo('App\Processo', 'rr_processo_id');
    }
}
