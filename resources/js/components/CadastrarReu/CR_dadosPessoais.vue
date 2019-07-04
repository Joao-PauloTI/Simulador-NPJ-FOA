<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Dados Pessoais</strong>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <!-- Tipo -->
                    <p id="alinhado"><strong>Tipo</strong> Réu</p>
                    <!-- Estrangeiro/Brasileiro -->
                    <div id="alinhado">
                        <form action="">
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="CR_dP1" id="CR_dP1">
                                <label class="custom-control-label" for="CR_dP1"><strong>Estrangeiro e/ou brasileiro residente no exterior? </strong> </label>
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
                    <!-- Data de emissão -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Data de Emissão </strong> </span>
                                <input type="date" class="form-control" required>
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
    name: 'crdadosPessoais',
    data: function() {
        return {

        }
    }
}

</script>
<style type="text/css" scoped>
#alinhado {
    margin-left: 30%
}

</style>
