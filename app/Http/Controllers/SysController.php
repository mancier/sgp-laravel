<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Clientes;
use App\Processos;
use App\Http\Requests;

class SysController extends Controller
{
    //Index => Página de Login
	public function index(){
		$pagina_nome = 'Login';
		return view('pages.index', ['pagina_nome' => $pagina_nome]);
	}
}
