@extends('layout')
@section('titulo') Cadastro de Representante do Réu @endsection

@section('conteudo')
	<div id="app">
		<div class="container">
			<div class="card">
				<form action="{{ route('crr_representantes.store') }}" method="POST">
					@csrf
					<crrdadospessoais></crrdadospessoais>
					<crrendereco></crrendereco>
					<crrvalorpedidocausa></crrvalorpedidocausa>
					<crrdadoscomplementares></crrdadoscomplementares>
					<br>
					<!--Botões SALVAR/FECHAR-->
					<div align="center">
						<button type="submit" class="btn btn-primary">SALVAR</button>
						<button type="button" onclick="window.close()" class="btn btn-danger">FECHAR</button>
					</div>
				</form>
				<br>
			</div>
		</div>
		<br>
	</div>
@endsection