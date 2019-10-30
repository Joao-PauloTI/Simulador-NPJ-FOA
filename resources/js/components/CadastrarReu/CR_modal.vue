<template>
    <div class="container">
        <h1>Cadastro de Réu - Pessoa Física</h1>
        <hr>
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Dados Pessoais</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <!-- Tipo -->
                    <p align="center"><strong>Tipo</strong> Réu - Pessoa Física</p>
                    <!-- Estrangeiro/Brasileiro -->
                    <div id="alinhado">
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="rEstrangeiro" name="r_estrangeiro" value="Estrangeiro e/ou brasileiro residente no exterior?" id="CR_dP1">
                                <label class="custom-control-label" for="CR_dP1"><strong>Estrangeiro e/ou brasileiro residente no exterior? </strong> </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Sexo -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Sexo </strong> </span>
                                <select class="custom-select" v-model="rSexo" name="r_sexo">
                                    <option value="">Escolha um sexo</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- CPF/CNPJ-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* CPF </strong> </span>
                                <input type="text" class="form-control" v-mask="'###.###.###-##'" v-model="rCpf" name="r_cpf">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nome-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Nome </strong> </span>
                                <input type="text" class="form-control" v-model="rNome">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Documento de identificação -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Documento de identificação </strong> </span>
                                <select class="custom-select" v-model="rDocumento" name="r_documento">
                                    <option value="">Escolha um tipo</option>
                                    <option value="Registro Geral">Registro Geral</option>
                                    <option value="Carteira Nacional de Habilitação">Carteira Nacional de Habilitação</option>
                                    <option value="Passaporte">Passaporte</option>
                                    <option value="Carteira de Trabalho">Carteira de Trabalho</option>
                                    <option value="Carteira de Identidade">Carteira de Identidade</option>
                                    <option value="Certificado de Dispensa de Incorporação">Certificado de Dispensa de Incorporação</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Número -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Número </strong> </span>
                                <input type="text" class="form-control" v-model="rNumeroIdentificacao" name="r_numeroIdentificacao">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Órgão Expedidor -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Órgão Expedidor </strong> </span>
                                <input type="text" class="form-control" v-model="rExpedidor" name="r_expedidor">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Data de emissão -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Data de Emissão </strong> </span>
                                <input type="text" class="form-control" v-model="rEmissao" name="r_emissao" v-mask="'##/##/####'">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- E-mail -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>E-mail </strong> </span>
                                <input type="email" class="form-control" v-model="rEmail" name="r_email">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
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
                                <input type="checkbox" class="custom-control-input" v-model="rIncerto" name="r_incerto" value="Endereco Incerto" id="CR_e1">
                                <label class="custom-control-label" for="CR_e1"><strong>Endereco Incerto </strong> </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- CEP -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* CEP </strong> </span>
                                <input type="text" class="form-control" v-mask="'#####-###'" v-model="rCep" name="r_cep">
                                <a href=""><ins> verificar CEP</ins> </a>
                                <a href=""><ins> Correios</ins> </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Estado -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Estado </strong> </span>
                                <input type="text" class="form-control" v-model="rEstado" name="r_estado">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Cidade -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Cidade </strong> </span>
                                <input type="text" class="form-control" v-model="rCidade" name="r_cidade">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Bairro -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Bairro </strong> </span>
                                <input type="text" class="form-control" v-model="rBairro" name="r_bairro">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Tipo de Logradouro -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Tipo de Logradouro </strong> </span>
                                <input type="text" class="form-control" v-model="rTipoLogradouro" name="r_tipoLogradouro">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Logradouro-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Logradouro </strong> </span>
                                <input type="text" class="form-control" v-model="rLogradouro" name="r_logradouro">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Número -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Número </strong> </span>
                                <input type="text" class="form-control" v-model="rNumeroEndereco" name="r_numeroEndereco">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Complemento-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Complemento </strong> </span>
                                <input type="text" class="form-control" v-model="rComplemento" name="r_complemento">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Tipo de Endereço -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Tipo de Endereço </strong> </span>
                                <select class="custom-select" v-model="rTipoEndereco" name="r_tipoEndereco">
                                    <option value="">Escolha o tipo de endereço</option>
                                    <option value="Residencial">Residencial</option>
                                    <option value="Empresarial">Empresarial</option>
                                    <option value="Comercial">Comercial</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Referência-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Referência </strong> </span>
                                <textarea rows="3" class="form-control" v-model="rReferencia" name="r_referencia"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Õpção extra -->
                    <div id="alinhado">
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="rComprovante" name="r_comprovante" value="O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial?" id="CR_E2">
                                <label class="custom-control-label" for="CR_E2">O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial? </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--Botões SALVAR/FECHAR-->
        <div align="center">
            <button type="button" @click="novoReu" data-dismiss="modal" class="btn btn-primary">SALVAR</button>
            <button type="button" data-dismiss="modal" class="btn btn-danger">FECHAR</button>
        </div>
    </div>
</template>
<script>
    export default {
    name: 'crmodal',
    data: function() {
        return {
            rEstrangeiro: '',
            rSexo: '',
            rCpf: '',
            rNome: '',
            rDocumento: '',
            rNumeroIdentificacao: '',
            rExpedidor: '',
            rEmissao: '',
            rEmail: '',
            rIncerto: '',
            rCep: '',
            rEstado: '',
            rCidade: '',
            rBairro: '',
            rTipoLogradouro: '',
            rLogradouro: '',
            rNumeroEndereco: '',
            rComplemento: '',
            rTipoEndereco: '',
            rReferencia: '',
            rComprovante: ''
        }
    },
    methods: {
        ajuda: function() {
            alert(
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")
        },
        novoReu: function() {
            this.$emit('crDados', this.rEstrangeiro, this.rSexo, this.rCpf, this.rNome, this.rDocumento, this.rNumeroIdentificacao, this.rExpedidor, this.rEmissao, this.rEmail, this.rIncerto, this.rCep, this.rEstado, this.rCidade, this.rBairro, this.rTipoLogradouro, this.rLogradouro, this.rNumeroEndereco, this.rComplemento, this.rTipoEndereco, this.rReferencia, this.rComprovante)
        },
        limparReuModal: function() {
            this.rEstrangeiro = '',
            this.rSexo = '',
            this.rCpf = '',
            this.rNome = '',
            this.rDocumento = '',
            this.rNumeroIdentificacao = '',
            this.rExpedidor = '',
            this.rEmissao = '',
            this.rEmail = '',
            this.rIncerto = '',
            this.rCep = '',
            this.rEstado = '',
            this.rCidade = '',
            this.rBairro = '',
            this.rTipoLogradouro = '',
            this.rLogradouro = '',
            this.rNumeroEndereco = '',
            this.rComplemento = '',
            this.rTipoEndereco = '',
            this.rReferencia = '',
            this.rComprovante = ''
        }
    }
}

</script>
<style type="text/css" scoped>
#alinhado {
    margin-left: 30%
}

</style>
