<template>
    <div class="container">
        <!--Autores-->
        <div class="card" id="ajudaautor">
            <div class="card-header">
                <h5>
                    <strong>Autor(es)</strong>
                    <a href="#ajudaautor" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <a href="localhost:8000/cadastrarautor">Cadastrar Autor </a>
                <span> | </span>
                <a href="#"> Cadastrar Representante do Autor </a>
            </div>
        </div>
        <br>
        <!--Réus-->
        <div class="card" id="ajudareu">
            <div class="card-header">
                <h5>
                    <strong>Réu(s)</strong>
                    <a href="#ajudareu" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <a href="#">Cadastrar Réu </a>
                <span> | </span>
                <a href="#"> Cadastrar Representante do Réu </a>
            </div>
        </div>
        <br>
        <!--Documentos-->
        <div class="card" id="ajudadocumentos">
            <div class="card-header">
                <h5>
                    <strong>Documento(s)</strong>
                    <a href="#ajudadocumentos" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <a href="#">Upload da Petição Inicial </a>
                <span> | </span>
                <a href="#"> Enviar CPF </a>
                <span> | </span>
                <a href="#"> Enviar Comprovante de Residência </a>
                <span> | </span>
                <a href="#"> Enviar Procuração </a>
                <span> | </span>
                <a href="#"> Upload do(s) Anexo(s) da Petição Inicial </a>
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
