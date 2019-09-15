<template>
    <div>
        <div class="card-header">
            <h5>
                <strong>Upload da Petição Inicial</strong>
                <a href="#ajuda" v-on:click="ajuda()">(?)</a>
            </h5>
        </div>
        <div class="card-body">
            <div class="container">
                <div>
                    <button type="button" class="btn btn-primary">Escolher Arquivo</button>
                    <span>Nenhum arquivo selecionado</span>
                </div>
                <br>
                <div>
                    <span><strong>* Descrição </strong> </span>
                    <input type="text" class="form-control" required>
                </div>
                <br>
                <p style="color: red">Para adicionar o arquivo, basta escolhe-lo e clicar no botão "Enviar".</p>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'duploadpeticaoinicial',
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
