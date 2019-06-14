<template>
    <div class="container">
        <h1>Distribuição de Petição Inicial</h1>
        <hr>
        <p><strong>ATENÇÃO SENHOR ADVOGADO: SE NÃO HOUVER PEDIDO DE JUSTIÇA GRATUITA, ANTES DE REALIZAR O CADASTRAMENTO DE SUA PETIÇÃO, FAÇA O RECOLHIMENTO DO GRERJ, POIS SEU NÚMERO E VALOR SERÃO NECESSÁRIOS.</strong></p>
        <p>Campos marcados com <strong>*</strong> são de preenchimento obrigatório.</p>
        <div class="card">
            <div class="card-header">
                <h5><strong>GRERJ</strong></h5>
            </div>
            <div class="card-body">
                <span><strong>* Possui GRERJ?</strong> </span>
                <div class="custom-control custom-control-inline custom-radio">
                    <input type="radio" class="custom-control-input" name="grerj" id="grerjSim" value="showSim" v-model="showOpcao">
                    <label class="custom-control-label" for="grerjSim"> Sim </label>
                </div>
                <div class="custom-control custom-control-inline custom-radio">
                    <input type="radio" class="custom-control-input" name="grerj" id="grerjNao" value="showNao" v-model="showOpcao">
                    <label class="custom-control-label" for="grerjNao"> Não </label>
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
    }
}

</script>
