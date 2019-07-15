@extends('layout')
@section('titulo') Cadastro de Representante do Autor @endsection

@section('conteudo')
	<div id="app">
		<pimenulateral id="PI_mostrarEsconderMenu"></pimenulateral>
		<div class="container">
			<div class="card">
				<cradadospessoais></cradadospessoais>
				<craendereco></craendereco>
				<cravalorpedidocausa></cravalorpedidocausa>
				<cradadoscomplementares></cradadoscomplementares>
			</div>
		</div>
		<br>
	</div>
@endsection