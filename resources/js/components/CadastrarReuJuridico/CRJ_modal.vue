<template>
    <div class="container">
        <h1>Cadastro de Réu - Pessoa Jurídica</h1>
        <hr>
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Informações da Pessoa Jurídica</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <!-- Tipo -->
                    <p align="center"><strong>Tipo</strong> Réu - Pessoa Jurídica</p>
                    <!-- CNPJ-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* CNPJ </strong> </span>
                                <input type="text" class="form-control" v-mask="'##.###.###/####-##'" v-model="rjCnpj" name="rj_cnpj" v-on:change="gerarModeloReuJuridico">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nome-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Nome </strong> </span>
                                <input type="text" class="form-control" v-model="rjNome">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Tipo de Empresa -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Tipo de Empresa </strong> </span>
                                <select class="custom-select" v-model="rjTipoEmpresa" name="rj_tipoEmpresa">
                                    <option value="">Escolha um tipo</option>
                                    <option value="Sociedade Empresária Limitada (Ltda.)">Sociedade Empresária Limitada (Ltda.)</option>
                                    <option value="Empresa Individual de Responsabilidade Limitada (Eireli)">Empresa Individual de Responsabilidade Limitada (Eireli)</option>
                                    <option value="Empresa Individual">Empresa Individual</option>
                                    <option value="Microempreendedor Indivual (MEI)">Microempreendedor Indivual (MEI)</option>
                                    <option value="Sociedade Simples (SS)">Sociedade Simples (SS)</option>
                                    <option value="Sociedade Anônima (SA)">Sociedade Anônima (SA)</option>
                                </select>
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
                    <!-- CEP -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* CEP </strong> </span>
                                <input type="text" class="form-control" v-mask="'#####-###'" v-model="rjCep" name="rj_cep">
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
                                <input type="text" class="form-control" v-model="rjEstado" name="rj_estado">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Cidade -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Cidade </strong> </span>
                                <input type="text" class="form-control" v-model="rjCidade" name="rj_cidade">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Bairro -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Bairro </strong> </span>
                                <input type="text" class="form-control" v-model="rjBairro" name="rj_bairro">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Tipo de Logradouro -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Tipo de Logradouro </strong> </span>
                                <input type="text" class="form-control" v-model="rjTipoLogradouro" name="rj_tipoLogradouro">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Logradouro-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Logradouro </strong> </span>
                                <input type="text" class="form-control" v-model="rjLogradouro" name="rj_logradouro">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Número -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Número </strong> </span>
                                <input type="text" class="form-control" v-model="rjNumeroEndereco" name="rj_numeroEndereco">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Complemento-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Complemento </strong> </span>
                                <input type="text" class="form-control" v-model="rjComplemento" name="rj_complemento">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Tipo de Endereço -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Tipo de Endereço </strong> </span>
                                <select class="custom-select" v-model="rjTipoEndereco" name="rj_tipoEndereco">
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
                                <textarea rows="3" class="form-control" v-model="rjReferencia" name="rj_referencia"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--Botões SALVAR/FECHAR-->
        <div align="center">
            <button type="button" @click="novoReuJuridico" data-dismiss="modal" class="btn btn-primary">SALVAR</button>
            <button type="button" data-dismiss="modal" class="btn btn-danger">FECHAR</button>
        </div>
    </div>
</template>
<script>
    export default {
    name: 'crjmodal',
    data: function() {
        return {
            rjNome: '',
            rjCnpj: '',
            rjTipoEmpresa: '',
            rjCep: '',
            rjEstado: '',
            rjCidade: '',
            rjBairro: '',
            rjTipoLogradouro: '',
            rjLogradouro: '',
            rjNumeroEndereco: '',
            rjComplemento: '',
            rjTipoEndereco: '',
            rjReferencia: ''
        }
    },
    methods: {
        ajuda: function() {
            alert(
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")
        },
        novoReuJuridico: function() {
            this.$emit('crjDados', this.rjNome, this.rjCnpj, this.rjTipoEmpresa, this.rjCep, this.rjEstado, this.rjCidade, this.rjBairro, this.rjTipoLogradouro, this.rjLogradouro, this.rjNumeroEndereco, this.rjComplemento, this.rjTipoEndereco, this.rjReferencia)
        },
        limparReuJuridicoModal: function() {
            this.rjNome = '',
            this.rjCnpj = '',
            this.rjTipoEmpresa = '',
            this.rjCep = '',
            this.rjEstado = '',
            this.rjCidade = '',
            this.rjBairro = '',
            this.rjTipoLogradouro = '',
            this.rjLogradouro = '',
            this.rjNumeroEndereco = '',
            this.rjComplemento = '',
            this.rjTipoEndereco = '',
            this.rjReferencia = ''
        },
        gerarModeloReuJuridico: function() {
            if(this.rjCnpj === '44.444.444/4444-44') {
                this.rjNome = 'Correios - Empresa Brasileira de Correios e Telégrafos'
                this.rjTipoEmpresa = 'Sociedade Empresária Limitada (Ltda.)'
                this.rjCep = '27215-580'
                this.rjEstado = 'Rio de Janeiro'
                this.rjCidade = 'Volta Redonda'
                this.rjBairro = 'Aterrado'
                this.rjTipoLogradouro = 'Avenida'
                this.rjLogradouro = 'Paulo de Frontin'
                this.rjNumeroEndereco = '897'
                this.rjTipoEndereco = 'Empresarial'
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
