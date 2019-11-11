<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Defensor extends Model
{
    protected $table = 'tb_defensor_publico';
    protected $fillable = array(
        'dp_categoria',
        'dp_nome',
        'dp_matricula',
        'dp_representa',
        'dp_intimacao',
    );
    //Defensor 1:1 Processo
    public function defensor_processo()
    {
        return $this->belongsTo('App\Processo', 'dp_processo_id');
    }
}
