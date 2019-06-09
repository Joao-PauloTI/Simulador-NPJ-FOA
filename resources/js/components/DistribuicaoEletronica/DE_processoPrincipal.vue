<template>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5><strong>Processo Principal</strong></h5>
        </div>
        <div class="card-body">
            <span><strong>* Distribuição por Dependência</strong> </span>
            <div class="custom-control custom-control-inline custom-radio">
                <input type="radio" class="custom-control-input" id="dpdSim" name="dpd" value="dpdSim" v-model="showDpd">
                <label class="custom-control-label" for="dpdSim"> Sim </label>
            </div>
            <div class="custom-control custom-control-inline custom-radio">
                <input type="radio" class="custom-control-input" id="dpdNao" name="" v-model="showDpd">
                <label class="custom-control-label" for="dpdNao"> Não </label>
            </div>

            <div v-show="showDpd === 'dpdSim'">
              <br>
              <form class="form-inline">
                  <div class="col-xs-2">
                      <span><strong>* Número do Processo Principal:</strong> </span>
                      <input type="text" class="form-control" required>
                      <span> .8.19. </span>
                      <input type="text" class="form-control" required>
                      <button type="submit" class="btn btn-primary">Consultar</button>
                  </div>
              </form>
            </div>
        </div>
    </div>
    <br>
</div>
</template>

<script>
export default {
    name: 'de-processoprincipal',
    data: function() {
        return {
          showDpd: ""
        }
    }
}
</script>
