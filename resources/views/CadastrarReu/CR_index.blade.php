@extends('layout')
@section('titulo') Cadastro de Réu @endsection

@section('conteudo')
	<div id="app">
		<div class="container">
			<div class="card">
				<form action="{{ route('cr_reus.store') }}" method="POST">
					@csrf
					<crdadospessoais></crdadospessoais>
					<crendereco></crendereco>
					<crvalorpedidocausa></crvalorpedidocausa>
					<crdadoscomplementares></crdadoscomplementares>
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
