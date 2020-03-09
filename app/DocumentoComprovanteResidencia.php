<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoComprovanteResidencia extends Model
{
    protected $table = 'tb_comprovantes_residencia';
    protected $fillable = array(
        'dcr_arquivo',
        'dcr_descricao'
    );
    //DocumentoComprovanteResidencia 1:1 Processo
    public function documentoComprovanteResidencia_processo()
    {
        return $this->belongsTo('App\Processo', 'dcr_processo_id');
    }
}
