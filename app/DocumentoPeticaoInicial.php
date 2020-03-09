<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoPeticaoInicial extends Model
{
    protected $table = 'tb_peticao_inicial';
    protected $fillable = array(
        'dpi_arquivo',
        'dpi_descricao'
    );
    //DocumentoPeticaoInicial 1:1 Processo
    public function documentoPeticaoInicial_processo()
    {
        return $this->belongsTo('App\Processo', 'dpi_processo_id');
    }
}
