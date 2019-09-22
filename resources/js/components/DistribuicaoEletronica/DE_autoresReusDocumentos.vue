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
                <!--
                <a href="cadastrarautor" target="popup" onclick="window.open('cadastrarautor', 'popup', 'width=1000, height=700');">Cadastrar Autor </a> -->
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#autorModal">Cadastrar Autor</button>
                <div class="modal fade" id="autorModal">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-body">
                                <cadadospessoais></cadadospessoais>
                                <caadvogadorepresentante></caadvogadorepresentante>
                                <caendereco></caendereco>
                                <cavalorpedidocausa></cavalorpedidocausa>
                                <cadadoscomplementares></cadadoscomplementares>
                                <br>
                                <!--Botões SALVAR/FECHAR-->
                                <div align="center">
                                    <button type="submit" class="btn btn-primary">SALVAR</button>
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">FECHAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
//Modal de cadastro de autor
import cadadospessoais from '../CadastrarAutor/CA_dadosPessoais'
import caadvogadorepresentante from '../CadastrarAutor/CA_advogadoRepresentante'
import caendereco from '../CadastrarAutor/CA_endereco'
import cavalorpedidocausa from '../CadastrarAutor/CA_valorPedidoCausa'
import cadadoscomplementares from '../CadastrarAutor/CA_dadosComplementares'

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
