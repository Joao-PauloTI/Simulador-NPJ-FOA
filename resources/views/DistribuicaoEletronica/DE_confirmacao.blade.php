<!DOCTYPE html>
<html lang="en">
<head>
	<!--Bootstrap CSS-->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!--Font Awesome Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--CSRF-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Guia de Protocolo</title>
</head>
<body>
	<form action="{{ route('processo.salvar') }}" target="_blank" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="container">
			<div align="center" style="background-color: #cccccc">
				<br>
				<h5 style="color:red">Antes de imprimir, verifique as informações e confirme clicando no botão abaixo.</h5>
				<h5 style="color:red">Após a confirmação não será possível alterar esta petição inicial.</h5>
				<button type="submit" onclick="window.close()" class="btn btn-success"><i class='fas fa-check'></i> <strong>CONFIRMAR</strong></button>
				<button type="button" onclick="window.close()" class="btn btn-danger"><i class='fas fa-times'></i> <strong>VOLTAR</strong></button>
				<br><br>
			</div>
			<hr style="background-color:black; height:1px; margin-top:5px; margin-bottom:5px;">
			<div>
				<h5 align="center" style="background-color: #cccccc"><strong>Distribuição Eletrônica de Petição Inicial</strong></h5>
				<table class="table table-borderless table-sm">
					<tr>
						<td><strong>Distribuidor:</strong> {{ Session::get('sessaoProcesso.p_distribuicao') }}</td>
					</tr>
					<tr>
						<td><strong>Competência:</strong> {{ Session::get('sessaoProcesso.p_competencia') }}</td>
						<td><strong>Classe:</strong> {{ Session::get('sessaoProcesso.p_classe') }}</td>
					</tr>
					<tr>
						<td><strong>Valor da Causa:</strong> {{ Session::get('sessaoProcesso.p_valor') }}</td>
						<td><strong>Justiça Gratuita:</strong> {{ Session::get('sessaoProcesso.p_grerjMotivo') }}</td>
					</tr>
				</table>
			</div>
			<div>
				<h5 align="center" style="background-color: #cccccc"><strong>Advogado / Representante</strong></h5>
				<table class="table table-borderless table-sm">
					@if(Session::get('sessaoAdvogados.ad_numeroOAB') !== null)
						@foreach(Session::get('sessaoAdvogados.ad_numeroOAB') as $key => $numero)
							<tr>
								<td><strong>{{ Session::get('sessaoAdvogados.ad_estadoOAB')[$key] }}{{ $numero }}</strong> - {{ Session::get('sessaoAdvogados.ad_nome')[$key] }}</td>
							</tr>
						@endforeach
					@endif
					@if(Session::get('sessaoDefensores.dp_matricula') !== null)
						@foreach(Session::get('sessaoDefensores.dp_matricula') as $key => $matricula)
							<tr>
								<td><strong>{{ $matricula }}</strong> - {{ Session::get('sessaoDefensores.dp_nome')[$key] }}</td>
							</tr>
						@endforeach
					@endif
				</table>
			</div>
			<div>
				<h5 align="center" style="background-color: #cccccc"><strong>Parte(s)</strong></h5>
				<table class="table table-borderless table-sm">
					@if(Session::get('sessaoReu.r_cpf') !== null)
						<tr>
							<td>
								<strong>Réu: {{ Session::get('sessaoReu.r_nome') }}</strong>,
								Sexo: {{ Session::get('sessaoReu.r_sexo') }},
								CPF: {{ Session::get('sessaoReu.r_cpf') }}
								@if(Session::get('sessaoReu.r_email') !== null),
								E-mail: {{ Session::get('sessaoReu.r_email') }} 
								@endif <br> 
								Endereço: {{ Session::get('sessaoReu.r_tipoLogradouro') }} {{ Session::get('sessaoReu.r_logradouro') }},
								nº {{ Session::get('sessaoReu.r_numeroEndereco') }}
								@if(Session::get('sessaoReu.r_complemento') !== null),
								{{ Session::get('sessaoReu.r_complemento') }}
								@endif,
								{{ Session::get('sessaoReu.r_cidade') }},
								Bairro: {{ Session::get('sessaoReu.r_bairro') }},
								CEP: {{ Session::get('sessaoReu.r_cep') }}
							</td>
						</tr>
					@endif
					@if(Session::get('sessaoReuJuridico.rj_cnpj') !== null)
						<tr>
							<td>
								<strong>Réu: {{ Session::get('sessaoReuJuridico.rj_nome') }}</strong>,
								CNPJ: {{ Session::get('sessaoReuJuridico.rj_cnpj') }} <br> 
								Endereço: {{ Session::get('sessaoReuJuridico.rj_tipoLogradouro') }} {{ Session::get('sessaoReuJuridico.rj_logradouro') }},
								nº {{ Session::get('sessaoReuJuridico.rj_numeroEndereco') }}
								@if(Session::get('sessaoReuJuridico.rj_complemento') !== null),
								{{ Session::get('sessaoReuJuridico.rj_complemento') }}
								@endif,
								{{ Session::get('sessaoReuJuridico.rj_cidade') }},
								Bairro: {{ Session::get('sessaoReuJuridico.rj_bairro') }},
								CEP: {{ Session::get('sessaoReuJuridico.rj_cep') }}
							</td>
						</tr>
					@endif
					@if(Session::get('sessaoRepresentanteReu.rr_cpf') !== null)
						<tr>
							<td>
								<strong>Representante Legal: {{ Session::get('sessaoRepresentanteReu.rr_nome') }}</strong>,
								@if(Session::get('sessaoRepresentanteReu.rr_sexo'))
								Sexo: {{ Session::get('sessaoRepresentanteReu.rr_sexo') }},
								@endif
								CPF/CNPJ: {{ Session::get('sessaoRepresentanteReu.rr_cpf') }},
								@if(Session::get('sessaoRepresentanteReu.rr_email') !== null)
								E-mail: {{ Session::get('sessaoRepresentanteReu.rr_email') }}
								@endif <br> 
								Endereço: {{ Session::get('sessaoRepresentanteReu.rr_tipoLogradouro') }} {{ Session::get('sessaoRepresentanteReu.rr_logradouro') }},
								nº {{ Session::get('sessaoRepresentanteReu.rr_numeroEndereco') }}
								@if(Session::get('sessaoRepresentanteReu.rr_complemento') !== null),
								{{ Session::get('sessaoRepresentanteReu.rr_complemento') }}
								@endif,
								{{ Session::get('sessaoRepresentanteReu.rr_cidade') }},
								Bairro: {{ Session::get('sessaoRepresentanteReu.rr_bairro') }},
								CEP: {{ Session::get('sessaoRepresentanteReu.rr_cep') }}
							</td>
						</tr>
					@endif
					@if(Session::get('sessaoAutor.a_cpf') !== null)
						<tr>
							<td>
								<strong>Autor: {{ Session::get('sessaoAutor.a_nome') }}</strong>,
								@if(Session::get('sessaoAutor.a_sexo') !== null)
								Sexo: {{ Session::get('sessaoAutor.a_sexo') }},
								@endif
								CPF/CNPJ: {{ Session::get('sessaoAutor.a_cpf') }},
								Nacionalidade: {{ Session::get('sessaoAutor.a_nacionalidade') }},
								@if(Session::get('sessaoAutor.a_email') !== null)
								E-mail: {{ Session::get('sessaoAutor.a_email') }},
								@endif
								@if(Session::get('sessaoAutor.a_nascimento') !== null)
								Data de Nascimento: {{ Session::get('sessaoAutor.a_nascimento') }} 
								@endif <br> 
								Endereço: {{ Session::get('sessaoAutor.a_tipoLogradouro') }} {{ Session::get('sessaoAutor.a_logradouro') }},
								nº {{ Session::get('sessaoAutor.a_numeroEndereco') }},
								@if(Session::get('sessaoAutor.a_complemento') !== null)
								{{ Session::get('sessaoAutor.a_complemento') }},
								@endif
								{{ Session::get('sessaoAutor.a_cidade') }},
								Bairro: {{ Session::get('sessaoAutor.a_bairro') }},
								CEP: {{ Session::get('sessaoAutor.a_cep') }}
							</td>
						</tr>
					@endif
					@if(Session::get('sessaoRepresentanteAutor.ra_cpf') !== null)
						<tr>
							<td>
								<strong>Representante Legal: {{ Session::get('sessaoRepresentanteAutor.ra_nome') }}</strong>,
								@if(Session::get('sessaoRepresentanteAutor.ra_sexo') !== null)
								Sexo: {{ Session::get('sessaoRepresentanteAutor.ra_sexo') }},
								@endif
								CPF/CNPJ: {{ Session::get('sessaoRepresentanteAutor.ra_cpf') }},
								Nacionalidade: {{ Session::get('sessaoRepresentanteAutor.ra_nacionalidade') }},
								@if(Session::get('sessaoRepresentanteAutor.ra_email') !== null)
								E-mail: {{ Session::get('sessaoRepresentanteAutor.ra_email') }},
								@endif
								@if(Session::get('sessaoRepresentanteAutor.ra_nascimento') !== null)
								Data de Nascimento: {{ Session::get('sessaoRepresentanteAutor.ra_nascimento') }} 
								@endif <br> 
								Endereço: {{ Session::get('sessaoRepresentanteAutor.ra_tipoLogradouro') }} {{ Session::get('sessaoRepresentanteAutor.ra_logradouro') }},
								nº {{ Session::get('sessaoRepresentanteAutor.ra_numeroEndereco') }},
								@if(Session::get('sessaoRepresentanteAutor.ra_complemento') !== null)
								{{ Session::get('sessaoRepresentanteAutor.ra_complemento') }},
								@endif
								{{ Session::get('sessaoRepresentanteAutor.ra_cidade') }},
								Bairro: {{ Session::get('sessaoRepresentanteAutor.ra_bairro') }},
								CEP: {{ Session::get('sessaoRepresentanteAutor.ra_cep') }}
							</td>
						</tr>
					@endif
				</table>
			</div>
			<div>
				<h5 align="center" style="background-color: #cccccc"><strong>Documento(s)</strong></h5>
				<table class="table table-borderless table-sm">
					@if(is_array(Session::get('sessaoDocumentoAnexoPeticao')))
						@foreach(Session::get('sessaoDocumentoAnexoPeticao') as $key => $arquivo)
							@foreach($arquivo as $atributo => $valor)
								@if($atributo === 'dap_arquivo')
									<tr>
										<td><strong>Anexo - {{ $key + 1 }}: {{ $valor }}</strong></td>
									</tr>
								@endif
							@endforeach
						@endforeach
					@endif
					@if(Session::get('sessaoDocumentoPeticaoInicial.dpi_arquivo') !== null)
						<tr>
							<td><strong>Petição Inicial: {{ Session::get('sessaoDocumentoPeticaoInicial.dpi_arquivo') }}</strong></td>
						</tr>
					@endif
					@if(Session::get('sessaoDocumentoProcuracao.dpr_arquivo') !== null)
						<tr>
							<td><strong>Procuração: {{ Session::get('sessaoDocumentoProcuracao.dpr_arquivo') }}</strong></td>
						</tr>
					@endif
					@if(Session::get('sessaoDocumentoComprovanteResidencia.dcr_arquivo') !== null)
						<tr>
							<td><strong>Comprovante de Residência: {{ Session::get('sessaoDocumentoComprovanteResidencia.dcr_arquivo') }}</strong></td>
						</tr>
					@endif
					@if(Session::get('sessaoDocumentoCpf.dcpf_arquivo') !== null)
						<tr>
							<td><strong>CPF: {{ Session::get('sessaoDocumentoCpf.dcpf_arquivo') }}</strong></td>
						</tr>
					@endif
				</table>
			</div>
		</div>
	</form>
</body>
</html>