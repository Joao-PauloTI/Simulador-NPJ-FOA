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
Route::post('confirmarprocesso', 'ProcessoController@confirmar')->name('processo.confirmar');
//Salvar processo
Route::post('salvarprocesso', 'ProcessoController@salvar')->name('processo.salvar');
//Gerar PDF
Route::get('processopdf', 'ProcessoController@gerarPDF');
//Consultas Processuais
Route::get('consultasprocessuais', function () {
    return view('ConsultasProcessuais/CP_index');
});