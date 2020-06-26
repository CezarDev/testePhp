<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependente extends Model
{
    protected $fillable = [

        'id',
        'nome',
        'data_nasc',
        'pessoa_id',
        'created_at',
        'updated_at'
    ];

    public function pessoa(){
        return $this->belongsTo('App\Pessoa');
    }

}