<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    #Read
    public function home(){
		$pagina_nome = 'Home';
		return view('pages.home', ['pagina_nome' => $pagina_nome]); //Estou passando o nome da página para o layout
	}
}
