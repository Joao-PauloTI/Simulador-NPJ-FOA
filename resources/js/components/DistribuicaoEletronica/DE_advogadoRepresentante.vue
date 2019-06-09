<template>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5><strong>Advogado / Representante</strong></h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-xs-6">
                    <label for="selectAR">
                        <select class="custom-select" id="selectAR" v-model="showOpcao" required>
                            <option value="advogado">Advogado</option>
                            <option value="defensor">Defensor Público</option>
                        </select>
                    </label>
                </div>

                <div class="col-md-1">
                    <!--espaço entre campos-->
                </div>

                <div class="col-xs-6" v-show="showOpcao === 'advogado'">
                    <form class="form-inline">
                        <span> Número de OAB: </span>
                        <label for="regiaoOAB">
                            <select class="custom-select" id="regiaoOAB">
                                <option>RJ</option>
                                <option>SP</option>
                            </select>
                        </label>
                        <input type="text" class="form-control" required>
                    </form>
                </div>

                <div class="col-xs-2" v-show="showOpcao === 'defensor'">
                    <form class="form-inline">
                        <span> Matrícula: </span>
                        <input type="text" class="form-control" required>
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
    name: 'de-advogadoRepresentante',
    data: function() {
        return {
            showOpcao: "advogado"
        }
    }
}
</script>
