<?php

namespace App\Http\Controllers;

//Illuminate
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

//App
use App\File;
use App\Processos;
use App\Clientes;

class AjaxController extends Controller
{
    /*
    | O programa vai procurar no Database os processos relacionados ao ID do cliente, e retorna-lo em forma de JSON
    */

    function Clientes_to_Processos($id){
        $nome = Clientes::find($id)->nome;
        Session::put('Cliente_ID', $id);
        Session::put('Session_Cliente', $nome);
        $clientes = Clientes::find($id)->processo;

        return response()->json([ $clientes ]);
    
    }

    function Processos_to_Directory($id){
        $nome = Processos::find($id)->nome_processo;

        Session::put('Processo_ID', $id);
        Session::put('Session_Processo', $nome);

        $processo = Processos::find($id);
        $arquivos = Processos::find($id)->files;

        return response()->json([ $arquivos ]);
    }

    function update_cliente($id){
        $cliente = Clientes::find($id);

        return response()->json($id);
    }
}