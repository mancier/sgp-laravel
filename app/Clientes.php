<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\http\Requests\Request;

class Clientes extends Model
{
    protected $fillable = 
    [
        'id',
        'nome',
        'email',
        'telefone',
        'celular',
        'documento',
        'rg',
        'cep',
        'municipio',
        'uf',
        'endereco',
        'cliente_directory'
    ];

    public function processo(){
        return $this->hasMany('App\Processos', 'clientes_id');
    }

    public function files(){
        return $this->belongsTo('App\File', 'id');
    }
}
