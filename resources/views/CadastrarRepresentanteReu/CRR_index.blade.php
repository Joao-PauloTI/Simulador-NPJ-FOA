@extends('layout')
@section('titulo') Cadastro de Representante do Réu @endsection

@section('conteudo')
	<div id="app">
		<pimenulateral id="PI_mostrarEsconderMenu"></pimenulateral>
		<div class="container">
			<div class="card">
				<crrdadospessoais></crrdadospessoais>
				<crrendereco></crrendereco>
				<crrvalorpedidocausa></crrvalorpedidocausa>
				<crrdadoscomplementares></crrdadoscomplementares>
			</div>
		</div>
		<br>
	</div>
@endsection