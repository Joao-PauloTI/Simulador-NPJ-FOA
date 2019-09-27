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
                <a href="#" data-toggle="modal" data-target="#autorModal">Cadastrar Autor</a>
                <div class="modal fade" id="autorModal">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-body">
                                <camodal @CA_dados="adicionarAutor"></camodal>
                            </div>
                        </div>
                    </div>
                </div>
                <span> | </span>
                <!--Cadastrar Representante do Autor-->
                <a href="#" data-toggle="modal" data-target="#representanteAutorModal">Cadastrar Representante do Autor</a>
                <div class="modal fade" id="representanteAutorModal">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-body">
                                <cramodal></cramodal>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-if="deAutor != null">
                    <table class="table table-borderless">
                        <tbody v-for="autor in deAutor">
                            <td>{{autor.tipo}}</td>
                            <td>{{autor.pessoa}}</td>
                            <td>{{autor.nome}}</td>
                            <td><a href="#">Alterar</a></td>
                            <td><a href="#" @click="excluirAutor">Excluir</a></td>
                        </tbody>
                        <!--<tbody>
                            <td>Representante</td>
                            <td>Pessoa Física</td>
                            <td>Fulano de Tal</td>
                            <td><a href="#">Alterar</a></td>
                            <td><a href="#">Excluir</a></td>
                        </tbody>-->
                    </table>
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
                <a href="#" data-toggle="modal" data-target="#reuModal">Cadastrar Réu</a>
                <div class="modal fade" id="reuModal">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-body">
                                <crmodal></crmodal>
                            </div>
                        </div>
                    </div>
                </div>
                <span> | </span>
                <!--Cadastrar Representante do Réu-->
                <a href="#" data-toggle="modal" data-target="#representanteReuModal">Cadastrar Representante do Réu</a>
                <div class="modal fade" id="representanteReuModal">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-body">
                                <crrmodal></crrmodal>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<table class="table table-borderless">
                    <tbody>
                        <td>Réu</td>
                        <td>Pessoa Física</td>
                        <td>Fulano de Tal</td>
                        <td><a href="#">Alterar</a></td>
                        <td><a href="#">Excluir</a></td>
                    </tbody>
                    <tbody>
                        <td>Representante</td>
                        <td>Pessoa Física</td>
                        <td>Fulano de Tal</td>
                        <td><a href="#">Alterar</a></td>
                        <td><a href="#">Excluir</a></td>
                    </tbody>
                </table>-->
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
                <a href="#" data-toggle="modal" data-target="#peticaoModal">Upload da Petição Inicial</a>
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
                <a href="#" data-toggle="modal" data-target="#cpfModal">Enviar CPF</a>
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
                <a href="#" data-toggle="modal" data-target="#comprovanteModal">Enviar Comprovante de Residência</a>
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
                <a href="#" data-toggle="modal" data-target="#procuracaoModal">Enviar Procuração</a>
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
                <a href="#" data-toggle="modal" data-target="#anexoModal">Upload do(s) Anexo(s) da Petição Inicial</a>
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
import camodal from '../CadastrarAutor/CA_modal'
//Modal de cadastro de representante de autor
import cramodal from '../CadastrarRepresentanteAutor/CRA_modal'
//Modal de cadastro de réu
import crmodal from '../CadastrarReu/CR_modal'
//Modal de cadastro de representante de réu
import crrmodal from '../CadastrarRepresentanteReu/CRR_modal'

import duploadpeticaoinicial from '../Documentos/D_uploadPeticaoInicial'
import denviarcpf from '../Documentos/D_enviarCPF'
import denviarcomprovanteresidencia from '../Documentos/D_enviarComprovanteResidencia'
import denviarprocuracao from '../Documentos/D_enviarProcuracao'
import duploadanexopeticao from '../Documentos/D_uploadAnexoPeticao'

export default {
    name: 'deautoresReusDocumentos',
    components: {
        camodal, cramodal, crmodal, crrmodal
    },
    data: function() {
        return {
            caContador: 0,
            deAutor: []
        }
    },
    methods: {
        ajuda: function() {
            alert(
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")
        },
        adicionarAutor: function(caTipo, caPessoa, caNome) {
            if (this.caContador >= 1) {
                alert('Já há um autor cadastrado nesta petição.')
            } else {
                this.deAutor.push({
                    'tipo': caTipo,
                    'pessoa': caPessoa,
                    'nome': caNome
                })
                this.caContador++
            }
        },
        excluirAutor: function() {
            while(this.deAutor.length > 0) {
                this.deAutor.pop()
            }
            this.caContador--
        }
    }
}

</script>
