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
                        <form action="">
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="CA_dP1" id="CA_dP1">
                                <label class="custom-control-label" for="CA_dP1"> Incapaz
                                </label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="CA_dP2" id="CA_dP2">
                                <label class="custom-control-label" for="CA_dP2"> Massa Falida </label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="CA_dP3" id="CA_dP3">
                                <label class="custom-control-label" for="CA_dP3"> Insolvente Civil
                                </label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="CA_dP4" id="CA_dP4">
                                <label class="custom-control-label" for="CA_dP4"> Preso </label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="CA_dP5" id="CA_dP5">
                                <label class="custom-control-label" for="CA_dP5"> Espólio com interesse de Incapaz </label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="CA_dP6" id="CA_dP6">
                                <label class="custom-control-label" for="CA_dP6"> Condomínio </label>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Ministério Público -->
                    <div id="alinhado">
                        <form action="">
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="CA_dP7" id="CA_dP7">
                                <label class="custom-control-label" for="CA_dP7"><strong>Ministério Público? </strong> </label>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Pessoa Física ou Jurídica -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Pessoa Física ou Jurídica </strong> </span>
                                <select class="custom-select">
                                    <option>Pessoa Física</option>
                                    <option>Pessoa Jurídica</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Estrangeiro/Brasileiro -->
                    <div id="alinhado">
                        <form action="">
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="CA_dP8" id="CA_dP8">
                                <label class="custom-control-label" for="CA_dP8"><strong>Estrangeiro e/ou brasileiro residente no exterior? </strong> </label>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Sexo -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Sexo </strong> </span>
                                <select class="custom-select">
                                    <option>Escolha um sexo</option>
                                    <option>Masculino</option>
                                    <option>Feminino</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- CPF/CNPJ-->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* CPF/CNPJ </strong> </span>
                                <input type="text" class="form-control" v-mask="'###.###.###-##'" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Nome-->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Nome </strong> </span>
                                <input type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Menor de idade -->
                    <div id="alinhado">
                        <form action="">
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="CA_dP9" id="CA_dP9">
                                <label class="custom-control-label" for="CA_dP9"><strong>Menor de idade</strong> </label>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Documento de identificação -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Documento de identificação </strong> </span>
                                <select class="custom-select">
                                    <option>Escolha um tipo</option>
                                    <option>Registro Geral</option>
                                    <option>Carteira Nacional de Habilitação</option>
                                    <option>Passaporte</option>
                                    <option>Carteira de Trabalho</option>
                                    <option>Carteira de Identidade</option>
                                    <option>Certificado de Dispensa de Incorporação</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Número -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Número </strong> </span>
                                <input type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Órgão Expedidor -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Órgão Expedidor </strong> </span>
                                <input type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Data de Emissão -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Data de Emissão </strong> </span>
                                <input type="date" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Telefone -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Telefone </strong> </span>
                                <input type="tel" class="form-control" v-mask="'(##)#####-####'" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- E-mail -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>E-mail </strong> </span>
                                <input type="email" class="form-control" required>
                            </div>
                        </form>
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
