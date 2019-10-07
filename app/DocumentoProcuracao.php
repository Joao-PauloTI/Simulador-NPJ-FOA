<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoProcuracao extends Model
{
    protected $table = 'tb_documento_procuracoes';
    protected $fillable = array(
        'dpr_arquivo',
        'dpr_descricao'
	);
    //DocumentoProcuracao 1:1 Processo
	public function documentoProcuracao_processo(){
		return $this->belongsTo('App\Processo', 'dpr_processo_id');
	}
}
