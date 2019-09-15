<template>
    <div class="container">
        <h1>Cadastro de Representante de Réu</h1>
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
                    <!-- Parte -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Parte </strong> </span>
                                <select class="custom-select" name="rr_parte">
                                    <option value="">Escolha um tipo</option>
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
                    <br>
                    <!-- Pessoa Física ou Jurídica -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Pessoa Física ou Jurídica </strong> </span>
                                <select class="custom-select" name="rr_pessoa">
                                    <option value="Pessoa Física">Pessoa Física</option>
                                    <option value="Pessoa Jurídica">Pessoa Jurídica</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Sexo -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Sexo </strong> </span>
                                <select class="custom-select" name="rr_sexo">
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
                                <input type="text" class="form-control" v-mask="'###.###.###-##'" name="rr_cpf">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nome-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Nome </strong> </span>
                                <input type="text" class="form-control" name="rr_nome">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Documento de identificação -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Documento de identificação </strong> </span>
                                <select class="custom-select" name="rr_documento">
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
                                <input type="text" class="form-control" name="rr_numeroIdentificacao">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Órgão Emissor -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Órgão Emissor </strong> </span>
                                <input type="text" class="form-control" name="rr_emissor">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Data de Emissão -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Data de Emissão </strong> </span>
                                <input type="text" class="form-control" name="rr_emissao" v-mask="'##/##/####'">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Telefone -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Telefone </strong> </span>
                                <input type="tel" class="form-control" v-mask="'(##)#####-####'" name="rr_telefone">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- E-mail -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>E-mail </strong> </span>
                                <input type="email" class="form-control" name="rr_email">
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
    name: 'crrdadosPessoais',
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
