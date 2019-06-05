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
          <span><strong>*</strong> Possui GRERJ? </span>
                <!--Isto é apenas uma amostra dos casos. No programa real, nenhuma das opções devem estar
                    selecionadas quando a página carregar! O certo é aparecer um caso diferente de acordo
                    com a opção selecionada.-->
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
            <span><strong>*</strong> Número da GRERJ </span>
            <input type="text" required>
            <br>
          </div>

          <div v-show="showOpcao === 'showNao'">
            <br>
            <label for="grerjMotivo">Motivo
            <select id="grerjMotivo" class="custom-select">
              <option>Escolha um motivo</option>
              <option>Juizado Especial Cível</option>
              <option>Justiça Gratuita / Pedido de Gratuidade</option>
              <option>...</option>
            </select>
            </label>
          </div>

        </div>
        <br>
    </div>
  </div>
</template>

<script>
    var app = new Vue({
        el: '#app',
        data: {
          showOpcao: value=""
        }
    });
</script>
