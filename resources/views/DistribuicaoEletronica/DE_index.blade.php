@extends('layout')
@section('titulo') Distribuição Eletrônica
@endsection

@section('conteudo')
<div id="app">
	<pimenulateral id="PI_mostrarEsconderMenu"></pimenulateral>
	<div class="container">
		<div class="card">
			<form action="{{ route('processo.confirmar') }}" target="_popup" onsubmit="window.open(this.action, '_popup', 'width=screen.width, height=screen.height');" method="POST" enctype="multipart/form-data" novalidate>
				@csrf
				<degrerj></degrerj>
				<deprocessoprincipal></deprocessoprincipal>
				<dedadosdoprocesso></dedadosdoprocesso>
				<deadvogadorepresentante></deadvogadorepresentante>
				<deautoresreusdocumentos></deautoresreusdocumentos>
				<dedeclaracaodeveracidade></dedeclaracaodeveracidade>
				<br>
				<!--Botões SALVAR/LIMPAR-->
				<div align="center">
					<button type="submit" class="btn btn-primary"><strong>SALVAR</strong></button>
					<button type="button" onclick="window.location.reload()" class="btn btn-danger"><strong>LIMPAR</strong></button>
				</div>
			</form>
			<br>
		</div>
		<br>
	</div>
</div>
@endsection
