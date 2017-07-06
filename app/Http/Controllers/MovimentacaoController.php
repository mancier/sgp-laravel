<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovimentacaoController extends Controller
{
    #Read
    public function Movimentacao(){
		$pagina_nome = 'Movimentação';
		return view('pages.movimentacao', ['pagina_nome' => $pagina_nome]); //Estou passando o nome da página para o layout
	}
}
