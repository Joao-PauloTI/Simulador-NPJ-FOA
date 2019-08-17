<template>
    <div>
        <div class="container">
            <h1>Consulta Processual</h1>
        </div>
        <hr>
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
                <div v-show="showOpcao === 'showUnica'">
                    <div class="input-group">
                        <input type="text" class="form-control" v-mask="'#######-##.####'" required>
                        <span style="margin-top: 15px; margin: 15px;"><strong> .8.19. </strong></span>
                        <input type="text" class="form-control" v-mask="'####'" required>
                    </div>
                </div>
                <!--Numeração Antiga-->
                <div v-show="showOpcao === 'showAntiga'">
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
                        <input type="text" class="form-control" v-mask="'####.###.######-# ##'" required>
                    </div>
                </div>
                <br>
                <!--Botões SALVAR/LIMPAR-->
                <div align="center">
                    <form action="">
                        <button type="submit" class="btn btn-primary">PESQUISAR</button>
                        <button type="reset" class="btn btn-danger">LIMPAR</button>
                    </form>
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
