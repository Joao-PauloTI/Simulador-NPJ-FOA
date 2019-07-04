<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Dados Complementares</strong>
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
                                <select class="custom-select">
                                    <option>Escolha a profissão</option>
                                    <option>Professor</option>
                                    <option>Desembargador</option>
                                    <option>Médico</option>
                                    <option>Contador</option>
                                </select>
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
                                <select class="custom-select">
                                    <option>Estado</option>
                                    <option>Rio de Janeiro</option>
                                    <option>São Paulo</option>
                                </select>
                                <select class="custom-select">
                                    <option>Cidade</option>
                                    <option>Volta Redonda</option>
                                    <option>Barra Mansa</option>
                                </select>
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
    name: 'cadadosComplementares',
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
