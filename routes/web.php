<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@home');#=>Read

/*
| Home => Routes
*/
Route::get('/home', 'HomeController@home');#=>Read
/*---------------------------------------------------------------------------------------------------------*/

/*
| Processos => Routes
*/
Route::post('processo/store', 'ProcessosController@Create'); #=> Create
Route::get('/processos', ['as'=>'processos', 'uses'=>'ProcessosController@Processos']); #=> Read
Route::get('{id}/editarProcesso', ['as'=>'processos.alt', 'uses'=>'ProcessosController@Find_to_Update']);#=> Find
Route::post('{id}/updateProcesso', ['as'=>'processos.update', 'uses'=>'ProcessosController@Update']);#=> Update
Route::get('{id}/destroy',['as'=>'processos.destroy', 'uses'=>'ProcessosController@Destroy']);#=> Destroy
/*---------------------------------------------------------------------------------------------------------*/

/*
| Movimentação => Route
*/
Route::get('/movimentacao', 'MovimentacaoController@Movimentacao');#=>Read
/*---------------------------------------------------------------------------------------------------------*/

/*
| Pastas =>
*/
Route::get('/pastas', 'PastasController@Pastas');#=>Read

/*
| Ajax => Route
*/
Route::get('{id}/pesquisaCliente', 'AjaxController@Clientes_to_Processos');#=> Procura os processos relacionados a um cliente e retorna para a página em forma de JSON
Route::get('{id}/pesquisaProcesso', 'AjaxController@Processos_to_Directory');
/*---------------------------------------------------------------------------------------------------------*/

/*
| Clientes => Route
*/
Route::post('cliente/store', 'ClientesController@Create'); #=> Create
Route::get('/clientes',['as'=>'clientes', 'uses'=>'ClientesController@Clientes']); #=>Read
Route::get('{id}/editCliente', ['as'=>'cliente.edit', 'uses'=>'ClientesController@Find_to_Update']);#=> Find
Route::post('{id}/updateCliente', ['as'=>'cliente.update', 'uses'=>'ClientesController@Update']); #=>Update
Route::get('{id}/destroyCliente',['as'=>'cliente.destroy', 'uses'=>'ClientesController@Destroy']); #=> Destroy
/*---------------------------------------------------------------------------------------------------------*/

/*
| Upload => Route
*/
Route::post('/upload', ['as'=>'files.upload', 'uses'=>'PastasController@UploadFiles']);
/*---------------------------------------------------------------------------------------------------------*/