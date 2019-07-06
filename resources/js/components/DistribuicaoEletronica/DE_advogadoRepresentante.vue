<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Advogado / Representante</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-6">
                        <label for="DE_aR1">
                            <select class="custom-select" id="DE_aR1" v-model="showOpcao" required>
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
                            <span><strong> Número de OAB:</strong> </span>
                            <label for="DE_aR2">
                                <select class="custom-select" id="DE_aR2">
                                    <option>RJ</option>
                                    <option>SP</option>
                                </select>
                            </label>
                            <input type="text" class="form-control col-md-5" v-mask="'######'" required>
                        </form>
                    </div>
                    <div class="col-xs-2" v-show="showOpcao === 'defensor'">
                        <form class="form-inline">
                            <span><strong> Matrícula:</strong> </span>
                            <input type="text" class="form-control" v-mask="'##########'" required>
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
    name: 'deadvogadoRepresentante',
    data: function() {
        return {
            showOpcao: "advogado"
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
