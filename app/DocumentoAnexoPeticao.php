<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoAnexoPeticao extends Model
{
    protected $table = 'tb_documento_anexos_peticao';
    protected $fillable = array(
        'dap_arquivo',
        'dap_descricao'
	);
    //DocumentoAnexoPeticao 1:1 Processo
	public function documentoAnexoPeticao_processo(){
		return $this->belongsTo('App\Processo', 'dap_processo_id');
	}
}
