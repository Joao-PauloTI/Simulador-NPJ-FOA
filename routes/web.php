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
//Cadastro de autor
Route::get('cadastrarautor', function () {
	return view('CadastrarAutor/CA_index');
});
//Cadastro de representante de autor
Route::get('cadastrarrepresentanteautor', function () {
	return view('CadastrarRepresentanteAutor/CRA_index');
});
//Cadastro de réu
Route::get('cadastrarreu', function () {
	return view('CadastrarReu/CR_index');
});
//Cadastro de representante de réu
Route::get('cadastrarrepresentantereu', function () {
	return view('CadastrarRepresentanteReu/CRR_index');
});
