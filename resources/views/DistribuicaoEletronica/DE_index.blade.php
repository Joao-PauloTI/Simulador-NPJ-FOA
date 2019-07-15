@extends('layout')
@section('titulo') Distribuição Eletrônica @endsection

@section('conteudo')
	<div id="app">
		<pimenulateral id="PI_mostrarEsconderMenu"></pimenulateral>
		<div class="container">
			<div class="card">
				<degrerj></degrerj>
				<deprocessoprincipal></deprocessoprincipal>
				<dedadosdoprocesso></dedadosdoprocesso>
				<deadvogadorepresentante></deadvogadorepresentante>
				<deautoresreusdocumentos></deautoresreusdocumentos>
				<dedeclaracaodeveracidade></dedeclaracaodeveracidade>
			</div>
		</div>
		<br>
	</div>
@endsection