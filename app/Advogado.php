<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advogado extends Model
{
    protected $table = 'tb_advogados';
    protected $fillable = array(
        'ad_categoria',
        'ad_nome',
        'ad_estadoOAB',
        'ad_numeroOAB',
        'ad_representa',
        'ad_intimacao',
    );
    //AdvogadoRepresentante 1:1 Processo
    public function advogado_processo()
    {
        return $this->belongsTo('App\Processo', 'ad_processo_id');
    }
}
