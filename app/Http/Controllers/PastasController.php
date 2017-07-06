<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Clientes;
use App\Processos;
use App\File;

class PastasController extends Controller
{
    #Read
    public function Pastas(){
		$pagina_nome = 'Pastas';
		$clientes = Clientes::pluck('nome', 'id');
		$processos = Processos::pluck('nome_processo', 'numero_processo', 'id');
		return view('pages.pastas', ['pagina_nome' => $pagina_nome, 'clientes' => $clientes, 'processos'=>$processos]); //Estou passando o nome da página para o layout
	}

    public function UploadFiles (Request $request)
	{
		$files = \Request::file('files');
		$cliente_nome = Session::get('Session_Cliente');
		$processo_nome = Session::get('Session_Processo');
		$id_cliente = Session::get('Cliente_ID');
		$id_processo = Session::get('Processo_ID');
		$caminho = '/app'.'/'.$cliente_nome.'/'.$processo_nome.'/';
		$storagePatch = storage_path().$caminho;

		foreach ($files as $x) {
			$fileName = $x->getClientOriginalName();
			$fileModel = new \App\File();
			
			$fileModel->name = $fileName;
			
			DB::table('files')->insert([
				'nome' => $fileName,
				'clientes_id' => $id_cliente,
				'processos_id' => $id_processo,
				'caminho' => $caminho,
			]);

			return $x->move($storagePatch, $fileName);
		}		

	return response()->json([$processo]);

	}
}
