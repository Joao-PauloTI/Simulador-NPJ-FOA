@extends('layout')
@section('titulo') Cadastro de Autor @endsection

@section('conteudo')
	<div id="app">
		<div class="container">
			<div class="card">
				<form action="{{ route('ca_autors.store') }}" method="POST">
					@csrf
					<cadadospessoais></cadadospessoais>
					<caadvogadorepresentante></caadvogadorepresentante>
					<caendereco></caendereco>
					<cavalorpedidocausa></cavalorpedidocausa>
					<cadadoscomplementares></cadadoscomplementares>
					<br>
					<!--Botões SALVAR/FECHAR-->
					<div align="center">
						<form action="">
							<button type="submit" class="btn btn-primary">SALVAR</button>
							<button type="button" onclick="window.close()" class="btn btn-danger">FECHAR</button>
						</form>
					</div>
				</form>
				<br>
			</div>
		</div>
		<br>
	</div>
@endsection
