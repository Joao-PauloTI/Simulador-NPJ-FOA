<template>
    <div class="container">
        <h1>Cadastro de Réu - Pessoa Física</h1>
        <hr>
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Dados Pessoais</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <!-- Tipo -->
                    <p align="center"><strong>Tipo</strong> Réu - Pessoa Física</p>
                    <!-- Estrangeiro/Brasileiro -->
                    <div id="alinhado">
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="rEstrangeiro" name="r_estrangeiro" value="Estrangeiro e/ou brasileiro residente no exterior?" id="CR_dP1">
                                <label class="custom-control-label" for="CR_dP1"><strong>Estrangeiro e/ou brasileiro residente no exterior? </strong> </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Sexo -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Sexo </strong> </span>
                                <select class="custom-select" v-model="rSexo" name="r_sexo">
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
                                <input type="text" class="form-control" v-mask="'###.###.###-##'" v-model="rCpf" name="r_cpf">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nome-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Nome </strong> </span>
                                <input type="text" class="form-control" v-model="rNome" name="r_nome">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Documento de identificação -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Documento de identificação </strong> </span>
                                <select class="custom-select" v-model="rDocumento" name="r_documento">
                                    <option value="">Escolha um tipo</option>
                                    <option value="Registro Geral">Registro Geral</option>
                                    <option value="Carteira Nacional de Habilitação">Carteira Nacional de Habilitação</option>
                                    <option value="Passaporte">Passaporte</option>
                                    <option value="Carteira de Trabalho">Carteira de Trabalho</option>
                                    <option value="Carteira de Identidade">Carteira de Identidade</option>
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
                                <input type="text" class="form-control" v-model="rNumeroIdentificacao" name="r_numeroIdentificacao">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Órgão Expedidor -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Órgão Expedidor </strong> </span>
                                <input type="text" class="form-control" v-model="rExpedidor" name="r_expedidor">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Data de emissão -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Data de Emissão </strong> </span>
                                <input type="text" class="form-control" v-model="rEmissao" name="r_emissao" v-mask="'##/##/####'">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- E-mail -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>E-mail </strong> </span>
                                <input type="email" class="form-control" v-model="rEmail" name="r_email">
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
                    <strong>Endereço</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <!-- Endereco Incerto -->
                    <div id="alinhado">
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="rIncerto" name="r_incerto" value="Endereco Incerto" id="CR_e1">
                                <label class="custom-control-label" for="CR_e1"><strong>Endereco Incerto </strong> </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- CEP -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* CEP </strong> </span>
                                <input type="text" class="form-control" v-mask="'#####-###'" v-model="rCep" name="r_cep">
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
                                <input type="text" class="form-control" v-model="rEstado" name="r_estado">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Cidade -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Cidade </strong> </span>
                                <input type="text" class="form-control" v-model="rCidade" name="r_cidade">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Bairro -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Bairro </strong> </span>
                                <input type="text" class="form-control" v-model="rBairro" name="r_bairro">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Tipo de Logradouro -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Tipo de Logradouro </strong> </span>
                                <input type="text" class="form-control" v-model="rTipoLogradouro" name="r_tipoLogradouro">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Logradouro-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Logradouro </strong> </span>
                                <input type="text" class="form-control" v-model="rLogradouro" name="r_logradouro">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Número -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Número </strong> </span>
                                <input type="text" class="form-control" v-model="rNumeroEndereco" name="r_numeroEndereco">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Complemento-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Complemento </strong> </span>
                                <input type="text" class="form-control" v-model="rComplemento" name="r_complemento">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Tipo de Endereço -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Tipo de Endereço </strong> </span>
                                <select class="custom-select" v-model="rTipoEndereco" name="r_tipoEndereco">
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
                                <textarea rows="3" class="form-control" v-model="rReferencia" name="r_referencia"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Õpção extra -->
                    <div id="alinhado">
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="rComprovante" name="r_comprovante" value="O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial?" id="CR_E2">
                                <label class="custom-control-label" for="CR_E2">O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial? </label>
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
                                <input type="checkbox" class="custom-control-input" v-model="rValorLiquido" name="r_valorLiquido" value="O valor postulado é liquido" id="CR_vPC1">
                                <label class="custom-control-label" for="CR_vPC1">O valor postulado é liquido? </label>
                            </div>
                        </div>
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Valor Postulado</strong> </span>
                                <input type="text" class="form-control" v-money="'R$'" v-model="rValorPedido" name="r_valorPedido">
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
                                <input type="text" class="form-control" v-money="'R$'" v-model="rValorCausa" name="r_valorCausa">
                            </div>
                        </div>
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" v-model="rPretensao" name="r_pretensao" value="A pretensão deduzida versa sobre obrigações vincendas" id="CR_vPC2">
                                <label class="custom-control-label" for="CR_vPC2">A pretensão deduzida versa sobre obrigações vincendas? </label>
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
                                <select class="custom-select" v-model="rEstadoCivil" name="r_estadoCivil">
                                    <option value="">Escolha o estado civil</option>
                                    <option value="Solteiro">Solteiro</option>
                                    <option value="Casado">Casado</option>
                                    <option value="Viúvo">Viúvo</option>
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
                                <input type="text" class="form-control" v-model="rProfissao" name="r_profissao">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nacionalidade -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Nacionalidade </strong> </span>
                                <select class="custom-select" v-model="rNacionalidade" name="r_nacionalidade">
                                    <option value="Brasileira">Brasileira</option>
                                    <option value="Naturalizado brasileiro">Naturalizado brasileiro</option>
                                    <option value="Estrangeira">Estrangeira</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Naturalidade -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Escolha a Naturalidade </strong> </span>
                                <input type="text" class="form-control" placeholder="Estado" v-model="rEstadoNaturalidade" name="r_estadoNaturalidade">
                                <input type="text" class="form-control" placeholder="Cidade" v-model="rCidadeNaturalidade" name="r_cidadeNaturalidade">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nome do Pai-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Nome do Pai </strong> </span>
                                <input type="text" class="form-control" v-model="rPai" name="r_pai">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nome da Mãe-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Nome da Mãe </strong> </span>
                                <input type="text" class="form-control" v-model="rMae" name="r_mae">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Data de Nascimento -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Data de Nascimento </strong> </span>
                                <input type="string" class="form-control" v-mask="'##/##/####'" v-model="rNascimento" name="r_nascimento">
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
            <button type="button" @click="novoReu" data-dismiss="modal" class="btn btn-primary">SALVAR</button>
            <button type="button" data-dismiss="modal" class="btn btn-danger">FECHAR</button>
        </div>
    </div>
</template>
<script>
    export default {
    name: 'crmodal',
    data: function() {
        return {
            rEstrangeiro: '',
            rSexo: '',
            rCpf: '',
            rNome: '',
            rDocumento: '',
            rNumeroIdentificacao: '',
            rExpedidor: '',
            rEmissao: '',
            rEmail: '',
            rIncerto: '',
            rCep: '',
            rEstado: '',
            rCidade: '',
            rBairro: '',
            rTipoLogradouro: '',
            rLogradouro: '',
            rNumeroEndereco: '',
            rComplemento: '',
            rTipoEndereco: '',
            rReferencia: '',
            rComprovante: '',
            rValorPedido: '',
            rValorLiquido: '',
            rValorCausa: '',
            rPretensao: '',
            rEstadoCivil: '',
            rProfissao: '',
            rNacionalidade: '',
            rEstadoNaturalidade: '',
            rCidadeNaturalidade: '',
            rPai: '',
            rMae: '',
            rNascimento: ''
        }
    },
    methods: {
        ajuda: function() {
            alert(
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")
        },
        novoReu: function() {
            this.$emit('crDados', this.rEstrangeiro, this.rSexo, this.rCpf, this.rNome, this.rDocumento, this.rNumeroIdentificacao, this.rExpedidor, this.rEmissao, this.rEmail, this.rIncerto, this.rCep, this.rEstado, this.rCidade, this.rBairro, this.rTipoLogradouro, this.rLogradouro, this.rNumeroEndereco, this.rComplemento, this.rTipoEndereco, this.rReferencia, this.rComprovante, this.rValorPedido, this.rValorLiquido, this.rValorCausa, this.rPretensao, this.rEstadoCivil, this.rProfissao, this.rNacionalidade, this.rEstadoNaturalidade, this.rCidadeNaturalidade, this.rPai, this.rMae, this.rNascimento)
        },
        limparReuModal: function() {
            this.rEstrangeiro = '',
            this.rSexo = '',
            this.rCpf = '',
            this.rNome = '',
            this.rDocumento = '',
            this.rNumeroIdentificacao = '',
            this.rExpedidor = '',
            this.rEmissao = '',
            this.rEmail = '',
            this.rIncerto = '',
            this.rCep = '',
            this.rEstado = '',
            this.rCidade = '',
            this.rBairro = '',
            this.rTipoLogradouro = '',
            this.rLogradouro = '',
            this.rNumeroEndereco = '',
            this.rComplemento = '',
            this.rTipoEndereco = '',
            this.rReferencia = '',
            this.rComprovante = '',
            this.rValorPedido = '',
            this.rValorLiquido = '',
            this.rValorCausa = '',
            this.rPretensao = '',
            this.rEstadoCivil = '',
            this.rProfissao = '',
            this.rNacionalidade = '',
            this.rEstadoNaturalidade = '',
            this.rCidadeNaturalidade = '',
            this.rPai = '',
            this.rMae = '',
            this.rNascimento = ''
        }
    }
}

</script>
<style type="text/css" scoped>
#alinhado {
    margin-left: 30%
}

</style>
