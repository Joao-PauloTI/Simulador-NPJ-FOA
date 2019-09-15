<template>
    <div class="container">
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
                                <span><strong>Estado Civil </strong> </span>
                                <select class="custom-select" name="ra_estadoCivil">
                                    <option value="">Escolha o estado civil</option>
                                    <option value="Solteiro">Solteiro</option>
                                    <option value="Casado">Casado</option>
                                    <option value="Viúvo">Viúvo</option>
                                    <option value="Separado Judicialmente">Separado Judicialmente</option>
                                    <option value="Divorciado">Divorciado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Profissão -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Profissão </strong> </span>
                                <input type="text" class="form-control" name="ra_profissao">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nacionalidade -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Nacionalidade </strong> </span>
                                <select class="custom-select" name="ra_nacionalidade">
                                    <option value="Brasileira">Brasileira</option>
                                    <option value="Naturalizado brasileiro">Naturalizado brasileiro</option>
                                    <option value="Estrangeira">Estrangeira</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Naturalidade -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Escolha a Naturalidade </strong> </span>
                                <input type="text" class="form-control" placeholder="Estado" name="ra_estadoNaturalidade">
                                <input type="text" class="form-control" placeholder="Cidade" name="ra_cidadeNaturalidade">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nome do Pai-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Nome do Pai </strong> </span>
                                <input type="text" class="form-control" name="ra_pai">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nome da Mãe-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Nome da Mãe </strong> </span>
                                <input type="text" class="form-control" name="ra_mae">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Data de Nascimento -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Data de Nascimento </strong> </span>
                                <input type="string" class="form-control" name="ra_nascimento" v-mask="'##/##/####'">
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
    name: 'cradadosComplementares',
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
