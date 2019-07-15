@extends('layout')
@section('titulo') Cadastro de Réu @endsection

@section('conteudo')
	<div id="app">
		<pimenulateral id="PI_mostrarEsconderMenu"></pimenulateral>
		<div class="container">
			<div class="card">
				<crdadospessoais></crdadospessoais>
				<crendereco></crendereco>
				<crvalorpedidocausa></crvalorpedidocausa>
				<crdadoscomplementares></crdadoscomplementares>
			</div>
		</div>
		<br>
	</div>
@endsection
