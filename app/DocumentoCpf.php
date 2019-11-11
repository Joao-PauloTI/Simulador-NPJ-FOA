<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoCpf extends Model
{
    protected $table = 'tb_documento_cpf';
    protected $fillable = array(
        'dcpf_arquivo',
        'dcpf_descricao'
    );
    //DocumentoCpf 1:1 Processo
    public function documentoCpf_processo()
    {
        return $this->belongsTo('App\Processo', 'dcpf_processo_id');
    }
}
