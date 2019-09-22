<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reu extends Model
{
    protected $table = 'tb_reus';
    protected $fillable = array(
    	'r_processo_id',
		'r_estrangeiro',
		'r_sexo',
		'r_cpf',
		'r_nome',
		'r_documento',
		'r_numeroIdentificacao',
		'r_expedidor',
		'r_emissao',
		'r_email',
		'r_incerto',
		'r_cep',
		'r_estado',
		'r_cidade',
		'r_bairro',
		'r_tipoLogradouro',
		'r_logradouro',
		'r_numeroEndereco',
		'r_complemento',
		'r_tipoEndereco',
		'r_referencia',
		'r_comprovante',
		'r_valorPedido',
		'r_valorLiquido',
		'r_valorCausa',
		'r_pretensao',
		'r_estadoCivil',
		'r_profissao',
		'r_nacionalidade',
		'r_estadoNaturalidade',
		'r_cidadeNaturalidade',
		'r_pai',
		'r_mae',
		'r_nascimento'
    );
    //Reu 1:1 Processo
    public function reu_processo(){
    	return $this->belongsTo('App\Processo', 'r_processo_id');
    }
}
