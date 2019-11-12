@extends('layout')
@section('titulo') Consultas Processuais
@endsection

@section('conteudo')
<div id="app">
	<pimenulateral id="PI_mostrarEsconderMenu"></pimenulateral>
	<div class="container">
		<div class="card">
			<form action="{{ route('processo.consultar') }}" method="post">
				@csrf
				<cpconsultaprocessual></cpconsultaprocessual>
				<div align="center">
					@if(Session::has('mensagemConsulta'))
					<div class="col-lg-8 alert alert-danger" align="center">
						<strong>{{ Session::get('mensagemConsulta') }}</strong>
					</div>
					<br>
					@endif
					<!--Botões PESQUISAR/LIMPAR-->
					<button type="submit" class="btn btn-primary"><strong>PESQUISAR</strong></button>
					<button type="reset" class="btn btn-danger"><strong>LIMPAR</strong></button>
				</div>
			</form>
			<br>
		</div>
	</div>
	<br>
</div>
@endsection
