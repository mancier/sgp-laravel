<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processos extends Model
{
	protected $fillable = [
	'id',
	'numero_processo',
	'nome_processo',
	'clientes_id',
	'requerendo',
	'requerendo_tipo',
	'vara',
	'comarca',
	'valor_causa'
	];

	public function cliente(){
		return $this->belongsTo('App\Clientes', 'clientes_id');
	}
	
	public function files(){
		return $this->hasMany ('App\File');
	}
}