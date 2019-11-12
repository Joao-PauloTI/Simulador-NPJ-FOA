<template>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>
                <strong>Advogado / Representante</strong>
                <a href="#ajuda" v-on:click="ajuda()">(?)</a>
            </h5>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <td>
                        <label for="DE_aR1">
                            <select class="custom-select" id="DE_aR1" v-model="arAdvogadoRepresentante" v-on:change="gerarNome">
                                <option value="Advogado">Advogado</option>
                                <option value="Defensor Público">Defensor Público</option>
                            </select>
                        </label>
                    </td>
                    <td v-show="arAdvogadoRepresentante === 'Advogado'">
                        <div class="form-inline">
                            <span style="margin-right: 3px"><strong> Número de OAB </strong> </span>
                            <label for="DE_aR2">
                                <select class="custom-select" id="DE_aR2" v-model="arEstadoOAB" v-on:change="gerarNome">
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </label>
                            <input type="text" class="form-control col-md-3" v-mask="'######'" v-model="arNumeroOAB" v-on:input="gerarNome">
                        </div>
                    </td>
                    <td v-show="arAdvogadoRepresentante === 'Defensor Público'">
                        <div class="form-inline">
                            <span style="margin-right: 3px"><strong> Matrícula </strong> </span>
                            <input type="text" class="form-control col-md-5" v-mask="'##########'" v-model="arMatricula" v-on:input="gerarNome">
                        </div>
                    </td>
                    <td>
                        <input type="text" v-model="arNome" readonly v-autowidth="{maxWidth: '200px', minWidth: '140px', comfortZone: 0}" style="border: 0; margin-top: 5px; outline: none">
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary" v-if="arAdvogadoRepresentante === 'Advogado' && arEstadoOAB != '' && arNumeroOAB != '' && arNome != ''" v-on:click="adicionarAdvogado(arEstadoOAB, arNumeroOAB)">Adicionar</button>
                        <button type="button" class="btn btn-primary" v-if="arAdvogadoRepresentante === 'Defensor Público' && arMatricula != '' && arNome != ''" v-on:click="adicionarDefensor(arMatricula)">Adicionar</button>
                    </td>
                </tr>
            </table>
            <div v-if="arAdvogadoDados.length > 0 || arDefensorDados.length > 0">
                <table class="table table-borderless">
                    <tr v-for="advogado, index in arAdvogadoDados">
                        <td>
                            <input type="text" name="ad_categoria[]" value="Advogado" readonly v-autowidth="{maxWidth: '200px', minWidth: '20px', comfortZone: 0}" style="border: 0; outline: none">
                        </td>
                        <td>
                            <input type="text" name="ad_estadoOAB[]" v-bind:value="advogado.arEstadoOAB" readonly v-autowidth="{maxWidth: '200px', minWidth: '20px', comfortZone: 0}" style="border: 0; outline: none"><input type="text"
                              name="ad_numeroOAB[]" v-bind:value="advogado.arNumeroOAB" readonly v-autowidth="{maxWidth: '200px', minWidth: '20px', comfortZone: 0}" style="border: 0; outline: none">
                        </td>
                        <td>
                            <input type="text" name="ad_nome[]" v-bind:value="advogado.arNome" readonly v-autowidth="{maxWidth: '200px', minWidth: '20px', comfortZone: 0}" style="border: 0; outline: none">
                        </td>
                        <td><a href="#" v-on:click="excluirAdvogado(index)">Excluir</a></td>
                    </tr>
                    <tr v-for="defensor, index in arDefensorDados">
                        <td>
                            <input type="text" name="dp_categoria[]" value="Defensor Público" readonly v-autowidth="{maxWidth: '200px', minWidth: '20px', comfortZone: 0}" style="border: 0; outline: none">
                        </td>
                        <td>
                            <input type="text" name="dp_matricula[]" v-bind:value="defensor.arMatricula" readonly v-autowidth="{maxWidth: '200px', minWidth: '20px', comfortZone: 0}" style="border: 0; outline: none">
                        </td>
                        <td>
                            <input type="text" name="dp_nome[]" v-bind:value="defensor.arNome" readonly v-autowidth="{maxWidth: '200px', minWidth: '20px', comfortZone: 0}" style="border: 0; outline: none">
                        </td>
                        <td><a href="#" v-on:click="excluirDefensor(index)">Excluir</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <br>
</div>
</template>
<script>
export default {
    name: 'deadvogadoRepresentante',
    data: function() {
        return {
            arAdvogadoRepresentante: 'Advogado',
            arEstadoOAB: 'RJ',
            arNumeroOAB: '',
            arMatricula: '',
            arNome: '',
            arAdvogadoDados: [],
            arDefensorDados: []
        }
    },
    methods: {
        ajuda: function() {
            alert(
                "Advogado - RJ 111111 - Fernanda Canedo; \nAdvogado - RJ 222222 - Thainá Brigida; \nAdvogado - SP 333333 - Daniele Souza; \nDefensor Público - 4444444444 - Adilson Gustavo; \nDefensor Público - 5555555555 - Rosenclever Lopes; \nDefensor Público - 6666666666 - Leonardo Feliciano"
                )
        },
        gerarNome: function() {
            if (this.arAdvogadoRepresentante === 'Advogado' && this.arEstadoOAB === 'RJ' && this.arNumeroOAB === '111111') {
                this.arMatricula = ''
                this.arNome = 'Fernanda Canedo'
            } else if (this.arAdvogadoRepresentante === 'Advogado' && this.arEstadoOAB === 'RJ' && this.arNumeroOAB === '222222') {
                this.arMatricula = ''
                this.arNome = 'Thainá Brigida'
            } else if (this.arAdvogadoRepresentante === 'Advogado' && this.arEstadoOAB === 'SP' && this.arNumeroOAB === '333333') {
                this.arMatricula = ''
                this.arNome = 'Daniele Souza'
            } else if (this.arAdvogadoRepresentante === 'Defensor Público' && this.arMatricula === '4444444444') {
                this.arNumeroOAB = ''
                this.arNome = 'Adilson Gustavo'
            } else if (this.arAdvogadoRepresentante === 'Defensor Público' && this.arMatricula === '5555555555') {
                this.arNumeroOAB = ''
                this.arNome = 'Rosenclever Lopes'
            } else if (this.arAdvogadoRepresentante === 'Defensor Público' && this.arMatricula === '6666666666') {
                this.arNumeroOAB = ''
                this.arNome = 'Leonardo Feliciano'
            } else {
                this.arNome = ''
            }
        },
        adicionarAdvogado: function(estado, numero) {
            let advogadoRepetido
            this.arAdvogadoDados.forEach(function(dados) {
                if (dados.arEstadoOAB === estado && dados.arNumeroOAB === numero) {
                    advogadoRepetido = 'sim'
                }
            })
            if (advogadoRepetido === 'sim') {
                alert('Este advogado já está adicionado no processo!')
            } else {
                this.arAdvogadoDados.push({
                    'arEstadoOAB': this.arEstadoOAB,
                    'arNumeroOAB': this.arNumeroOAB,
                    'arNome': this.arNome
                })
                this.$eventHub.$emit('enviarAdvogadoDados', this.arAdvogadoDados)
                this.arNumeroOAB = ''
                this.arMatricula = ''
                this.arNome = ''
            }
        },
        excluirAdvogado: function(index) {
            this.$delete(this.arAdvogadoDados, index)
        },
        adicionarDefensor: function(matricula) {
            let defensorRepetido
            this.arDefensorDados.forEach(function(dados) {
                if (dados.arMatricula === matricula) {
                    defensorRepetido = 'sim'
                }
            })
            if (defensorRepetido === 'sim') {
                alert('Este defensor público já está adicionado no processo!')
            } else {
                this.arDefensorDados.push({
                    'arMatricula': this.arMatricula,
                    'arNome': this.arNome
                })
                this.$eventHub.$emit('enviarDefensorDados', this.arDefensorDados)
                this.arNumeroOAB = ''
                this.arMatricula = ''
                this.arNome = ''
            }
        },
        excluirDefensor: function(index) {
            this.$delete(this.arDefensorDados, index)
        }
    }
}
</script>
