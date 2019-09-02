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
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Estado Civil </strong> </span>
                                <select class="custom-select">
                                    <option>Escolha o estado civil</option>
                                    <option>Solteiro</option>
                                    <option>Casado</option>
                                    <option>Viúvo</option>
                                    <option>Separado Judicialmente</option>
                                    <option>Divorciado</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Profissão -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Profissão </strong> </span>
                                <input type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Nacionalidade -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Nacionalidade </strong> </span>
                                <select class="custom-select">
                                    <option>Brasileira</option>
                                    <option>Naturalizado brasileiro</option>
                                    <option>Estrangeira</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Naturalidade -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Escolha a Naturalidade </strong> </span>
                                <input type="text" class="form-control" placeholder="Estado" required>
                                <input type="text" class="form-control" placeholder="Cidade" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Nome do Pai-->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Nome do Pai </strong> </span>
                                <input type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Nome da Mãe-->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Nome da Mãe </strong> </span>
                                <input type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Data de Nascimento -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Data de Nascimento </strong> </span>
                                <input type="date" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <br>
        <!--Botões SALVAR/FECHAR-->
        <div align="center">
            <form action="">
                <button type="submit" class="btn btn-primary">SALVAR</button>
                <button type="button" class="btn btn-danger">FECHAR</button>
            </form>
        </div>
        <br>
    </div>
</template>
<script>
    export default {
    name: 'crdadosComplementares',
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
