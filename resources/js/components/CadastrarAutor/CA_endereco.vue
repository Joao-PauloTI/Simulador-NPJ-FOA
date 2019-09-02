<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Endereço</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <!-- CEP -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* CEP </strong> </span>
                                <input type="text" class="form-control" v-mask="'#####-###'" required>
                                <a href=""><ins> verificar CEP</ins> </a>
                                <a href=""><ins> Correios</ins> </a>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Estado -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Estado </strong> </span>
                                <input type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Cidade -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Cidade </strong> </span>
                                <input type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Bairro -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Bairro </strong> </span>
                                <input type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Tipo de Logradouro -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Tipo de Logradouro </strong> </span>
                                <input type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Logradouro-->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Logradouro </strong> </span>
                                <input type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Número -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Número </strong> </span>
                                <input type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Complemento-->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Complemento </strong> </span>
                                <input type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Tipo de Endereço -->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Tipo de Endereço </strong> </span>
                                <select class="custom-select">
                                    <option>Escolha o tipo de endereço</option>
                                    <option>Residencial</option>
                                    <option>Empresarial</option>
                                    <option>Comercial</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Referência-->
                    <div id="alinhado">
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Referência </strong> </span>
                                <textarea rows="3" class="form-control" required></textarea>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Õpção extra -->
                    <div id="alinhado">
                        <form action="">
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="CA_e1" id="CA_e1">
                                <label class="custom-control-label" for="CA_e1">O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial? </label>
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
    name: 'caendereco',
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
