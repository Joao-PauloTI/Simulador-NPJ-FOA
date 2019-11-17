<template>
	<div class="container">
		<h1>Cadastro de Representante de Réu</h1>
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
					<!-- Parte -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>* Parte</strong>
								</span>
								<select class="custom-select" v-model="rrParte" name="rr_parte">
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
					<!-- Pessoa Física ou Jurídica -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>Pessoa Física ou Jurídica</strong>
								</span>
								<select class="custom-select" v-model="rrPessoa" v-on:change="gerarModeloRepresentanteReu">
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
								<select class="custom-select" v-model="rrSexo" name="rr_sexo">
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
									v-model="rrCpf"
									name="rr_cpf"
									v-on:change="gerarModeloRepresentanteReu"
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
								<input type="text" class="form-control" v-model="rrNome" />
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
								<select class="custom-select" v-model="rrDocumento" name="rr_documento">
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
									v-model="rrNumeroIdentificacao"
									name="rr_numeroIdentificacao"
									v-if="rrDocumento === ''"
									v-mask="'#################'"
								/>
								<input
									type="text"
									class="form-control"
									v-model="rrNumeroIdentificacao"
									name="rr_numeroIdentificacao"
									v-else-if="rrDocumento === 'Passaporte'"
									v-mask
								/>
								<input
									type="text"
									class="form-control"
									v-model="rrNumeroIdentificacao"
									name="rr_numeroIdentificacao"
									v-else-if="rrDocumento === 'Registro Geral'"
									v-mask="'##.###.###-#'"
								/>
								<input
									type="text"
									class="form-control"
									v-model="rrNumeroIdentificacao"
									name="rr_numeroIdentificacao"
									v-else-if="rrDocumento === 'Carteira Nacional de Habilitação'"
									v-mask="'###########'"
								/>
								<input
									type="text"
									class="form-control"
									v-model="rrNumeroIdentificacao"
									name="rr_numeroIdentificacao"
									v-else-if="rrDocumento === 'Carteira de Trabalho'"
									v-mask="'###.#####.##-#'"
								/>
								<input
									type="text"
									class="form-control"
									v-model="rrNumeroIdentificacao"
									name="rr_numeroIdentificacao"
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
								<input type="text" class="form-control" v-model="rrEmissor" name="rr_emissor" />
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
									type="text"
									class="form-control"
									v-model="rrEmissao"
									name="rr_emissao"
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
									v-model="rrTelefone"
									name="rr_telefone"
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
								<input type="email" class="form-control" v-model="rrEmail" name="rr_email" />
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
					<!-- Endereco Incerto -->
					<div id="alinhado">
						<div>
							<div class="custom-control custom-control-inline custom-checkbox">
								<input
									type="checkbox"
									class="custom-control-input"
									v-model="rrIncerto"
									name="rr_incerto"
									value="Endereco Incerto"
									id="CRR_e1"
								/>
								<label class="custom-control-label" for="CRR_e1">
									<strong>Endereco Incerto</strong>
								</label>
							</div>
						</div>
					</div>
					<br />
					<!-- CEP -->
					<div id="alinhado">
						<div class="form-inline">
							<div class="col-xs-2">
								<span>
									<strong>* CEP</strong>
								</span>
								<input type="text" class="form-control" v-mask="'#####-###'" v-model="rrCep" name="rr_cep" />
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
								<input type="text" class="form-control" v-model="rrEstado" name="rr_estado" />
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
								<input type="text" class="form-control" v-model="rrCidade" name="rr_cidade" />
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
								<input type="text" class="form-control" v-model="rrBairro" name="rr_bairro" />
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
								<input type="text" class="form-control" v-model="rrTipoLogradouro" name="rr_tipoLogradouro" />
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
								<input type="text" class="form-control" v-model="rrLogradouro" name="rr_logradouro" />
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
								<input type="text" class="form-control" v-model="rrNumeroEndereco" name="rr_numeroEndereco" />
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
								<input type="text" class="form-control" v-model="rrComplemento" name="rr_complemento" />
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
								<select class="custom-select" v-model="rrTipoEndereco" name="rr_tipoEndereco">
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
								<textarea rows="3" class="form-control" v-model="rrReferencia" name="rr_referencia"></textarea>
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
									v-model="rrComprovante"
									name="rr_comprovante"
									value="O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial"
									id="CRR_e2"
								/>
								<label
									class="custom-control-label"
									for="CRR_e2"
								>O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial?</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br />
		<!--Botões SALVAR/FECHAR-->
		<div align="center">
			<button
				type="button"
				@click="novoRepresentanteReu"
				data-dismiss="modal"
				class="btn btn-primary"
			>SALVAR</button>
			<button type="button" data-dismiss="modal" class="btn btn-danger">FECHAR</button>
		</div>
	</div>
</template>
<script>
export default {
	name: "crrmodal",
	data: function() {
		return {
			rrParte: "",
			rrPessoa: "",
			rrSexo: "",
			rrCpf: "",
			rrNome: "",
			rrMenor: "",
			rrDocumento: "",
			rrNumeroIdentificacao: "",
			rrEmissor: "",
			rrEmissao: "",
			rrTelefone: "",
			rrEmail: "",
			rrIncerto: "",
			rrCep: "",
			rrEstado: "",
			rrCidade: "",
			rrBairro: "",
			rrTipoLogradouro: "",
			rrLogradouro: "",
			rrNumeroEndereco: "",
			rrComplemento: "",
			rrTipoEndereco: "",
			rrReferencia: "",
			rrComprovante: ""
		};
	},
	methods: {
		ajuda: function() {
			alert(
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
			);
		},
		novoRepresentanteReu: function() {
			this.$emit(
				"crrDados",
				this.rrParte,
				this.rrPessoa,
				this.rrSexo,
				this.rrCpf,
				this.rrNome,
				this.rrMenor,
				this.rrDocumento,
				this.rrNumeroIdentificacao,
				this.rrEmissor,
				this.rrEmissao,
				this.rrTelefone,
				this.rrEmail,
				this.rrIncerto,
				this.rrCep,
				this.rrEstado,
				this.rrCidade,
				this.rrBairro,
				this.rrTipoLogradouro,
				this.rrLogradouro,
				this.rrNumeroEndereco,
				this.rrComplemento,
				this.rrTipoEndereco,
				this.rrReferencia,
				this.rrComprovante
			);
		},
		limparRepresentanteReuModal: function() {
			(this.rrParte = ""),
				(this.rrPessoa = ""),
				(this.rrSexo = ""),
				(this.rrCpf = ""),
				(this.rrNome = ""),
				(this.rrMenor = ""),
				(this.rrDocumento = ""),
				(this.rrNumeroIdentificacao = ""),
				(this.rrEmissor = ""),
				(this.rrEmissao = ""),
				(this.rrTelefone = ""),
				(this.rrEmail = ""),
				(this.rrIncerto = ""),
				(this.rrCep = ""),
				(this.rrEstado = ""),
				(this.rrCidade = ""),
				(this.rrBairro = ""),
				(this.rrTipoLogradouro = ""),
				(this.rrLogradouro = ""),
				(this.rrNumeroEndereco = ""),
				(this.rrComplemento = ""),
				(this.rrTipoEndereco = ""),
				(this.rrReferencia = ""),
				(this.rrComprovante = "");
		},
		gerarModeloRepresentanteReu: function() {
			if (
				this.rrPessoa === "Pessoa Física" &&
				this.rrCpf === "555.555.555-55"
			) {
				this.rrParte = "Representante";
				this.rrSexo = "Masculino";
				this.rrNome = "José Luís Santos Andrade";
				this.rrDocumento = "Registro Geral";
				this.rrNumeroIdentificacao = "74.223.569-8";
				this.rrEmissor = "DETRAN-RJ";
				this.rrEmissao = "14/09/1988";
				this.rrTelefone = "(24)99988-1231";
				this.rrEmail = "jose@email.com";
				this.rrCep = "65481-254";
				this.rrEstado = "Rio de Janeiro";
				this.rrCidade = "Volta Redonda";
				this.rrBairro = "Vila Santa Secília";
				this.rrTipoLogradouro = "Rua";
				this.rrLogradouro = "Trinta e Três";
				this.rrNumeroEndereco = "1494";
				this.rrTipoEndereco = "Residencial";
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
