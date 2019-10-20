<?php
//Página Inicial
Route::get('/', function () {
	return view('PaginaInicial/PI_index');
});
//Distribuição Eletronica
Route::get('distribuicaoeletronica', function () {
    return view('DistribuicaoEletronica/DE_index');
});
//Página de Confirmação
Route::post('confirmar', 'ProcessoController@confirmar')->name('processo.confirmar');
//CRUD do ProcessoController
Route::resource('processo', 'ProcessoController');
//Consultas Processuais
Route::get('consultasprocessuais', function () {
    return view('ConsultasProcessuais/CP_index');
});