<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'tb_documentos';
    protected $fillable = array(
		'd_arquivo',
		'd_descricao',
		'd_tipoArquivo'
    );
    //Documento 1:1 Processo
    public function p_documento(){
    	return $this->belongsTo('App\Processo');
    }
}
