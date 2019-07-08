@extends('layout')
@section('titulo') Cadastro de Representante do Réu @endsection

@section('conteudo')
	<br>
	<div id="app">
		<crrdadospessoais></crrdadospessoais>
		<crrendereco></crrendereco>
		<crrvalorpedidocausa></crrvalorpedidocausa>
		<crrdadoscomplementares></crrdadoscomplementares>
	</div>
@endsection