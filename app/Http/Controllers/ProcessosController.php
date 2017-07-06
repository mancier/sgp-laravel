<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Processos;
use App\Clientes;

class ProcessosController extends Controller
{
    #Create
    public function Create(Request $request){
		$input = $request->all();
		Processos::create($input);

		return redirect('processos');
	}

    #Read
    public function Processos(){
		$pagina_nome = 'Processos';
		$processos = Processos::all();
		$clientes = Clientes::pluck('nome' ,'id');
		return view('pages.processo', ['pagina_nome' => $pagina_nome, 'clientes'=>$clientes, 'processos'=>$processos]); //Estou passando o nome da página para o layout
	}

    #Update
    public function Find_to_Update($id){
		$processos = Processos::find($id);
		$clientes = Clientes::pluck('nome' ,'id');
		$pagina_nome = 'Processos - Editar';

		return view('pages.modal.editProcesso', compact('processos'), ['pagina_nome'=>$pagina_nome, 'clientes'=>$clientes]);
	}

    public function Update (Request $request, $id){
		$processos = Processos::find($id)->update($request->all());

		return redirect()->route('processos');
	}

    #Destroy
    public function Destroy ($id){
		$id_processo = Processos::find($id);
		$id_processo->delete();

		return redirect('processos');
	}
}
