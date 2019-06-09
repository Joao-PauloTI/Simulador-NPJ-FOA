<template>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5><strong>Dados do Processo</strong></h5>
        </div>

        <div class="card-body">
            <div>
                <!--Opções de marcar-->
                <form action="">
                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="ddp1" id="ddp1">
                        <label class="custom-control-label" for="ddp1"> Prioridade p/ deficiente físico ou mental </label>
                    </div>

                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="ddp2" id="ddp2">
                        <label class="custom-control-label" for="ddp2"> Tutela de Urgência </label>
                    </div>

                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="ddp3" id="ddp3">
                        <label class="custom-control-label" for="ddp3"> Prioridade p/ portador de doença grave </label>
                    </div>

                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="ddp4" id="ddp4">
                        <label class="custom-control-label" for="ddp4"> Gratuidade de Justiça </label>
                    </div>

                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="ddp5" id="ddp5">
                        <label class="custom-control-label" for="ddp5"> Exame Técnico </label>
                    </div>
                </form>
            </div>
            <br>
            <!--Comarca-->
            <div>
                <label for="ddp_comarca"><strong>*</strong> Comarca
                    <select class="custom-select" id="ddp_comarca">
                        <option>Escolha uma comarca</option>
                        <option>Comarca de Volta Redonda</option>
                    </select>
                </label>
            </div>
            <br>
            <!--Competência-->
            <div>
                <label for="ddp_competencia"><strong>*</strong> Competência
                    <select class="custom-select" id="ddp_competencia" v-model="showCompetencia">
                        <option value="">Escolha uma competência</option>
                        <option value="acidente">Acidentes de Trabalho</option>
                        <option value="civel">Cível</option>
                        <option value="dividaEstadual">Dívida Ativa Estadual</option>
                        <option value="dividaMunicipal">Dívida Ativa Municipal</option>
                        <option value="empresarial">Empresarial</option>
                        <option value="familia">Família</option>
                        <option value="fazenda">Fazenda Pública</option>
                        <option value="juizado">Juizado Especial Civil</option>
                        <option value="orfaos">Órfãos e Sucessões</option>
                        <option value="registroCivil">Registro Civil de Pessoas Naturais</option>
                        <option value="registroPublico">Registro Público</option>
                    </select>
                </label>
            </div>
            <br>
            <!--Classe (baseado na competência)-->
            <div>
                <label for="ddp_classe"><strong>*</strong> Classe
                    <!--Escolha uma classe (competência não foi escolhida)-->
                    <select class="custom-select" id="ddp_classe" v-show="showCompetencia === ''">
                        <option>Escolha uma classe</option>
                    </select>
                    <!--Acidentes de Trabalho-->
                    <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'acidente'">
                        <option>Ação Civil Coletiva</option>
                        <option>Ação Civil Pública</option>
                        <option>Consignação em Pagamento – CPC</option>
                        <option>Consignatória de Aluguéis</option>
                    </select>
                    <!--Cível-->
                    <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'civel'">
                        <option>Alienação Judicial</option>
                        <option>Alvará Judicial – Lei 6858/80</option>
                        <option>Compromisso Arbitral</option>
                        <option>Consignação em Pagamento – CPC</option>
                    </select>
                    <!--Dívida Ativa Estadual-->
                    <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'dividaEstadual'">
                        <option>Interpelação</option>
                        <option>Homologação do Penhor Legal</option>
                        <option>Exibição de Documento ou Coisa</option>
                        <option>Oposição</option>
                    </select>
                    <!--Dívida Ativa Municipal-->
                    <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'dividaMunicipal'">
                        <option>Execução de Título Judicial – CPC</option>
                        <option>Cumprimento Provisório de Sentença</option>
                        <option>Busca e Apreensão em Alienação Fiduciária</option>
                        <option>Mandado de Segurança Coletivo</option>
                    </select>
                    <!--Empresarial-->
                    <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'empresarial'">
                        <option>Embargos à Execução (por Título Extrajudicial), (Contra a Fazenda Pública) e (Carta Precatória)</option>
                        <option>Despejo por Falta de Pagamento Cumulado Com Cobrança</option>
                        <option>Extinção das Obrigações do Falido</option>
                        <option>Inquérito Extrajudicial – Lei 6024/74</option>
                    </select>
                    <!--Família-->
                    <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'familia'">
                        <option>Adoção – ECA</option>
                        <option>Alteração do Regime de Bens</option>
                        <option>Cumprimento Provisório de Sentença</option>
                        <option>Imissão na Posse</option>
                    </select>
                    <!--Fazenda Pública-->
                    <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'fazenda'">
                        <option>Embargos à execução fiscal</option>
                        <option>Habeas Data</option>
                        <option>Habilitação</option>
                        <option>Petição - Cível</option>
                    </select>
                    <!--Juizado Especial Civil-->
                    <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'juizado'">
                        <option>Despejo</option>
                        <option>Restauração de Autos</option>
                        <option>Monitória</option>
                        <option>Interdito Probitório</option>
                    </select>
                    <!--Órfãos e Sucessões-->
                    <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'orfaos'">
                        <option>Abertura, Registro e Cumprimento de Testamento</option>
                        <option>Herança Jacente</option>
                        <option>Inventário</option>
                        <option>Notificação</option>
                    </select>
                    <!--Registro Civil de Pessoas Naturais-->
                    <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'registroCivil'">
                        <option>Alteração de Regime de Bens</option>
                        <option>Pedido de Providências</option>
                        <option>Sindicância</option>
                        <option>Processo Administrativo</option>
                    </select>
                    <!--Registro Público-->
                    <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'registroPublico'">
                        <option>Dúvida</option>
                        <option>Embargos de Terceiros</option>
                        <option>Registro Torrens</option>
                        <option>Retificação de Registro de Imóveis</option>
                    </select>
                </label>
            </div>
            <br>
            <!--Distribuição-->
            <div>
                <label for="ddp_distribuicao"><strong>*</strong> Distribuição
                    <select class="custom-select" id="ddp_distribuicao">
                        <option>Escolha uma distribuição</option>
                        <option>...</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </label>
            </div>
            <br>
            <!--Valor da Causa-->
            <div>
                <form class="form-inline">
                    <div class="col-xs-2">
                        <span><strong>*</strong> Valor da Causa: </span>
                        <input type="text" class="form-control" id="valorCausa" placeholder="ex.: 1.000,00" required>
                    </div>
                </form>
            </div>
            <br>
        </div>
    </div>
    <br>
</div>
</template>

<script>
export default {
    name: 'de-dadosdoprocesso',
    data: function() {
        return {
            showCompetencia: ""
        }
    }
}
</script>
