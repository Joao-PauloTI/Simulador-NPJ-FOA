@extends('layout')
@section('titulo') Consultas Processuais @endsection

@section('conteudo')
	<div id="app">
		<pimenulateral id="PI_mostrarEsconderMenu"></pimenulateral>
		<div class="container">
			<div class="card">
				<cpconsultaprocessual></cpconsultaprocessual>
			</div>
		</div>
		<br>
	</div>
@endsection