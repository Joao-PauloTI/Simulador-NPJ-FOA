<template>
    <div class="container">
        <h1>Cadastro de Autor</h1>
        <hr>
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Dados Pessoais</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <p align="center"><strong>Tipo</strong> Autor</p>
                <div class="container">
                    <div align="center">
                        <!--Opções de marcar-->
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="a_incapaz" value="Incapaz" id="CA_dP1">
                                <label class="custom-control-label" for="CA_dP1"> Incapaz </label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="a_massa" value="Massa Falida" id="CA_dP2">
                                <label class="custom-control-label" for="CA_dP2"> Massa Falida </label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="a_insolvente" value="Insolvente Civil" id="CA_dP3">
                                <label class="custom-control-label" for="CA_dP3"> Insolvente Civil</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="a_preso" value="Preso" id="CA_dP4">
                                <label class="custom-control-label" for="CA_dP4"> Preso </label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="a_espolio" value="Espólio com interesse de Incapaz" id="CA_dP5">
                                <label class="custom-control-label" for="CA_dP5"> Espólio com interesse de Incapaz </label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="a_condominio" value="Condomínio" id="CA_dP6">
                                <label class="custom-control-label" for="CA_dP6"> Condomínio </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Ministério Público -->
                    <div id="alinhado">
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="a_ministerio" value="Ministério Público" id="CA_dP7">
                                <label class="custom-control-label" for="CA_dP7"><strong>Ministério Público? </strong> </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Pessoa Física ou Jurídica -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Pessoa Física ou Jurídica </strong></span>
                                <select class="custom-select" name="a_pessoa">
                                    <option value="Pessoa Física">Pessoa Física</option>
                                    <option value="Pessoa Jurídica">Pessoa Jurídica</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Estrangeiro/Brasileiro -->
                    <div id="alinhado">
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="a_estrangeiro" value="Estrangeiro e/ou brasileiro residente no exterior" id="CA_dP8">
                                <label class="custom-control-label" for="CA_dP8"><strong>Estrangeiro e/ou brasileiro residente no exterior? </strong> </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Sexo -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Sexo </strong> </span>
                                <select class="custom-select" name="a_sexo">
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
                                <span><strong>* CPF/CNPJ </strong> </span>
                                <input type="text" class="form-control" name="a_cpf" v-mask="'###.###.###-##'" >
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nome-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Nome </strong> </span>
                                <input type="text" class="form-control" name="a_nome">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Menor de idade -->
                    <div id="alinhado">
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="a_menor" value="Menor de idade" id="CA_dP9">
                                <label class="custom-control-label" for="CA_dP9"><strong>Menor de idade</strong> </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Documento de identificação -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Documento de identificação </strong> </span>
                                <select class="custom-select" name="a_documento">
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
                                <input type="text" class="form-control" name="a_numeroIdentificacao">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Órgão Expedidor -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Órgão Expedidor </strong> </span>
                                <input type="text" class="form-control" name="a_expedidor">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Data de Emissão -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Data de Emissão </strong> </span>
                                <input type="text" class="form-control" name="a_emissao" v-mask="'##/##/####'">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Telefone -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Telefone </strong> </span>
                                <input type="tel" class="form-control" v-mask="'(##)#####-####'" name="a_telefone">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- E-mail -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>E-mail </strong> </span>
                                <input type="email" class="form-control" name="a_email">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</template>
<script>
    export default {
    name: 'cadadosPessoais',
    data: function() {
        return {

        }
    },
    methods: {
        ajuda: function() {
            alert(
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")
        }
    }
}

</script>
<style type="text/css" scoped>
#alinhado {
    margin-left: 30%
}

</style>
