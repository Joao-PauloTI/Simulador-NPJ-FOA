<template>
    <div class="container">
        <h1>Distribuição de Petição Inicial</h1>
        <hr>
        <p><strong>ATENÇÃO SENHOR ADVOGADO: SE NÃO HOUVER PEDIDO DE JUSTIÇA GRATUITA, ANTES DE REALIZAR O CADASTRAMENTO
                DE SUA PETIÇÃO, FAÇA O RECOLHIMENTO DO GRERJ, POIS SEU NÚMERO E VALOR SERÃO NECESSÁRIOS.</strong></p>
        <p>Campos marcados com <strong>*</strong> são de preenchimento obrigatório.</p>
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>GRERJ</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <span><strong>* Possui GRERJ?</strong> </span>
                <div class="custom-control custom-control-inline custom-radio">
                    <input type="radio" class="custom-control-input" name="DE_g_grerj" id="DE_g_grerjSim" value="showSim" v-model="showOpcao">
                    <label class="custom-control-label" for="DE_g_grerjSim"> Sim </label>
                </div>
                <div class="custom-control custom-control-inline custom-radio">
                    <input type="radio" class="custom-control-input" name="DE_g_grerj" id="DE_g_grerjNao" value="showNao" v-model="showOpcao">
                    <label class="custom-control-label" for="DE_g_grerjNao"> Não </label>
                </div>
                <div v-show="showOpcao === 'showSim'">
                    <br>
                    <form class="form-inline">
                        <div class="col-xs-2">
                            <span><strong>* Número da GRERJ:</strong> </span>
                            <input type="text" class="form-control col-md-5" v-mask="'#############'" required>
                            <!--<span><strong> Valor da GRERJ: </strong> R$ 999,99</span>-->
                        </div>
                    </form>
                </div>
                <div v-show="showOpcao === 'showNao'">
                    <br>
                    <label for="grerjMotivo"><strong>* Motivo</strong>
                        <select id="grerjMotivo" class="custom-select">
                            <option>Escolha um motivo</option>
                            <option>Juizado Especial Cível</option>
                            <option>Justiça Gratuita / Pedido de Gratuidade</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
        <br>
    </div>
</template>
<script>
export default {
    name: 'degrerj',
    data: function() {
        return {
            showOpcao: ""
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
