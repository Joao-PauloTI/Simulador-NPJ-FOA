<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Valor do Pedido</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <!--Valor do Pedido-->
                    <div id="alinhado">
                    	<div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="ra_valorLiquido" value="O valor postulado é liquido" id="CRA_vPC1">
                                <label class="custom-control-label" for="CRA_vPC1">O valor postulado é liquido? </label>
                            </div>
                        </div>
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Valor Postulado</strong> </span>
                                <input type="text" class="form-control" v-money="'R$'" name="ra_valorPedido">
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
                    <strong>Valor da Causa</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <!--Valor da Causa-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Valor da Causa</strong> </span>
                                <input type="text" class="form-control" v-money="'R$'" name="ra_valorCausa">
                            </div>
                        </div>
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="ra_pretensao" value="A pretensão deduzida versa sobre obrigações vincendas" id="CRA_vPC2">
                                <label class="custom-control-label" for="CRA_vPC2">A pretensão deduzida versa sobre obrigações vincendas? </label>
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
    name: 'cravalorPedidoCausa',
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
