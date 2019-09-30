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
                <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#autorModal" v-if="deAutor.length < 1">Cadastrar Autor</a>
                <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#autorModal" v-else>Alterar Autor</a>
                <div class="modal fade" id="autorModal">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-body">
                                <camodal @caDados="adicionarAutor" ref="resetarAutor"></camodal>
                            </div>
                        </div>
                    </div>
                </div>
                <span> | </span>
                <!--Cadastrar Representante do Autor-->
                <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#representanteAutorModal" v-if="deRepresentanteAutor.length < 1">Cadastrar Representante do Autor</a>
                <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#representanteAutorModal" v-else>Alterar Representante do Autor</a>
                <div class="modal fade" id="representanteAutorModal">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-body">
                                <cramodal @craDados="adicionarRepresentanteAutor" ref="resetarRepresentanteAutor"></cramodal>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-if="deAutor != null || deRepresentanteAutor != null">
                    <table class="table table-borderless">
                        <tr v-for="autor in deAutor">
                            <td>Autor</td>
                            <td>{{autor.aPessoa}}</td>
                            <td>{{autor.aNome}}</td>
                            <td><a href="#" @click="excluirAutor">Excluir</a></td>
                        </tr>
                        <tr v-for="representante in deRepresentanteAutor">
                            <td>Representante</td>
                            <td>{{representante.raPessoa}}</td>
                            <td>{{representante.raNome}}</td>
                            <td><a href="#" @click="excluirRepresentanteAutor">Excluir</a></td>
                        </tr>
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
                <!--Cadastrar Réu - Pessoa Física-->
                <template v-if="deReuJuridico.length > 0">
                    <a href="#" onclick="alert('Ja há um réu (pessoa jurídica) cadastrado. Apenas 1 réu poderá ser cadastrado por processo!')">Cadastrar Réu - Pessoa Física</a>
                </template>
                <template v-else>
                    <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#reuModal" v-if="deReu.length < 1">Cadastrar Réu - Pessoa Física</a>
                    <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#reuModal" v-else>Alterar Réu - Pessoa Física</a>
                    <div class="modal fade" id="reuModal">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <crmodal @crDados="adicionarReu" ref="resetarReu"></crmodal>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
                <span> | </span>
                <!--Cadastrar Réu - Pessoa Jurídica-->
                <template v-if="deReu.length > 0">
                    <a href="#" onclick="alert('Ja há um réu (pessoa física) cadastrado. Apenas 1 réu poderá ser cadastrado por processo!')">Cadastrar Réu - Pessoa Jurídica</a>
                </template>
                <template v-else>
                    <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#reuJuridicoModal" v-if="deReuJuridico.length < 1">Cadastrar Réu - Pessoa Jurídica</a>
                    <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#reuJuridicoModal" v-else>Alterar Réu - Pessoa Jurídica</a>
                    <div class="modal fade" id="reuJuridicoModal">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <crjmodal @crjDados="adicionarReuJuridico" ref="resetarReuJuridico"></crjmodal>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
                <span> | </span>
                <!--Cadastrar Representante do Réu-->
                <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#representanteReuModal" v-if="deRepresentanteReu.length < 1">Cadastrar Representante do Réu</a>
                <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#representanteReuModal" v-else>Alterar Representante do Réu</a>
                <div class="modal fade" id="representanteReuModal">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-body">
                                <crrmodal @crrDados="adicionarRepresentanteReu" ref="resetarRepresentanteReu"></crrmodal>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-if="deReu != null || deReuJuridico != null || deRepresentanteReu != null">
                    <table class="table table-borderless">
                        <tr v-for="reu in deReu">
                            <td>Réu</td>
                            <td>Pessoa Física</td>
                            <td>{{reu.rNome}}</td>
                            <td><a href="#" @click="excluirReu">Excluir</a></td>
                        </tr>
                        <tr v-for="reuJuridico in deReuJuridico">
                            <td>Réu</td>
                            <td>Pessoa Jurídica</td>
                            <td>{{reuJuridico.rjNome}}</td>
                            <td><a href="#" @click="excluirReuJuridico">Excluir</a></td>
                        </tr>
                        <tr v-for="representante in deRepresentanteReu">
                            <td>Representante</td>
                            <td>{{representante.rrPessoa}}</td>
                            <td>{{representante.rrNome}}</td>
                            <td><a href="#" @click="excluirRepresentanteReu">Excluir</a></td>
                        </tr>
                    </table>
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
                <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#peticaoModal">Upload da Petição Inicial</a>
                <div class="modal fade" id="peticaoModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <duploadpeticaoinicial></duploadpeticaoinicial>
                                <br>
                                <!--Botões SALVAR/FECHAR-->
                                <div align="center">
                                    <button type="button" class="btn btn-primary">SALVAR</button>
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">FECHAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span> | </span>
                <!--Enviar CPF-->
                <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#cpfModal">Enviar CPF</a>
                <div class="modal fade" id="cpfModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <denviarcpf></denviarcpf>
                                <br>
                                <!--Botões SALVAR/FECHAR-->
                                <div align="center">
                                    <button type="button" class="btn btn-primary">SALVAR</button>
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">FECHAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span> | </span>
                <!--Enviar Comprovante de Residência-->
                <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#comprovanteModal">Enviar Comprovante de Residência</a>
                <div class="modal fade" id="comprovanteModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <denviarcomprovanteresidencia></denviarcomprovanteresidencia>
                                <br>
                                <!--Botões SALVAR/FECHAR-->
                                <div align="center">
                                    <button type="button" class="btn btn-primary">SALVAR</button>
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">FECHAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span> | </span>
                <!--Enviar Procuração-->
                <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#procuracaoModal">Enviar Procuração</a>
                <div class="modal fade" id="procuracaoModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <denviarprocuracao></denviarprocuracao>
                                <br>
                                <!--Botões SALVAR/FECHAR-->
                                <div align="center">
                                    <button type="button" class="btn btn-primary">SALVAR</button>
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">FECHAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span> | </span>
                <!--Upload do(s) Anexo(s) da Petição Inicial-->
                <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#anexoModal">Upload do(s) Anexo(s) da Petição Inicial</a>
                <div class="modal fade" id="anexoModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <duploadanexopeticao></duploadanexopeticao>
                                <br>
                                <!--Botões SALVAR/FECHAR-->
                                <div align="center">
                                    <button type="button" class="btn btn-primary">SALVAR</button>
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
//Modal de cadastro de réu - pessoa jurídica
import crjmodal from '../CadastrarReuJuridico/CRJ_modal'
//Modal de cadastro de representante de réu
import crrmodal from '../CadastrarRepresentanteReu/CRR_modal'
//Modals de cadastro de documentos
import duploadpeticaoinicial from '../Documentos/D_uploadPeticaoInicial'
import denviarcpf from '../Documentos/D_enviarCPF'
import denviarcomprovanteresidencia from '../Documentos/D_enviarComprovanteResidencia'
import denviarprocuracao from '../Documentos/D_enviarProcuracao'
import duploadanexopeticao from '../Documentos/D_uploadAnexoPeticao'

export default {
    name: 'deautoresReusDocumentos',
    components: {
        camodal,
        cramodal,
        crmodal,
        crjmodal,
        crrmodal
    },
    data: function() {
        return {
            deAutor: [],
            deRepresentanteAutor: [],
            deReu: [],
            deReuJuridico: [],
            deRepresentanteReu: []
        }
    },
    methods: {
        ajuda: function() {
            alert(
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")
        },
        //funções para o array deAutor
        adicionarAutor: function(aIncapaz, aMassa, aInsolvente, aPreso, aEspolio, aCondominio, aMinisterio, aPessoa, aEstrangeiro, aSexo, aCpf, aNome, aMenor, aDocumento, aNumeroIdentificacao, aExpedidor, aEmissao, aTelefone, aEmail, aRepresenta, aIntimacao, aCep, aEstado, aCidade, aBairro, aTipoLogradouro, aLogradouro, aNumeroEndereco, aComplemento, aTipoEndereco, aReferencia, aComprovante, aValorPedido, aValorLiquido, aValorCausa, aPretensao, aEstadoCivil, aProfissao, aNacionalidade, aEstadoNaturalidade, aCidadeNaturalidade, aPai, aMae, aNascimento) {

            while (this.deAutor.length > 0) {
                this.deAutor.pop()
            }
            this.deAutor.push({
                'aIncapaz': aIncapaz,
                'aMassa': aMassa,
                'aInsolvente': aInsolvente,
                'aPreso': aPreso,
                'aEspolio': aEspolio,
                'aCondominio': aCondominio,
                'aMinisterio': aMinisterio,
                'aPessoa': aPessoa,
                'aEstrangeiro': aEstrangeiro,
                'aSexo': aSexo,
                'aCpf': aCpf,
                'aNome': aNome,
                'aMenor': aMenor,
                'aDocumento': aDocumento,
                'aNumeroIdentificacao': aNumeroIdentificacao,
                'aExpedidor': aExpedidor,
                'aEmissao': aEmissao,
                'aTelefone': aTelefone,
                'aEmail': aEmail,
                'aRepresenta': aRepresenta,
                'aIntimacao': aIntimacao,
                'aCep': aCep,
                'aEstado': aEstado,
                'aCidade': aCidade,
                'aBairro': aBairro,
                'aTipoLogradouro': aTipoLogradouro,
                'aLogradouro': aLogradouro,
                'aNumeroEndereco': aNumeroEndereco,
                'aComplemento': aComplemento,
                'aTipoEndereco': aTipoEndereco,
                'aReferencia': aReferencia,
                'aComprovante': aComprovante,
                'aValorPedido': aValorPedido,
                'aValorLiquido': aValorLiquido,
                'aValorCausa': aValorCausa,
                'aPretensao': aPretensao,
                'aEstadoCivil': aEstadoCivil,
                'aProfissao': aProfissao,
                'aNacionalidade': aNacionalidade,
                'aEstadoNaturalidade': aEstadoNaturalidade,
                'aCidadeNaturalidade': aCidadeNaturalidade,
                'aPai': aPai,
                'aMae': aMae,
                'aNascimento': aNascimento
            })
        },
        excluirAutor: function() {
            while (this.deAutor.length > 0) {
                this.deAutor.pop()
            }
            this.$refs.resetarAutor.limparAutorModal()
        },
        //funções para o array deRepresentanteAutor
        adicionarRepresentanteAutor: function(raIncapaz, raMassa, raInsolvente, raPreso, raEspolio, raCondominio, raParte, raMinisterio, raPessoa, raSexo, raCpf, raNome, raDocumento, raNumeroIdentificacao, raEmissor, raEmissao, raTelefone, raEmail, raCep, raEstado, raCidade, raBairro, raTipoLogradouro, raLogradouro, raNumeroEndereco, raComplemento, raTipoEndereco, raReferencia, raComprovante, raValorPedido, raValorLiquido, raValorCausa, raPretensao, raEstadoCivil, raProfissao, raNacionalidade, raEstadoNaturalidade, raCidadeNaturalidade, raPai, raMae, raNascimento) {

            while (this.deRepresentanteAutor.length > 0) {
                this.deRepresentanteAutor.pop()
            }
            this.deRepresentanteAutor.push({
                'raIncapaz': raIncapaz,
                'raMassa': raMassa,
                'raInsolvente': raInsolvente,
                'raPreso': raPreso,
                'raEspolio': raEspolio,
                'raCondominio': raCondominio,
                'raParte': raParte,
                'raMinisterio': raMinisterio,
                'raPessoa': raPessoa,
                'raSexo': raSexo,
                'raCpf': raCpf,
                'raNome': raNome,
                'raDocumento': raDocumento,
                'raNumeroIdentificacao': raNumeroIdentificacao,
                'raEmissor': raEmissor,
                'raEmissao': raEmissao,
                'raTelefone': raTelefone,
                'raEmail': raEmail,
                'raCep': raCep,
                'raEstado': raEstado,
                'raCidade': raCidade,
                'raBairro': raBairro,
                'raTipoLogradouro': raTipoLogradouro,
                'raLogradouro': raLogradouro,
                'raNumeroEndereco': raNumeroEndereco,
                'raComplemento': raComplemento,
                'raTipoEndereco': raTipoEndereco,
                'raReferencia': raReferencia,
                'raComprovante': raComprovante,
                'raValorPedido': raValorPedido,
                'raValorLiquido': raValorLiquido,
                'raValorCausa': raValorCausa,
                'raPretensao': raPretensao,
                'raEstadoCivil': raEstadoCivil,
                'raProfissao': raProfissao,
                'raNacionalidade': raNacionalidade,
                'raEstadoNaturalidade': raEstadoNaturalidade,
                'raCidadeNaturalidade': raCidadeNaturalidade,
                'raPai': raPai,
                'raMae': raMae,
                'raNascimento': raNascimento
            })
        },
        excluirRepresentanteAutor: function() {
            while (this.deRepresentanteAutor.length > 0) {
                this.deRepresentanteAutor.pop()
            }
            this.$refs.resetarRepresentanteAutor.limparRepresentanteAutorModal()
        },
        //funções para o array deReu
        adicionarReu: function(rEstrangeiro, rSexo, rCpf, rNome, rDocumento, rNumeroIdentificacao, rExpedidor, rEmissao, rEmail, rIncerto, rCep, rEstado, rCidade, rBairro, rTipoLogradouro, rLogradouro, rNumeroEndereco, rComplemento, rTipoEndereco, rReferencia, rComprovante, rValorPedido, rValorLiquido, rValorCausa, rPretensao, rEstadoCivil, rProfissao, rNacionalidade, rEstadoNaturalidade, rCidadeNaturalidade, rPai, rMae, rNascimento) {

            while (this.deReu.length > 0) {
                this.deReu.pop()
            }
            this.deReu.push({
                'rEstrangeiro': rEstrangeiro,
                'rSexo': rSexo,
                'rCpf': rCpf,
                'rNome': rNome,
                'rDocumento': rDocumento,
                'rNumeroIdentificacao': rNumeroIdentificacao,
                'rExpedidor': rExpedidor,
                'rEmissao': rEmissao,
                'rEmail': rEmail,
                'rIncerto': rIncerto,
                'rCep': rCep,
                'rEstado': rEstado,
                'rCidade': rCidade,
                'rBairro': rBairro,
                'rTipoLogradouro': rTipoLogradouro,
                'rLogradouro': rLogradouro,
                'rNumeroEndereco': rNumeroEndereco,
                'rComplemento': rComplemento,
                'rTipoEndereco': rTipoEndereco,
                'rReferencia': rReferencia,
                'rComprovante': rComprovante,
                'rValorPedido': rValorPedido,
                'rValorLiquido': rValorLiquido,
                'rValorCausa': rValorCausa,
                'rPretensao': rPretensao,
                'rEstadoCivil': rEstadoCivil,
                'rProfissao': rProfissao,
                'rNacionalidade': rNacionalidade,
                'rEstadoNaturalidade': rEstadoNaturalidade,
                'rCidadeNaturalidade': rCidadeNaturalidade,
                'rPai': rPai,
                'rMae': rMae,
                'rNascimento': rNascimento
            })
        },
        excluirReu: function() {
            while (this.deReu.length > 0) {
                this.deReu.pop()
            }
            this.$refs.resetarReu.limparReuModal()
        },
        //funções para o array deReuJuridico
        adicionarReuJuridico: function(rjNome, rjCnpj, rjTipoEmpresa, rjCep, rjEstado, rjCidade, rjBairro, rjTipoLogradouro, rjLogradouro, rjNumeroEndereco, rjComplemento, rjTipoEndereco, rjReferencia) {

            while (this.deReuJuridico.length > 0) {
                this.deReuJuridico.pop()
            }
            this.deReuJuridico.push({
                'rjNome': rjNome,
                'rjCnpj': rjCnpj,
                'rjTipoEmpresa': rjTipoEmpresa,
                'rjCep': rjCep,
                'rjEstado': rjEstado,
                'rjCidade': rjCidade,
                'rjBairro': rjBairro,
                'rjTipoLogradouro': rjTipoLogradouro,
                'rjLogradouro': rjLogradouro,
                'rjNumeroEndereco': rjNumeroEndereco,
                'rjComplemento': rjComplemento,
                'rjTipoEndereco': rjTipoEndereco,
                'rjReferencia': rjReferencia
            })
        },
        excluirReuJuridico: function() {
            while (this.deReuJuridico.length > 0) {
                this.deReuJuridico.pop()
            }
            this.$refs.resetarReuJuridico.limparReuJuridicoModal()
        },
        //funções para o array deRepresentanteReu
        adicionarRepresentanteReu: function(rrParte, rrPessoa, rrSexo, rrCpf, rrNome, rrMenor, rrDocumento, rrNumeroIdentificacao, rrEmissor, rrEmissao, rrTelefone, rrEmail, rrIncerto, rrCep, rrEstado, rrCidade, rrBairro, rrTipoLogradouro, rrLogradouro, rrNumeroEndereco, rrComplemento, rrTipoEndereco, rrReferencia, rrComprovante, rrValorPedido, rrValorLiquido, rrValorCausa, rrPretensao, rrEstadoCivil, rrProfissao, rrNacionalidade, rrEstadoNaturalidade, rrCidadeNaturalidade, rrPai, rrMae, rrNascimento) {

            while (this.deRepresentanteReu.length > 0) {
                this.deRepresentanteReu.pop()
            }
            this.deRepresentanteReu.push({
                'rrParte': rrParte,
                'rrPessoa': rrPessoa,
                'rrSexo': rrSexo,
                'rrCpf': rrCpf,
                'rrNome': rrNome,
                'rrMenor': rrMenor,
                'rrDocumento': rrDocumento,
                'rrNumeroIdentificacao': rrNumeroIdentificacao,
                'rrEmissor': rrEmissor,
                'rrEmissao': rrEmissao,
                'rrTelefone': rrTelefone,
                'rrEmail': rrEmail,
                'rrIncerto': rrIncerto,
                'rrCep': rrCep,
                'rrEstado': rrEstado,
                'rrCidade': rrCidade,
                'rrBairro': rrBairro,
                'rrTipoLogradouro': rrTipoLogradouro,
                'rrLogradouro': rrLogradouro,
                'rrNumeroEndereco': rrNumeroEndereco,
                'rrComplemento': rrComplemento,
                'rrTipoEndereco': rrTipoEndereco,
                'rrReferencia': rrReferencia,
                'rrComprovante': rrComprovante,
                'rrValorPedido': rrValorPedido,
                'rrValorLiquido': rrValorLiquido,
                'rrValorCausa': rrValorCausa,
                'rrPretensao': rrPretensao,
                'rrEstadoCivil': rrEstadoCivil,
                'rrProfissao': rrProfissao,
                'rrNacionalidade': rrNacionalidade,
                'rrEstadoNaturalidade': rrEstadoNaturalidade,
                'rrCidadeNaturalidade': rrCidadeNaturalidade,
                'rrPai': rrPai,
                'rrMae': rrMae,
                'rrNascimento': rrNascimento
            })
        },
        excluirRepresentanteReu: function() {
            while (this.deRepresentanteReu.length > 0) {
                this.deRepresentanteReu.pop()
            }
            this.$refs.resetarRepresentanteReu.limparRepresentanteReuModal()
        }
    }
}

</script>
