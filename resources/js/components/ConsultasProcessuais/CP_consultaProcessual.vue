<template>
<div>
    <div class="card-header">
        <h1>Consulta Processual</h1>
    </div>
    <div class="card-body" id="alinhado">
        <div class="col-md-8">
            <div>
                <select class="custom-select" v-model="showOpcao">
                    <option value="showUnica">Numeração única</option>
                    <option value="showAntiga">Numeração antiga</option>
                </select>
            </div>
            <br>
            <!--Numeração única-->
            <div v-if="showOpcao === 'showUnica'">
                <input type="text" class="form-control" name="cp_numeracaoProcesso" v-mask="'#######-##.####.8.19.####'" placeholder="ex: 1111111-11.1111.8.19.1111">
            </div>
            <!--Numeração Antiga-->
            <div v-else>
                <div>
                    <label for="CP_cP_origem"><strong>Origem:</strong></label>
                    <select class="custom-select" id="CP_cP_origem">
                        <option>Juizado / 1ª Instância</option>
                        <option>TJ (2ª Instância)</option>
                        <option>Alçada Cível</option>
                        <option>Alçada Criminal</option>
                        <option>Precatórios Judiciais</option>
                        <option>VEP</option>
                        <option>Cons. Magistratura</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="CP_cP_numeroDeProcesso"><strong>Número de Processo</strong></label>
                    <input type="text" class="form-control" id="CP_cP_numeroDeProcesso" v-mask="'####.###.######-# ##'">
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
</template>
<script>
export default {
    name: 'cpconsultaprocessual',
    data: function() {
        return {
            showOpcao: "showUnica"
        }
    }
}
</script>
<style type="text/css" scoped>
#alinhado {
    margin-left: 25%;
}
</style>
