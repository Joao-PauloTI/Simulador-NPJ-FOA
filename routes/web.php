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

Route::get('/', function () {
    return view('DistribuicaoEletronica/DE_index');
});

Route::get('cadastrarautor', function () {
	return view('CadastrarAutor/CA_index');
});

Route::get('cadastrarrepresentanteautor', function () {
	return view('CadastrarRepresentanteAutor/CRA_index');
});

Route::get('cadastrarreu', function () {
	return view('CadastrarReu/CR_index');
});

Route::get('cadastrarrepresentantereu', function () {
	return view('CadastrarRepresentanteReu/CRR_index');
});
