<template>
    <div class="container">
        <h1>Cadastro de Representante de Réu</h1>
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
                    <!-- Parte -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Parte </strong> </span>
                                <select class="custom-select" name="rr_parte">
                                    <option value="">Escolha um tipo</option>
                                    <option value="Curador">Curador</option>
                                    <option value="Síndico">Síndico</option>
                                    <option value="Tutor">Tutor</option>
                                    <option value="Assistente">Assistente</option>
                                    <option value="Representante">Representante</option>
                                    <option value="Procurador">Procurador</option>
                                    <option value="Amicus Curiae">Amicus Curiae</option>
                                    <option value="Escritório de Advocacia">Escritório de Advocacia</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Pessoa Física ou Jurídica -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Pessoa Física ou Jurídica </strong> </span>
                                <select class="custom-select" name="rr_pessoa">
                                    <option value="Pessoa Física">Pessoa Física</option>
                                    <option value="Pessoa Jurídica">Pessoa Jurídica</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Sexo -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Sexo </strong> </span>
                                <select class="custom-select" name="rr_sexo">
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
                                <input type="text" class="form-control" v-mask="'###.###.###-##'" name="rr_cpf">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nome-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Nome </strong> </span>
                                <input type="text" class="form-control" name="rr_nome">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Documento de identificação -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Documento de identificação </strong> </span>
                                <select class="custom-select" name="rr_documento">
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
                                <input type="text" class="form-control" name="rr_numeroIdentificacao">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Órgão Emissor -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Órgão Emissor </strong> </span>
                                <input type="text" class="form-control" name="rr_emissor">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Data de Emissão -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Data de Emissão </strong> </span>
                                <input type="text" class="form-control" name="rr_emissao" v-mask="'##/##/####'">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Telefone -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Telefone </strong> </span>
                                <input type="tel" class="form-control" v-mask="'(##)#####-####'" name="rr_telefone">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- E-mail -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>E-mail </strong> </span>
                                <input type="email" class="form-control" name="rr_email">
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
                                <input type="checkbox" class="custom-control-input" name="rr_incerto" value="Endereco Incerto" id="CRR_e1">
                                <label class="custom-control-label" for="CRR_e1"><strong>Endereco Incerto </strong> </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- CEP -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* CEP </strong> </span>
                                <input type="text" class="form-control" v-mask="'#####-###'" name="rr_cep">
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
                                <input type="text" class="form-control" name="rr_estado">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Cidade -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Cidade </strong> </span>
                                <input type="text" class="form-control" name="rr_cidade">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Bairro -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Bairro </strong> </span>
                                <input type="text" class="form-control" name="rr_bairro">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Tipo de Logradouro -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Tipo de Logradouro </strong> </span>
                                <input type="text" class="form-control" name="rr_tipoLogradouro">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Logradouro-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Logradouro </strong> </span>
                                <input type="text" class="form-control" name="rr_logradouro">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Número -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Número </strong> </span>
                                <input type="text" class="form-control" name="rr_numeroEndereco">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Complemento-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Complemento </strong> </span>
                                <input type="text" class="form-control" name="rr_complemento">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Tipo de Endereço -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Tipo de Endereço </strong> </span>
                                <select class="custom-select" name="rr_tipoEndereco">
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
                                <textarea rows="3" class="form-control" name="rr_referencia"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Õpção extra -->
                    <div id="alinhado">
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="rr_comprovante" value="O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial" id="CRR_e2">
                                <label class="custom-control-label" for="CRR_e2">O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial? </label>
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
                                <input type="checkbox" class="custom-control-input" name="rr_valorLiquido" value="O valor postulado é liquido" id="CRR_vPC1">
                                <label class="custom-control-label" for="CRR_vPC1">O valor postulado é liquido? </label>
                            </div>
                        </div>
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Valor Postulado</strong> </span>
                                <input type="text" class="form-control" v-money="'R$'" name="rr_valorPedido">
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
                                <input type="text" class="form-control" v-money="'R$'" name="rr_valorCausa">
                            </div>
                        </div>
                        <div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="rr_pretensao" value="A pretensão deduzida versa sobre obrigações vincendas" id="CRR_vPC2">
                                <label class="custom-control-label" for="CRR_vPC2">A pretensão deduzida versa sobre obrigações vincendas? </label>
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
                                <select class="custom-select" name="rr_estadoCivil">
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
                                <input type="text" class="form-control" name="rr_profissao">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nacionalidade -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Nacionalidade </strong> </span>
                                <select class="custom-select" name="rr_nacionalidade">
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
                                <input type="text" class="form-control" placeholder="Cidade" name="rr_estadoNaturalidade">
                                <input type="text" class="form-control" placeholder="Estado" name="rr_cidadeNaturalidade">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nome do Pai-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Nome do Pai </strong> </span>
                                <input type="text" class="form-control" name="rr_pai">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Nome da Mãe-->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Nome da Mãe </strong> </span>
                                <input type="text" class="form-control" name="rr_mae">
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Data de Nascimento -->
                    <div id="alinhado">
                        <div class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Data de Nascimento </strong> </span>
                                <input type="text" class="form-control" v-mask="'##/##/####'" name="rr_nascimento">
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
            <button type="submit" class="btn btn-primary">SALVAR</button>
            <button type="button" data-dismiss="modal" class="btn btn-danger">FECHAR</button>
        </div>
    </div>
</template>
<script>
    export default {
    name: 'crrmodal',
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
<style type="text/css" scoped>
#alinhado {
    margin-left: 30%
}

</style>
