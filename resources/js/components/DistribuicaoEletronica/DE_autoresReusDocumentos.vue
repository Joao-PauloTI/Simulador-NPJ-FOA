<template>
    <div class="container">
        <!--Autores-->
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Autor(es)</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <a href="cadastrarautor" target="popup" onclick="window.open('cadastrarautor', 'popup', 'width=1000, height=700');">Cadastrar Autor </a>
                <span> | </span>
                <a href="cadastrarrepresentanteautor" target="popup" onclick="window.open('cadastrarrepresentanteautor', 'popup', 'width=1000, height=700');"> Cadastrar Representante do Autor </a>
            </div>
        </div>
        <br>
        <!--Réus-->
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Réu(s)</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <a href="cadastrarreu" target="popup" onclick="window.open('cadastrarreu', 'popup', 'width=1000, height=700');">Cadastrar Réu </a>
                <span> | </span>
                <a href="cadastrarrepresentantereu" target="popup" onclick="window.open('cadastrarrepresentantereu', 'popup', 'width=1000, height=700');"> Cadastrar Representante do Réu </a>
            </div>
        </div>
        <br>
        <!--Documentos-->
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Documento(s)</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <a href="uploadpeticaoinicial" target="popup" onclick="window.open('uploadpeticaoinicial', 'popup', 'width=800, height=600');">Upload da Petição Inicial </a>
                <span> | </span>
                <a href="enviarcpf" target="popup" onclick="window.open('enviarcpf', 'popup', 'width=800, height=600');"> Enviar CPF </a>
                <span> | </span>
                <a href="enviarcomprovantederesidencia" target="popup" onclick="window.open('enviarcomprovantederesidencia', 'popup', 'width=800, height=600');"> Enviar Comprovante de Residência </a>
                <span> | </span>
                <a href="enviarprocuracao" target="popup" onclick="window.open('enviarprocuracao', 'popup', 'width=800, height=600');"> Enviar Procuração </a>
                <span> | </span>
                <a href="uploaddoanexodapeticaoinicial" target="popup" onclick="window.open('uploaddoanexodapeticaoinicial', 'popup', 'width=800, height=600');"> Upload do(s) Anexo(s) da Petição Inicial </a>
            </div>
        </div>
        <br>
    </div>
</template>
<script>
export default {
    name: 'deautoresReusDocumentos',
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
