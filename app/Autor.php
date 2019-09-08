<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'tb_autores';
    protected $fillable = array(
      	'a_incapaz',
		'a_massa',
		'a_insolvente',
		'a_preso',
		'a_espolio',
		'a_condominio',
		'a_ministerio',
		'a_pessoa',
		'a_estrangeiro',
		'a_sexo',
		'a_cpf',
		'a_nome',
		'a_menor',
		'a_documento',
		'a_numeroIdentificacao',
		'a_expedidor',
		'a_emissao',
		'a_telefone',
		'a_email',
		'a_representa',
		'a_intimacao',
		'a_cep',
		'a_estado',
		'a_cidade',
		'a_bairro',
		'a_tipoLogradouro',
		'a_logradouro',
		'a_numeroEndereco',
		'a_complemento',
		'a_tipoEndereco',
		'a_referencia',
		'a_comprovante',
		'a_valorPedido',
		'a_valorLiquido',
		'a_valorCausa',
		'a_pretensao',
		'a_estadoCivil',
		'a_profissao',
		'a_nacionalidade',
		'a_estadoNaturalidade',
		'a_cidadeNaturalidade',
		'a_pai',
		'a_mae',
		'a_nascimento'
    );
    //Autor 1:1 Processo
    public function p_autor(){
    	return $this->belongsTo('App\Processo');
    }
}
