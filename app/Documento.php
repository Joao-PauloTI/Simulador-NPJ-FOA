<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'tb_documentos';
    protected $fillable = array(
        'd_processo_id',
		'd_arquivo',
		'd_descricao',
		'd_tipoArquivo'
    );/*
    //Documento 1:1 Processo
    public function documento_processo(){
    	return $this->belongsTo('App\Processo', 'd_processo_id');
    }*/
}
