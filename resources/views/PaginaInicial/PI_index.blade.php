@extends('layout')
@section('titulo') Página Inicial @endsection

@section('conteudo')
	<div id="app">
		<pimenulateral id="PI_mostrarEsconderMenu"></pimenulateral>
		<div class="container">
			<div class="card">
		 		<pipainelavisos></pipainelavisos>
		 		<br>
		 	</div>
		 </div>	
	</div>
@endsection