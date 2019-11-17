<template>
	<div class="container">
		<h1>Cadastro de Representante de Autor</h1>
		<hr />
		<div class="card">
			<div class="card-header">
				<h5>
					<strong>Dados Pessoais</strong>
					<a href="#ajuda" v-on:click="ajuda()">(?)</a>
				</h5>
			</div>
			<div class="card-body">
				<div class="container">
					<div align="center">
						<!--Opções de marcar-->
						<div>
							<div class="custom-control custom-control-inline custom-checkbox">
								<input
									type="checkbox"
									class="custom-control-input"
									v-model="raIncapaz"
									name="ra_incapaz"
									value="Incapaz"
									id="CRA_dP1"
								/>
								<label class="custom-control-label" for="CRA_dP1">Incapaz</label>
							</div>
							<div class="custom-control custom-control-inline custom-checkbox">
								<input
									type="checkbox"
									class="custom-control-input"
									v-model="raMassa"
									name="ra_massa"
									value="Massa Falida"
									id="CRA_dP2"
								/>
								<label class="custom-control-label" for="CRA_dP2">Massa Falida</label>
							</div>
							<div class="custom-control custom-control-inline custom-checkbox">
								<input
									type="checkbox"
									class="custom-control-input"
									v-model="raInsolvente"
									name="ra_insolvente"
									value="Insolvente Civil"
									id="CRA_dP3"
								/>
								<label class="custom-control-label" for="CRA_dP3">Insolvente Civil</label>
							</div>
							<div class="custom-control custom-control-inline custom-checkbox">
								<input
									type="checkbox"
									class="custom-control-input"
									v-model="raPreso"
									name="ra_preso"
									value="Preso"
									id="CRA_dP4"
								/>
								<label class="custom-control-label" for="CRA_dP4">Preso</label>
							</div>
							<div class="custom-control custom-control-inline custom-checkbox">
								<input
									type="checkbox"
									class="custom-control-input"
									v-model="raEspolio"
									name="ra_espolio"
									value="Espólio com interesse de Incapaz"
									id="CRA_dP5"
								/>
								<label class="custom-control-label" for="CRA_dP5">Espólio com interesse de Incapaz</label>
							</div>
							<div class="custom-control custom-control-inline custom-checkbox">
								<input
									type="checkbox"
									class="custom-control-input"
									v-model="raCondominio"
									name="ra_condominio"
									value="Condomínio"
									id="CRA_dP6"
								/>
								<label class="custom-control-label" for="CRA_dP6">Condomínio</label>
							</div>
						</div>
					</div>
					<br />
					<!-- Parte -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>* Parte</strong>
								</span>
								<select class="custom-select" v-model="raParte" name="ra_parte">
									<option value>Escolha um tipo</option>
									<option value="Curador">Curador</option>
									<option value="Síndico">Síndico</option>
									<option value="Tutor">Tutor</option>
									<option value="Assistente">Assistente</option>
									<option value="Representante">Representante</option>
									<option value="Procurador">Procurador</option>
									<option value="Amicus Curiae">Amicus Curiae</option>
									<option value="Escritório de Advocacia">Escritório de Advocacia</option>
								</select>
							</div>
						</div>
					</div>
					<br />
					<!-- Ministério Público -->
					<div id="alinhado">
						<div>
							<div class="custom-control custom-control-inline custom-checkbox">
								<input
									type="checkbox"
									class="custom-control-input"
									v-model="raMinisterio"
									name="ra_ministerio"
									value="Ministério Público?"
									id="CRA_dP7"
								/>
								<label class="custom-control-label" for="CRA_dP7">
									<strong>Ministério Público?</strong>
								</label>
							</div>
						</div>
					</div>
					<br />
					<!-- Pessoa Física ou Jurídica -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>Pessoa Física ou Jurídica</strong>
								</span>
								<select
									class="custom-select"
									v-model="raPessoa"
									v-on:change="gerarModeloRepresentanteAutor"
								>
									<option value>Escolha um tipo de pessoa</option>
									<option value="Pessoa Física">Pessoa Física</option>
									<option value="Pessoa Jurídica">Pessoa Jurídica</option>
								</select>
							</div>
						</div>
					</div>
					<br />
					<!-- Sexo -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>* Sexo</strong>
								</span>
								<select class="custom-select" v-model="raSexo" name="ra_sexo">
									<option value>Escolha um sexo</option>
									<option value="Masculino">Masculino</option>
									<option value="Feminino">Feminino</option>
								</select>
							</div>
						</div>
					</div>
					<br />
					<!-- CPF/CNPJ-->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>* CPF/CNPJ</strong>
								</span>
								<input
									type="text"
									class="form-control"
									v-model="raCpf"
									name="ra_cpf"
									v-on:change="gerarModeloRepresentanteAutor"
									v-mask="['###.###.###-##', '##.###.###/####-##']"
								/>
							</div>
						</div>
					</div>
					<br />
					<!-- Nome-->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>* Nome</strong>
								</span>
								<input type="text" class="form-control" v-model="raNome" />
							</div>
						</div>
					</div>
					<br />
					<!-- Documento de identificação -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>Documento de identificação</strong>
								</span>
								<select class="custom-select" v-model="raDocumento" name="ra_documento">
									<option value>Escolha um tipo</option>
									<option value="Registro Geral">Registro Geral</option>
									<option value="Carteira Nacional de Habilitação">Carteira Nacional de Habilitação</option>
									<option value="Passaporte">Passaporte</option>
									<option value="Carteira de Trabalho">Carteira de Trabalho</option>
									<option
										value="Certificado de Dispensa de Incorporação"
									>Certificado de Dispensa de Incorporação</option>
								</select>
							</div>
						</div>
					</div>
					<br />
					<!-- Número -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>Número</strong>
								</span>
								<input
									type="text"
									class="form-control"
									v-model="raNumeroIdentificacao"
									name="ra_numeroIdentificacao"
									v-if="raDocumento === ''"
									v-mask="'#################'"
								/>
								<input
									type="text"
									class="form-control"
									v-model="raNumeroIdentificacao"
									name="ra_numeroIdentificacao"
									v-else-if="raDocumento === 'Passaporte'"
									v-mask
								/>
								<input
									type="text"
									class="form-control"
									v-model="raNumeroIdentificacao"
									name="ra_numeroIdentificacao"
									v-else-if="raDocumento === 'Registro Geral'"
									v-mask="'##.###.###-#'"
								/>
								<input
									type="text"
									class="form-control"
									v-model="raNumeroIdentificacao"
									name="ra_numeroIdentificacao"
									v-else-if="raDocumento === 'Carteira Nacional de Habilitação'"
									v-mask="'###########'"
								/>
								<input
									type="text"
									class="form-control"
									v-model="raNumeroIdentificacao"
									name="ra_numeroIdentificacao"
									v-else-if="raDocumento === 'Carteira de Trabalho'"
									v-mask="'###.#####.##-#'"
								/>
								<input
									type="text"
									class="form-control"
									v-model="raNumeroIdentificacao"
									name="ra_numeroIdentificacao"
									v-else
									v-mask="'############'"
								/>
							</div>
						</div>
					</div>
					<br />
					<!-- Órgão Emissor -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>Órgão Emissor</strong>
								</span>
								<input type="text" class="form-control" v-model="raEmissor" name="ra_emissor" />
							</div>
						</div>
					</div>
					<br />
					<!-- Data de Emissão -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>Data de Emissão</strong>
								</span>
								<input
									type="string"
									class="form-control"
									v-model="raEmissao"
									name="ra_emissao"
									v-mask="'##/##/####'"
								/>
							</div>
						</div>
					</div>
					<br />
					<!-- Telefone -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>Telefone</strong>
								</span>
								<input
									type="tel"
									class="form-control"
									v-mask="'(##)#####-####'"
									v-model="raTelefone"
									name="ra_telefone"
								/>
							</div>
						</div>
					</div>
					<br />
					<!-- E-mail -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>E-mail</strong>
								</span>
								<input type="email" class="form-control" v-model="raEmail" name="ra_email" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br />
		<div class="card">
			<div class="card-header">
				<h5>
					<strong>Endereço</strong>
					<a href="#ajuda" v-on:click="ajuda()">(?)</a>
				</h5>
			</div>
			<div class="card-body">
				<div class="container">
					<!-- CEP -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>* CEP</strong>
								</span>
								<input type="text" class="form-control" v-mask="'#####-###'" v-model="raCep" name="ra_cep" />
								<a href>
									<ins>verificar CEP</ins>
								</a>
								<a href>
									<ins>Correios</ins>
								</a>
							</div>
						</div>
					</div>
					<br />
					<!-- Estado -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>* Estado</strong>
								</span>
								<input type="text" class="form-control" v-model="raEstado" name="ra_estado" />
							</div>
						</div>
					</div>
					<br />
					<!-- Cidade -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>* Cidade</strong>
								</span>
								<input type="text" class="form-control" v-model="raCidade" name="ra_cidade" />
							</div>
						</div>
					</div>
					<br />
					<!-- Bairro -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>* Bairro</strong>
								</span>
								<input type="text" class="form-control" v-model="raBairro" name="ra_bairro" />
							</div>
						</div>
					</div>
					<br />
					<!-- Tipo de Logradouro -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>* Tipo de Logradouro</strong>
								</span>
								<input type="text" class="form-control" v-model="raTipoLogradouro" name="ra_tipoLogradouro" />
							</div>
						</div>
					</div>
					<br />
					<!-- Logradouro-->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>* Logradouro</strong>
								</span>
								<input type="text" class="form-control" v-model="raLogradouro" name="ra_logradouro" />
							</div>
						</div>
					</div>
					<br />
					<!-- Número -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>* Número</strong>
								</span>
								<input type="text" class="form-control" v-model="raNumeroEndereco" name="ra_numeroEndereco" />
							</div>
						</div>
					</div>
					<br />
					<!-- Complemento-->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>Complemento</strong>
								</span>
								<input type="text" class="form-control" v-model="raComplemento" name="ra_complemento" />
							</div>
						</div>
					</div>
					<br />
					<!-- Tipo de Endereço -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>* Tipo de Endereço</strong>
								</span>
								<select class="custom-select" v-model="raTipoEndereco" name="ra_tipoEndereco">
									<option value>Escolha o tipo de endereço</option>
									<option value="Residencial">Residencial</option>
									<option value="Empresarial">Empresarial</option>
									<option value="Comercial">Comercial</option>
								</select>
							</div>
						</div>
					</div>
					<br />
					<!-- Referência-->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>Referência</strong>
								</span>
								<textarea rows="3" class="form-control" v-model="raReferencia" name="ra_referencia"></textarea>
							</div>
						</div>
					</div>
					<br />
					<!-- Õpção extra -->
					<div id="alinhado">
						<div>
							<div class="custom-control custom-control-inline custom-checkbox">
								<input
									type="checkbox"
									class="custom-control-input"
									v-model="raComprovante"
									name="ra_comprovante"
									value="O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial"
									id="CRA_e1"
								/>
								<label
									class="custom-control-label"
									for="CRA_e1"
								>O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial?</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br />
		<div class="card">
			<div class="card-header">
				<h5>
					<strong>Dados Complementares</strong>
					<a href="#ajuda" v-on:click="ajuda()">(?)</a>
				</h5>
			</div>
			<div class="card-body">
				<div class="container">
					<!-- Estado Civil -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>Estado Civil</strong>
								</span>
								<select class="custom-select" v-model="raEstadoCivil" name="ra_estadoCivil">
									<option value>Escolha o estado civil</option>
									<option value="Solteiro">Solteiro</option>
									<option value="Casado">Casado</option>
									<option value="Viúvo">Viúvo</option>
									<option value="Separado Judicialmente">Separado Judicialmente</option>
									<option value="Divorciado">Divorciado</option>
								</select>
							</div>
						</div>
					</div>
					<br />
					<!-- Profissão -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>Profissão</strong>
								</span>
								<input type="text" class="form-control" v-model="raProfissao" name="ra_profissao" />
							</div>
						</div>
					</div>
					<br />
					<!-- Nacionalidade -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>Nacionalidade</strong>
								</span>
								<input
									type="text"
									class="form-control"
									v-model="raNacionalidade"
									name="ra_nacionalidade"
									value="Brasileira"
								/>
							</div>
						</div>
					</div>
					<br />
					<!-- Naturalidade -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>Escolha a Naturalidade</strong>
								</span>
								<input
									type="text"
									class="form-control"
									placeholder="Estado"
									v-model="raEstadoNaturalidade"
									name="ra_estadoNaturalidade"
								/>
								<input
									type="text"
									class="form-control"
									placeholder="Cidade"
									v-model="raCidadeNaturalidade"
									name="ra_cidadeNaturalidade"
								/>
							</div>
						</div>
					</div>
					<br />
					<!-- Nome do Pai-->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>Nome do Pai</strong>
								</span>
								<input type="text" class="form-control" v-model="raPai" name="ra_pai" />
							</div>
						</div>
					</div>
					<br />
					<!-- Nome da Mãe-->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>Nome da Mãe</strong>
								</span>
								<input type="text" class="form-control" v-model="raMae" name="ra_mae" />
							</div>
						</div>
					</div>
					<br />
					<!-- Data de Nascimento -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>* Data de Nascimento</strong>
								</span>
								<input
									type="string"
									class="form-control"
									v-model="raNascimento"
									name="ra_nascimento"
									v-mask="'##/##/####'"
								/>
							</div>
						</div>
					</div>
					<br />
				</div>
			</div>
		</div>
		<br />
		<!--Botões SALVAR/FECHAR-->
		<div align="center">
			<button
				type="button"
				@click="novoRepresentanteAutor"
				data-dismiss="modal"
				class="btn btn-primary"
			>SALVAR</button>
			<button type="button" data-dismiss="modal" class="btn btn-danger">FECHAR</button>
		</div>
	</div>
</template>
<script>
export default {
	name: "cramodal",
	data: function() {
		return {
			raIncapaz: "",
			raMassa: "",
			raInsolvente: "",
			raPreso: "",
			raEspolio: "",
			raCondominio: "",
			raParte: "",
			raMinisterio: "",
			raPessoa: "",
			raSexo: "",
			raCpf: "",
			raNome: "",
			raDocumento: "",
			raNumeroIdentificacao: "",
			raEmissor: "",
			raEmissao: "",
			raTelefone: "",
			raEmail: "",
			raCep: "",
			raEstado: "",
			raCidade: "",
			raBairro: "",
			raTipoLogradouro: "",
			raLogradouro: "",
			raNumeroEndereco: "",
			raComplemento: "",
			raTipoEndereco: "",
			raReferencia: "",
			raComprovante: "",
			raEstadoCivil: "",
			raProfissao: "",
			raNacionalidade: "Brasileira",
			raEstadoNaturalidade: "",
			raCidadeNaturalidade: "",
			raPai: "",
			raMae: "",
			raNascimento: ""
		};
	},
	methods: {
		ajuda: function() {
			alert(
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
			);
		},
		novoRepresentanteAutor: function() {
			this.$emit(
				"craDados",
				this.raIncapaz,
				this.raMassa,
				this.raInsolvente,
				this.raPreso,
				this.raEspolio,
				this.raCondominio,
				this.raParte,
				this.raMinisterio,
				this.raPessoa,
				this.raSexo,
				this.raCpf,
				this.raNome,
				this.raDocumento,
				this.raNumeroIdentificacao,
				this.raEmissor,
				this.raEmissao,
				this.raTelefone,
				this.raEmail,
				this.raCep,
				this.raEstado,
				this.raCidade,
				this.raBairro,
				this.raTipoLogradouro,
				this.raLogradouro,
				this.raNumeroEndereco,
				this.raComplemento,
				this.raTipoEndereco,
				this.raReferencia,
				this.raComprovante,
				this.raEstadoCivil,
				this.raProfissao,
				this.raNacionalidade,
				this.raEstadoNaturalidade,
				this.raCidadeNaturalidade,
				this.raPai,
				this.raMae,
				this.raNascimento
			);
		},
		limparRepresentanteAutorModal: function() {
			(this.raIncapaz = ""),
				(this.raMassa = ""),
				(this.raInsolvente = ""),
				(this.raPreso = ""),
				(this.raEspolio = ""),
				(this.raCondominio = ""),
				(this.raParte = ""),
				(this.raMinisterio = ""),
				(this.raPessoa = ""),
				(this.raSexo = ""),
				(this.raCpf = ""),
				(this.raNome = ""),
				(this.raDocumento = ""),
				(this.raNumeroIdentificacao = ""),
				(this.raEmissor = ""),
				(this.raEmissao = ""),
				(this.raTelefone = ""),
				(this.raEmail = ""),
				(this.raCep = ""),
				(this.raEstado = ""),
				(this.raCidade = ""),
				(this.raBairro = ""),
				(this.raTipoLogradouro = ""),
				(this.raLogradouro = ""),
				(this.raNumeroEndereco = ""),
				(this.raComplemento = ""),
				(this.raTipoEndereco = ""),
				(this.raReferencia = ""),
				(this.raComprovante = ""),
				(this.raEstadoCivil = ""),
				(this.raProfissao = ""),
				(this.raNacionalidade = ""),
				(this.raEstadoNaturalidade = ""),
				(this.raCidadeNaturalidade = ""),
				(this.raPai = ""),
				(this.raMae = ""),
				(this.raNascimento = "");
		},
		gerarModeloRepresentanteAutor: function() {
			if (
				this.raPessoa === "Pessoa Física" &&
				this.raCpf === "222.222.222-22"
			) {
				this.raParte = "Representante";
				this.raSexo = "Feminino";
				this.raNome = "Ana Maria Ferreira da Silva";
				this.raDocumento = "Registro Geral";
				this.raNumeroIdentificacao = "14.658.113-2";
				this.raEmissor = "DETRAN-RJ";
				this.raEmissao = "28/04/1990";
				this.raTelefone = "(24)99973-4441";
				this.raEmail = "ana@email.com";
				this.raCep = "12154-187";
				this.raEstado = "Rio de Janeiro";
				this.raCidade = "Volta Redonda";
				this.raBairro = "Santo Agostinho";
				this.raTipoLogradouro = "Rua";
				this.raLogradouro = "José Peixoto";
				this.raNumeroEndereco = "459";
				this.raTipoEndereco = "Residencial";
				this.raEstadoCivil = "Casado";
				this.raProfissao = "Consultora de Vendas";
				this.raNacionalidade = "Brasileira";
				this.raEstadoNaturalidade = "Rio de Janeiro";
				this.raCidadeNaturalidade = "Volta Redonda";
				this.raPai = "Isadora Ferreira Castro";
				this.raMae = "Joaquim Barros Ferreira Castro";
				this.raNascimento = "02/04/1973";
			}
		}
	}
};
</script>
<style type="text/css" scoped>
#alinhado {
	margin-left: 30%;
}
</style>
