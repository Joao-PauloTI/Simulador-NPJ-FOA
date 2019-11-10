<template>
    <div class="container">
        <h1>Cadastro de Autor</h1>
        <hr>
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Dados Pessoais</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <p align="center"><strong>Tipo</strong> Autor</p>
                <div class="container">
                    <div align="center">
                        <!--Opções de marcar-->
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="aIncapaz" name="a_incapaz" value="Incapaz" id="CA_dP1">
                                <label class="custom-control-label" for="CA_dP1"> Incapaz </label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="aMassa" name="a_massa" value="Massa Falida" id="CA_dP2">
                                <label class="custom-control-label" for="CA_dP2"> Massa Falida </label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="aInsolvente" name="a_insolvente" value="Insolvente Civil" id="CA_dP3">
                                <label class="custom-control-label" for="CA_dP3"> Insolvente Civil</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="aPreso" name="a_preso" value="Preso" id="CA_dP4">
                                <label class="custom-control-label" for="CA_dP4"> Preso </label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="aEspolio" name="a_espolio" value="Espólio com interesse de Incapaz" id="CA_dP5">
                                <label class="custom-control-label" for="CA_dP5"> Espólio com interesse de Incapaz </label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="aCondominio" name="a_condominio" value="Condomínio" id="CA_dP6">
                                <label class="custom-control-label" for="CA_dP6"> Condomínio </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Ministério Público -->
                    <div id="alinhado">
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="aMinisterio" name="a_ministerio" value="Ministério Público" id="CA_dP7">
                                <label class="custom-control-label" for="CA_dP7"><strong>Ministério Público? </strong> </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Pessoa Física ou Jurídica -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Pessoa Física ou Jurídica </strong></span>
                                <select class="custom-select" v-model="aPessoa" v-on:change="gerarModeloAutor">
                                    <option value="">Escolha um tipo de pessoa</option>
                                    <option value="Pessoa Física">Pessoa Física</option>
                                    <option value="Pessoa Jurídica">Pessoa Jurídica</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Estrangeiro/Brasileiro -->
                    <div id="alinhado">
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="aEstrangeiro" name="a_estrangeiro" value="Estrangeiro e/ou brasileiro residente no exterior" id="CA_dP8">
                                <label class="custom-control-label" for="CA_dP8"><strong>Estrangeiro e/ou brasileiro residente no exterior? </strong> </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Sexo -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Sexo </strong> </span>
                                <select class="custom-select" v-model="aSexo" name="a_sexo">
                                    <option value="">Escolha um sexo</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- CPF/CNPJ-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* CPF/CNPJ </strong> </span>
                                <input type="text" class="form-control" v-model="aCpf" name="a_cpf"  v-on:change="gerarModeloAutor" v-if="aPessoa === ''" v-mask="'#################'">
                                <input type="text" class="form-control" v-model="aCpf" name="a_cpf"  v-on:change="gerarModeloAutor" v-else-if="aPessoa === 'Pessoa Física'" v-mask="'###.###.###-##'">
                                <input type="text" class="form-control" v-model="aCpf" name="a_cpf"  v-on:change="gerarModeloAutor" v-else v-mask="'##.###.###/####-##'">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nome-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Nome </strong> </span>
                                <input type="text" class="form-control" v-model="aNome">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Menor de idade -->
                    <div id="alinhado">
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="aMenor" name="a_menor" value="Menor de idade" id="CA_dP9">
                                <label class="custom-control-label" for="CA_dP9"><strong>Menor de idade</strong> </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Documento de identificação -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Documento de identificação </strong> </span>
                                <select class="custom-select" v-model="aDocumento" name="a_documento">
                                    <option value="">Escolha um tipo</option>
                                    <option value="Registro Geral">Registro Geral</option>
                                    <option value="Carteira Nacional de Habilitação">Carteira Nacional de Habilitação</option>
                                    <option value="Passaporte">Passaporte</option>
                                    <option value="Carteira de Trabalho">Carteira de Trabalho</option>
                                    <option value="Certificado de Dispensa de Incorporação">Certificado de Dispensa de Incorporação</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Número -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Número </strong> </span>
                                <input type="text" class="form-control" v-model="aNumeroIdentificacao" name="a_numeroIdentificacao" v-if="aDocumento === ''" v-mask="'#################'">
                                <input type="text" class="form-control" v-model="aNumeroIdentificacao" name="a_numeroIdentificacao" v-else-if="aDocumento === 'Passaporte'" v-mask="">
                                <input type="text" class="form-control" v-model="aNumeroIdentificacao" name="a_numeroIdentificacao" v-else-if="aDocumento === 'Registro Geral'" v-mask="'##.###.###-#'">
                                <input type="text" class="form-control" v-model="aNumeroIdentificacao" name="a_numeroIdentificacao" v-else-if="aDocumento === 'Carteira Nacional de Habilitação'" v-mask="'###########'">
                                <input type="text" class="form-control" v-model="aNumeroIdentificacao" name="a_numeroIdentificacao" v-else-if="aDocumento === 'Carteira de Trabalho'" v-mask="'###.#####.##-#'">
                                <input type="text" class="form-control" v-model="aNumeroIdentificacao" name="a_numeroIdentificacao" v-else v-mask="'############'">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Órgão Expedidor -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Órgão Expedidor </strong> </span>
                                <input type="text" class="form-control" v-model="aExpedidor" name="a_expedidor">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Data de Emissão -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Data de Emissão </strong> </span>
                                <input type="text" class="form-control" v-model="aEmissao" name="a_emissao" v-mask="'##/##/####'">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Telefone -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Telefone </strong> </span>
                                <input type="tel" class="form-control" v-mask="'(##)#####-####'" v-model="aTelefone" name="a_telefone">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- E-mail -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>E-mail </strong> </span>
                                <input type="email" class="form-control" v-model="aEmail" name="a_email">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Advogado Representante</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <table class="table table-borderless" v-if="aAdvogadoRepresentanteDados != null || aDefensorRepresentanteDados != null">
                        <tr>
                            <th>OAB / Matrícula</th>
                            <th>Nome</th>
                            <th>Representa</th>
                            <th>Intimação</th>
                        </tr>
                        <tr v-for="advogado in aAdvogadoRepresentanteDados">
                            <td>{{advogado.arEstadoOAB}}{{advogado.arNumeroOAB}}</td>
                            <td>{{advogado.arNome}}</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="ad_representa[]" value="Sim" v-bind:id="advogado.arNumeroOAB" checked>
                                    <label class="custom-control-label" v-bind:for="advogado.arNumeroOAB"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="ad_intimacao[]" value="Sim" v-bind:id="advogado.arNome" checked>
                                    <label class="custom-control-label" v-bind:for="advogado.arNome"></label>
                                </div>
                            </td>
                        </tr>
                        <tr v-for="defensor in aDefensorRepresentanteDados">
                            <td>{{defensor.arMatricula}}</td>
                            <td>{{defensor.arNome}}</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="dp_representa[]" value="Sim" v-bind:id="defensor.arMatricula" checked>
                                    <label class="custom-control-label" v-bind:for="defensor.arMatricula"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="dp_intimacao[]" value="Sim" v-bind:id="defensor.arNome" checked>
                                    <label class="custom-control-label" v-bind:for="defensor.arNome"></label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Endereço</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <!-- CEP -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* CEP </strong> </span>
                                <input type="text" class="form-control" v-model="aCep" name="a_cep" v-mask="'#####-###'">
                                <a href=""><ins> verificar CEP</ins> </a>
                                <a href=""><ins> Correios</ins> </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Estado -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Estado </strong> </span>
                                <input type="text" class="form-control" v-model="aEstado" name="a_estado">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Cidade -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Cidade </strong> </span>
                                <input type="text" class="form-control" v-model="aCidade" name="a_cidade">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Bairro -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Bairro </strong> </span>
                                <input type="text" class="form-control" v-model="aBairro" name="a_bairro">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Tipo de Logradouro -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Tipo de Logradouro </strong> </span>
                                <input type="text" class="form-control" v-model="aTipoLogradouro" name="a_tipoLogradouro">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Logradouro-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Logradouro </strong> </span>
                                <input type="text" class="form-control" v-model="aLogradouro" name="a_logradouro">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Número -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Número </strong> </span>
                                <input type="text" class="form-control" v-model="aNumeroEndereco" name="a_numeroEndereco">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Complemento-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Complemento </strong> </span>
                                <input type="text" class="form-control" v-model="aComplemento" name="a_complemento">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Tipo de Endereço -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Tipo de Endereço </strong> </span>
                                <select class="custom-select" v-model="aTipoEndereco" name="a_tipoEndereco">
                                    <option value="">Escolha o tipo de endereço</option>
                                    <option value="Residencial">Residencial</option>
                                    <option value="Empresarial">Empresarial</option>
                                    <option value="Comercial">Comercial</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Referência-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Referência </strong> </span>
                                <textarea rows="3" class="form-control" v-model="aReferencia" name="a_referencia"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Õpção extra -->
                    <div id="alinhado">
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="aComprovante" name="a_comprovante" value="O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial" id="CA_e1">
                                <label class="custom-control-label" for="CA_e1">O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial? </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Valor do Pedido</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <!--Valor do Pedido-->
                    <div id="alinhado">
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="aValorLiquido" name="a_valorLiquido" value="O valor postulado é liquido?" id="CA_vPC1">
                                <label class="custom-control-label" for="CA_vPC1">O valor postulado é liquido? </label>
                            </div>
                        </div>
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Valor Postulado</strong> </span>
                                <input type="text" class="form-control" v-model="aValorPedido" name="a_valorPedido" v-money="'R$'">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Valor da Causa</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <!--Valor da Causa-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Valor da Causa</strong> </span>
                                <input type="text" class="form-control" v-model="aValorCausa" name="a_valorCausa" v-money="'R$'">
                            </div>
                        </div>
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="aPretensao" name="a_pretensao" value="A pretensão deduzida versa sobre obrigações vincendas?" id="CA_vPC2">
                                <label class="custom-control-label" for="CA_vPC2">A pretensão deduzida versa sobre obrigações vincendas? </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Dados Complementares</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <!-- Estado Civil -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Estado Civil </strong> </span>
                                <select class="custom-select" v-model="aEstadoCivil" name="a_estadoCivil">
                                    <option value="">Escolha o estado civil</option>
                                    <option value="Solteiro">Solteiro</option>
                                    <option value="Casado">Casado</option>
                                    <option value="Víuvo">Víuvo</option>
                                    <option value="Separado Judicialmente">Separado Judicialmente</option>
                                    <option value="Divorciado">Divorciado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Profissão -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Profissão </strong> </span>
                                <input type="text" class="form-control" v-model="aProfissao" name="a_profissao">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nacionalidade -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Nacionalidade </strong> </span>
                                <input type="text" class="form-control" v-model="aNacionalidade" name="a_nacionalidade" value="Brasileira">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Naturalidade -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Escolha a Naturalidade </strong> </span>
                                <input type="text" class="form-control" placeholder="Estado" v-model="aEstadoNaturalidade" name="a_estadoNaturalidade">
                                <input type="text" class="form-control" placeholder="Cidade" v-model="aCidadeNaturalidade" name="a_cidadeNaturalidade">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nome do Pai-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Nome do Pai </strong> </span>
                                <input type="text" class="form-control" v-model="aPai" name="a_pai">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nome da Mãe-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Nome da Mãe </strong> </span>
                                <input type="text" class="form-control" v-model="aMae" name="a_mae">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Data de Nascimento -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Data de Nascimento </strong> </span>
                                <input type="text" class="form-control" v-model="aNascimento" name="a_nascimento" v-mask="'##/##/####'">
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <br>
        <!--Botões SALVAR/FECHAR-->
        <div align="center">
            <button type="button" @click="novoAutor" data-dismiss="modal" class="btn btn-primary">SALVAR</button>
            <button type="button" data-dismiss="modal" class="btn btn-danger">FECHAR</button>
        </div>
    </div>
</template>
<script>
    export default {
    name: 'camodal',
    data: function() {
        return {
            aAdvogadoRepresentanteDados: [],
            aDefensorRepresentanteDados: [],
            aIncapaz: '',
            aMassa: '',
            aInsolvente: '',
            aPreso: '',
            aEspolio: '',
            aCondominio: '',
            aMinisterio: '',
            aPessoa: '',
            aEstrangeiro: '',
            aSexo: '',
            aCpf: '',
            aNome: '',
            aMenor: '',
            aDocumento: '',
            aNumeroIdentificacao: '',
            aExpedidor: '',
            aEmissao: '',
            aTelefone: '',
            aEmail: '',
            aCep: '',
            aEstado: '',
            aCidade: '',
            aBairro: '',
            aTipoLogradouro: '',
            aLogradouro: '',
            aNumeroEndereco: '',
            aComplemento: '',
            aTipoEndereco: '',
            aReferencia: '',
            aComprovante: '',
            aValorPedido: '',
            aValorLiquido: '',
            aValorCausa: '',
            aPretensao: '',
            aEstadoCivil: '',
            aProfissao: '',
            aNacionalidade: 'Brasileira',
            aEstadoNaturalidade: '',
            aCidadeNaturalidade: '',
            aPai: '',
            aMae: '',
            aNascimento: ''
        }
    },
    created: function() {
        this.$eventHub.$on('enviarAdvogadoDados', this.receberAdvogadoDados)
        this.$eventHub.$on('enviarDefensorDados', this.receberDefensorDados)
    },
    beforeDestroy: function() {
        this.$eventHub.$off('enviarAdvogadoDados')
        this.$eventHub.$off('enviarDefensorDados')
    },
    methods: {
        ajuda: function() {
            alert("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")
        },
        receberAdvogadoDados: function(advogado) {
            this.aAdvogadoRepresentanteDados = advogado
        },
        receberDefensorDados: function(defensor) {
            this.aDefensorRepresentanteDados = defensor
        },
        novoAutor: function() {
            this.$emit('caDados', this.aIncapaz, this.aMassa, this.aInsolvente, this.aPreso, this.aEspolio, this.aCondominio, this.aMinisterio, this.aPessoa, this.aEstrangeiro, this.aSexo, this.aCpf, this.aNome, this.aMenor, this.aDocumento, this.aNumeroIdentificacao, this.aExpedidor, this.aEmissao, this.aTelefone, this.aEmail, this.aCep, this.aEstado, this.aCidade, this.aBairro, this.aTipoLogradouro, this.aLogradouro, this.aNumeroEndereco, this.aComplemento, this.aTipoEndereco, this.aReferencia, this.aComprovante, this.aValorPedido, this.aValorLiquido, this.aValorCausa, this.aPretensao, this.aEstadoCivil, this.aProfissao, this.aNacionalidade, this.aEstadoNaturalidade, this.aCidadeNaturalidade, this.aPai, this.aMae, this.aNascimento)
        },
        limparAutorModal: function() {
            this.aIncapaz = '',
            this.aMassa = '',
            this.aInsolvente = '',
            this.aPreso = '',
            this.aEspolio = '',
            this.aCondominio = '',
            this.aMinisterio = '',
            this.aPessoa = '',
            this.aEstrangeiro = '',
            this.aSexo = '',
            this.aCpf = '',
            this.aNome = '',
            this.aMenor = '',
            this.aDocumento = '',
            this.aNumeroIdentificacao = '',
            this.aExpedidor = '',
            this.aEmissao = '',
            this.aTelefone = '',
            this.aEmail = '',
            this.aCep = '',
            this.aEstado = '',
            this.aCidade = '',
            this.aBairro = '',
            this.aTipoLogradouro = '',
            this.aLogradouro = '',
            this.aNumeroEndereco = '',
            this.aComplemento = '',
            this.aTipoEndereco = '',
            this.aReferencia = '',
            this.aComprovante = '',
            this.aValorPedido = '',
            this.aValorLiquido = '',
            this.aValorCausa = '',
            this.aPretensao = '',
            this.aEstadoCivil = '',
            this.aProfissao = '',
            this.aNacionalidade = '',
            this.aEstadoNaturalidade = '',
            this.aCidadeNaturalidade = '',
            this.aPai = '',
            this.aMae = '',
            this.aNascimento = ''
        },
        gerarModeloAutor: function() {
            if(this.aPessoa === 'Pessoa Física' && this.aCpf === '111.111.111-11'){
                this.aSexo = 'Masculino'
                this.aNome = 'Antônio Pereira da Silva'
                this.aDocumento = 'Registro Geral'
                this.aNumeroIdentificacao = '45.489.718-7'
                this.aExpedidor = 'DETRAN-RJ'
                this.aEmissao = '11/04/1991'
                this.aTelefone = '(24)99984-8715'
                this.aEmail = 'antonio@email.com'
                this.aCep = '12154-187'
                this.aEstado = 'Rio de Janeiro'
                this.aCidade = 'Volta Redonda'
                this.aBairro = 'Santo Agostinho'
                this.aTipoLogradouro = 'Rua'
                this.aLogradouro = 'José Peixoto'
                this.aNumeroEndereco = '459'
                this.aTipoEndereco = 'Residencial'
                this.aValorPedido = '400.00'
                this.aValorCausa = '254.00'
                this.aEstadoCivil = 'Casado'
                this.aProfissao = 'Mecânico'
                this.aNacionalidade = 'Brasileira'
                this.aEstadoNaturalidade = 'Rio de Janeiro'
                this.aCidadeNaturalidade = 'Barra do Piraí'
                this.aPai = 'Maria Angela Pereira'
                this.aMae = 'Marcus de Souza Pereira'
                this.aNascimento = '30/01/1974'
            }
        }
    }
}

</script>
<style type="text/css" scoped>
#alinhado {
    margin-left: 30%
}

</style>
