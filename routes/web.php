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

//Página Inicial
Route::get('/', function () {
	return view('PaginaInicial/PI_index');
});
//Distribuição Eletronica
Route::get('distribuicaoeletronica', function () {
    return view('DistribuicaoEletronica/DE_index');
});
Route::resource('p_processos', 'ProcessoController');
//Cadastro de autor
Route::resource('ca_autors', 'AutorController');
//Cadastro de representante de autor
Route::resource('cra_representantes', 'RepresentanteAutorController');
//Cadastro de réu
Route::resource('cr_reus', 'ReuController');
//Cadastro de representante de réu
Route::resource('crr_representantes', 'RepresentanteReuController');
//Cadastro de Documentos
Route::resource('d_documentos', 'DocumentoController');
//Consultas Processuais
Route::get('consultasprocessuais', function () {
    return view('ConsultasProcessuais/CP_index');
});