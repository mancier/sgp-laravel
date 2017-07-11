<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Clientes;

class clientesController extends Controller
{
    
    #Create
    public function Create(Request $request){
		$input = $request->all();
		Clientes::create($input);

		return redirect('clientes');
	}

    #Read
	public function Clientes(){
		$pagina_nome = 'Clientes';
		$clientes = Clientes::all();

		return view('pages.clientes', ['pagina_nome' => $pagina_nome, 'clientes'=>$clientes]); //Estou passando o nome da página para o layout
	}

    #Update
    public function Update (Request $request, $id){
		$cliente = Clientes::find($id)->update($request->all());

		return redirect()->route('clientes');
	}
    
    public function Find_to_Update ($id){
		$pagina_nome = 'Clientes - Editar';
		$cliente = Clientes::find($id);

		return view('pages.modal.edit', compact('cliente'), ['pagina_nome'=>$pagina_nome]);
	}

    #Destroy
   	public function Destroy($id){
		$clientes = Clientes::find($id);
		$clientes->delete();

		return redirect()->route('clientes');
	}



}
