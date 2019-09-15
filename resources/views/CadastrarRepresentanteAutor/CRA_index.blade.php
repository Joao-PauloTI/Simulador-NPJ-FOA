@extends('layout')
@section('titulo') Cadastro de Representante do Autor @endsection

@section('conteudo')
	<div id="app">
		<div class="container">
			<div class="card">
				<form action="{{ route('cra_representantes.store') }}" method="POST">
					@csrf
					<cradadospessoais></cradadospessoais>
					<craendereco></craendereco>
					<cravalorpedidocausa></cravalorpedidocausa>
					<cradadoscomplementares></cradadoscomplementares>
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