@extends('layout')
@section('titulo') Distribuição Eletrônica @endsection

@section('conteudo')
	<div id="app">
		<pimenulateral id="PI_mostrarEsconderMenu"></pimenulateral>
		<div class="container">
			<div class="card">
				<form action="{{ route('p_processos.store') }}" method="POST" enctype="multipart/form-data" novalidate>
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
						<button type="submit" class="btn btn-primary">SALVAR</button>
						<button type="reset" class="btn btn-danger">LIMPAR</button>
					</div>
				</form>
				<br>
			</div>
			<br>
		</div>
	</div>
@endsection