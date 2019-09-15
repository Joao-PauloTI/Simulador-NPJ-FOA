<template>
    <div class="container">
        <h1>Cadastro de Réu</h1>
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
                    <p id="alinhado"><strong>Tipo</strong> Réu</p>
                    <!-- Estrangeiro/Brasileiro -->
                    <div id="alinhado">
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="r_estrangeiro" value="Estrangeiro e/ou brasileiro residente no exterior?" id="CR_dP1">
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
                                <select class="custom-select" name="r_sexo">
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
                                <input type="text" class="form-control" v-mask="'###.###.###-##'" name="r_cpf">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nome-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Nome </strong> </span>
                                <input type="text" class="form-control" name="r_nome">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Documento de identificação -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Documento de identificação </strong> </span>
                                <select class="custom-select" name="r_documento">
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
                                <input type="text" class="form-control" name="r_numeroIdentificacao">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Órgão Expedidor -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Órgão Expedidor </strong> </span>
                                <input type="text" class="form-control" name="r_expedidor">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Data de emissão -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Data de Emissão </strong> </span>
                                <input type="text" class="form-control" name="r_emissao" v-mask="'##/##/####'">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- E-mail -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>E-mail </strong> </span>
                                <input type="email" class="form-control" name="r_email">
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
    name: 'crdadosPessoais',
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
