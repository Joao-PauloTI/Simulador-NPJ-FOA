@extends('layout')
@section('titulo') Consultas Processuais
@endsection

@section('conteudo')
<div id="app">
	<pimenulateral id="PI_mostrarEsconderMenu"></pimenulateral>
	<div class="container">
		<div class="card">
			<form action="">
				@csrf
				<cpconsultaprocessual></cpconsultaprocessual>
				<div align="center">
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
