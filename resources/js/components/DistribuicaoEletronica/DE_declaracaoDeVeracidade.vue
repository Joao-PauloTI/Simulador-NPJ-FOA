<template>
    <div class="container" id="DE_dDV_ajudadeclaracao">
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Declaração de Veracidade</strong>
                    <a href="#ajudadeclaracao" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="DE_dDV1">
                        <label class="custom-control-label" for="DE_dDV1"> "Declaro sob as penas da Lei, que as
                            informações acima prestadas correspondem à verdade, tendo sido prestadas em obediência à
                            lealdade processual e à boa fé, nos termos do Art.
                            5º do CPC/15, ciente de que a eventual prestação de informações inverídicas poderá acarretar
                            a incidência das penalidades previstas em lei."</label>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <!--Botões SALVAR/LIMPAR-->
        <div align="center">
            <form action="">
                <button type="submit" class="btn btn-primary">SALVAR</button>
                <button type="reset" class="btn btn-danger">LIMPAR</button>
            </form>
        </div>
        <br>
    </div>
</template>
<script>
export default {
    name: 'dedeclaracaoDeVeracidade',
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
