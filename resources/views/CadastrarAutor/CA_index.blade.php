@extends('layout')
@section('titulo') Cadastro de Autor @endsection

@section('conteudo')
	<div id="app">
		<pimenulateral id="PI_mostrarEsconderMenu"></pimenulateral>
		<div class="container">
			<div class="card">
				<cadadospessoais></cadadospessoais>
				<caadvogadorepresentante></caadvogadorepresentante>
				<caendereco></caendereco>
				<cavalorpedidocausa></cavalorpedidocausa>
				<cadadoscomplementares></cadadoscomplementares>
			</div>
		</div>
		<br>
	</div>
@endsection
