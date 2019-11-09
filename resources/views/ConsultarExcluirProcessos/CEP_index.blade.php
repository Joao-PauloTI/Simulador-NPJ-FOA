@extends('layout')
@section('titulo') Consultar/Excluir Processos @endsection

@section('conteudo')
	<div id="app">
		<pimenulateral id="PI_mostrarEsconderMenu"></pimenulateral>
		<div class="container">
			<div class="card">
				<div class="card-header">
					<h1>Consultar/Excluir Processos</h1>
				</div>
				<div class="card-body">
					<form action="{{ route('consulta.todos') }}" method="post">
						@csrf
						<p>Selecione abaixo os dados para sua consulta:</p>
						<div class="form-inline">
							<div class="col-lg-6">
								<span><strong>Instância: </strong></span>
								<select class="custom-select" name="comarca_instancia">
									<option value="Todas">Todas</option>
									<option value="1ª Instância">1ª Instância</option>
									<option value="2ª Instância">2ª Instância</option>
									<option value="Precatórios Judiciais">Precatórios Judiciais</option>
								</select>
							</div>
						</div>
						<br>
						<div class="form-inline">
							<div class="col-lg-6">
								<span><strong>Comarca: </strong></span>
								<select class="custom-select" name="comarca_consulta">
									<option value="Todas">Todas</option>
									<option value="Angra dos Reis">Comarca de Angra dos Reis</option>
									<option value="Paraty">Comarca de Paraty</option>
									<option value="Barra do Piraí">Comarca de Barra do Piraí</option>
									<option value="Rio das Flores">Comarca de Rio das Flores</option>
									<option value="Valença">Comarca de Valença</option>
									<option value="Barra Mansa">Comarca de Barra Mansa</option>
									<option value="Itatiaia">Comarca de Itatiaia</option>
									<option value="Pinheiral">Comarca de Pinheiral</option>
									<option value="Porto Real">Comarca de Porto Real</option>
									<option value="Quatis">Comarca de Quatis</option>
									<option value="Resende">Comarca de Resende</option>
									<option value="Rio Claro">Comarca de Rio Claro</option>
									<option value="Piraí">Comarca de Piraí</option>
									<option value="Engenheiro Paulo de Frontin">Comarca de Engenheiro Paulo de Frontin</option>
									<option value="Mendes">Comarca de Mendes</option>
									<option value="Miguel Pereira">Comarca de Miguel Pereira</option>
									<option value="Paracambi">Comarca de Paracambi</option>
									<option value="Paty do Alferes">Comarca de Paty do Alferes</option>
									<option value="Vassouras">Comarca de Vassouras</option>
									<option value="Areal">Comarca de Areal</option>
									<option value="Comendador Levy Gasparian">Comarca de Comendador Levy Gasparian</option>
									<option value="Paraíba do Sul">Comarca de Paraíba do Sul</option>
									<option value="Sapucaia">Comarca de Sapucaia</option>
									<option value="Três Rios">Comarca de Três Rios</option>
									<option value="Volta Redonda">Comarca de Volta Redonda</option>
								</select>
							</div>
						</div>
						<br>
						<div align="center">
							<button type="submit" class="btn btn-primary"><strong>CONSULTAR</strong></button>
						</div>
					</form>
				</div>
				<br>
			</div>
		</div>
		<br>
	</div>
@endsection