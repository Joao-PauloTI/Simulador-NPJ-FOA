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
Route::get('processopdf/{numeracaoProcesso}', 'ProcessoController@gerarPDF');
//Consultar/Excluir Processos
Route::get('consultarexcluirprocessos', function () {
    return view('ConsultarExcluirProcessos/CEP_index');
});
//Consultar todos os processos
Route::post('consultartodos', 'ProcessoController@consultarTodos')->name('consulta.todos');
//Excluir processos selecionados
Route::post('excluirprocessos', 'ProcessoController@excluirSelecionados')->name('processo.excluir');
//Consultas Processuais
Route::get('consultasprocessuais', function () {
    return view('ConsultasProcessuais/CP_index');
});
