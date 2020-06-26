<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    //
    protected $fillable = [

        'id',
        'nome',
        'email',
        'data_nasc',
        'foto',
        'created_at',
        'updated_at'
    ];


    public function dependentes(){
        return $this->hasMany('App\Dependente');
    }

}
