<template>
    <div class="container">
        <h1>Cadastro de Documentos</h1>
        <hr>
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Enviar Procuração</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <div>
                        <label for="escolherProcuracaoId" class="btn btn-primary">Procurar</label>
                        <input type="file" name="dpr_arquivo" id="escolherProcuracaoId" v-on:change="receberNomeDocumento" style="display: none">
                        <span style="margin-left: 10px">{{nomeProcuracao}}</span>
                    </div>
                    <br>
                    <div>
                        <span><strong>* Descrição </strong> </span>
                        <input type="text" name="dpr_descricao" class="form-control" required>
                        <p style="color: red">Para adicionar o arquivo, basta escolhe-lo e clicar no botão "Enviar".</p>
                    </div>
                    <br>
                    <div align="center">
                        <button type="button" @click="enviarNomeDocumento" data-dismiss="modal" class="btn btn-primary">ENVIAR</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">FECHAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'denviarprocuracao',
    data: function() {
        return {
            nomeProcuracao: ''
        }
    },
    methods: {
        ajuda: function() {
            alert(
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")
        },
        receberNomeDocumento: function() {
            this.nomeProcuracao = document.getElementById('escolherProcuracaoId').value
            this.nomeProcuracao = this.nomeProcuracao.split("\\").pop()
        },
        enviarNomeDocumento: function() {
            this.$emit('nomeProcuracao', this.nomeProcuracao)
        }
    }
}

</script>
