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
//Upload da Petição Inicial
Route::get('uploadpeticaoinicial', function () {
    return view('Documentos/UploadDaPeticaoInicial/D_uploadPeticaoInicial_index');
});
//Enviar CPF
Route::get('enviarcpf', function () {
    return view('Documentos/EnviarCPF/D_enviarCPF_index');
});
//Enviar comprovante de residência
Route::get('enviarcomprovantederesidencia', function () {
    return view('Documentos/EnviarComprovanteDeResidencia/D_enviarComprovanteResidencia_index');
});
//Enviar Procuração
Route::get('enviarprocuracao', function () {
    return view('Documentos/EnviarProcuracao/D_enviarProcuracao_index');
});
//Upload do(s) anexo(s) da petição inicial
Route::get('uploaddoanexodapeticaoinicial', function () {
    return view('Documentos/UploadDosAnexosDaPeticao/D_uploadAnexoPeticao_index');
});
//Consultas Processuais
Route::get('consultasprocessuais', function () {
    return view('ConsultasProcessuais/CP_index');
});