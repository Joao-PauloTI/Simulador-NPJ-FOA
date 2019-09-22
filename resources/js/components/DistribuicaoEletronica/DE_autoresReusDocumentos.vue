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
                <!--Cadastrar Autor-->
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
                <!--Cadastrar Representante do Autor-->
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#representanteAutorModal">Cadastrar Representante do Autor</button>
                <div class="modal fade" id="representanteAutorModal">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-body">
                                <cradadospessoais></cradadospessoais>
                                <craendereco></craendereco>
                                <cravalorpedidocausa></cravalorpedidocausa>
                                <cradadoscomplementares></cradadoscomplementares>
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
                <!--Cadastrar Réu-->
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#reuModal">Cadastrar Réu</button>
                <div class="modal fade" id="reuModal">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-body">
                                <crdadospessoais></crdadospessoais>
                                <crendereco></crendereco>
                                <crvalorpedidocausa></crvalorpedidocausa>
                                <crdadoscomplementares></crdadoscomplementares>
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
                <!--Cadastrar Representante do Réu-->
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#representanteReuModal">Cadastrar Representante do Réu</button>
                <div class="modal fade" id="representanteReuModal">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-body">
                                <crrdadospessoais></crrdadospessoais>
                                <crrendereco></crrendereco>
                                <crrvalorpedidocausa></crrvalorpedidocausa>
                                <crrdadoscomplementares></crrdadoscomplementares>
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
                <!--Upload da Petição Inicial-->
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#peticaoModal">Upload da Petição Inicial</button>
                <div class="modal fade" id="peticaoModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <duploadpeticaoinicial></duploadpeticaoinicial>
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
                <!--Enviar CPF-->
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#cpfModal">Enviar CPF</button>
                <div class="modal fade" id="cpfModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <denviarcpf></denviarcpf>
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
                <!--Enviar Comprovante de Residência-->
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#comprovanteModal">Enviar Comprovante de Residência</button>
                <div class="modal fade" id="comprovanteModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <denviarcomprovanteresidencia></denviarcomprovanteresidencia>
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
                <!--Enviar Procuração-->
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#procuracaoModal">Enviar Procuração</button>
                <div class="modal fade" id="procuracaoModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <denviarprocuracao></denviarprocuracao>
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
                <!--Upload do(s) Anexo(s) da Petição Inicial-->
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#anexoModal">Upload do(s) Anexo(s) da Petição Inicial</button>
                <div class="modal fade" id="anexoModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <duploadanexopeticao></duploadanexopeticao>
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
//Modal de cadastro de representante de autor
import cradadospessoais from '../CadastrarRepresentanteAutor/CRA_dadosPessoais'
import craendereco from '../CadastrarRepresentanteAutor/CRA_endereco'
import cravalorpedidocausa from '../CadastrarRepresentanteAutor/CRA_valorPedidoCausa'
import cradadoscomplementares from '../CadastrarRepresentanteAutor/CRA_dadosComplementares'
//Modal de cadastro de réu
import crdadospessoais from '../CadastrarReu/CR_dadosPessoais'
import crendereco from '../CadastrarReu/CR_endereco'
import crvalorpedidocausa from '../CadastrarReu/CR_valorPedidoCausa'
import crdadoscomplementares from '../CadastrarReu/CR_dadosComplementares'
//Modal de cadastro de representante de réu
import crrdadospessoais from '../CadastrarRepresentanteReu/CRR_dadosPessoais'
import crrendereco from '../CadastrarRepresentanteReu/CRR_endereco'
import crrvalorpedidocausa from '../CadastrarRepresentanteReu/CRR_valorPedidoCausa'
import crrdadoscomplementares from '../CadastrarRepresentanteReu/CRR_dadosComplementares'
//Modal de cadastro de documentos
import duploadpeticaoinicial from '../Documentos/D_uploadPeticaoInicial'
import denviarcpf from '../Documentos/D_enviarCPF'
import denviarcomprovanteresidencia from '../Documentos/D_enviarComprovanteResidencia'
import denviarprocuracao from '../Documentos/D_enviarProcuracao'
import duploadanexopeticao from '../Documentos/D_uploadAnexoPeticao'

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
