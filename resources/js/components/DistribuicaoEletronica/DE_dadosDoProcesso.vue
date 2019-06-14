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
                    <label for="ddp_comarca"><strong>* Comarca</strong>
                        <select class="custom-select" id="ddp_comarca" v-model="showComarca">
                            <option value="">Escolha uma comarca</option>
                            <option value="voltaRedonda">Comarca de Volta Redonda</option>
                        </select>
                    </label>
                </div>
                <br>
                <!--Competência (baseado na comarca)-->
                <div>
                    <label for="ddp_competencia"><strong>* Competência</strong>
                        <!--Escolha uma competencia (comarca não foi escolhida)-->
                        <select class="custom-select" id="ddp_competencia" v-show="showComarca === ''">
                            <option>Escolha uma competência</option>
                        </select>
                        <!--Volta Redonda-->
                        <select class="custom-select" id="ddp_competencia" v-model="showCompetencia" v-show="showComarca === 'voltaRedonda'">
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
                <!--Opção extra para competência Cível, Empresarial, Família, Fazenda Pública e Órfãos e Sucessões-->
                <div v-show="showComarca === 'voltaRedonda' && (showCompetencia === 'civel' || showCompetencia === 'empresarial' || showCompetencia === 'familia' || showCompetencia === 'fazenda' || showCompetencia === 'orfaos')">
                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="opcaoExtra">
                        <label class="custom-control-label" for="opcaoExtra">Autor opta pela realização de audiência de conciliação ou de mediação?</label>
                    </div>
                </div>
                <br>
                <!--Classe (baseado na competência)-->
                <div>
                    <label for="ddp_classe"><strong>* Classe</strong>
                        <!--Escolha uma classe (competência não foi escolhida)-->
                        <select class="custom-select" id="ddp_classe" v-show="showComarca === '' || showCompetencia === ''">
                            <option>Escolha uma classe</option>
                        </select>
                        <!--Acidentes de Trabalho-->
                        <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'acidente' && showComarca === 'voltaRedonda'">
                            <option>Escolha uma classe</option>
                            <option>Ação Civil Coletiva</option>
                            <option>Ação Civil Pública</option>
                            <option>Consignação em Pagamento – CPC</option>
                            <option>Cumprimento de Sentença</option>
                            <option>Embargos à Execução (por Título Judicial, Contra a Fazenda Pública e Carta Precatória)</option>
                            <option>Execução de Título Extrajudicial contra a Fazenda Pública</option>
                            <option>Execução de Título Extrajudicial – CPC</option>
                            <option>Habilitação</option>
                            <option>Mandado de Segurança – CPC</option>
                            <option>Notificação</option>
                            <option>Petição – Cível</option>
                            <option>Procedimento Comum</option>
                        </select>
                        <!--Cível-->
                        <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'civel' && showComarca === 'voltaRedonda'">
                            <option>Escolha uma classe</option>
                            <option>Ação Civil Coletiva</option>
                            <option>Ação Civil Pública</option>
                            <option>Ação Civil Pública- ECA</option>
                            <option>Ação Popular – Lei 4717/65</option>
                            <option>Alvará Judicial – Lei 6858/80</option>
                            <option>Busca e Apreensão em Alienação Fiduciária</option>
                            <option>Consignação em Pagamento – CPC</option>
                            <option>Cumprimento de Sentença</option>
                            <option>Cumprimento Provisório de Decisão</option>
                            <option>Cumprimento Provisório de Sentença</option>
                            <option>Desapropriação</option>
                            <option>Despejo</option>
                            <option>Despejo por Falta de Pagamento</option>
                            <option>Despejo por Falta de Pagamento cumulado com Cobranças</option>
                            <option>Dissolução Parcial de Sociedades</option>
                            <option>Embargos – ECA</option>
                            <option>Embargos à execução (por Título Judicial, Contra a Fazenda Pública e Carta Precatória)</option>
                            <option>Embargos de Terceiro – CPC</option>
                            <option>Execução de Título extrajudicial – CPC</option>
                            <option>Execução de Hipoteca</option>
                            <option>Exibição de Documento ou Coisa</option>
                            <option>Falência de Empresários, Socied. Empresárias, Microempresas e Empresas de Peq. Porte – Requerimento</option>
                            <option>Habeas Data</option>
                            <option>Habilitação</option>
                            <option>Habilitação de Crédito</option>
                            <option>Homologação de Transação Extrajudicial</option>
                            <option>Homologação de Penhor Legal</option>
                            <option>Imissão na Posse</option>
                            <option>Insolvência Requerida pelo Credor</option>
                            <option>Insolvência Requerida pelo Devedor ou pelo Espólio</option>
                            <option>Interdito Proibitório</option>
                            <option>Inventário</option>
                            <option>Liquidação Provisória de Sentença pelo Procedimento Comum</option>
                            <option>Mandado de Segurança – CPC</option>
                            <option>Monitória</option>
                            <option>Notificação</option>
                            <option>Oposição</option>
                            <option>Petição – Cível</option>
                            <option>Procedimento Comum</option>
                            <option>Protesto – CPC</option>
                            <option>Reintegração/Manutenção de Posse</option>
                            <option>Requerimento de Apreensão de Veículo</option>
                            <option>Requerimento de Reintegração de Posse</option>
                            <option>Tutela Antecipada Antecedente</option>
                            <option>Tutela Cautelar Antecedente</option>
                            <option>Usucapião</option>
                        </select>
                        <!--Dívida Ativa Estadual-->
                        <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'dividaEstadual' && showComarca === 'voltaRedonda'">
                            <option>Escolha uma classe</option>
                            <option>Ação Civil Pública</option>
                            <option>Alvará Judicial – Lei 6858/80</option>
                            <option>Busca e Apreensão em Alienação Fiduciária</option>
                            <option>Cautelar Fiscal</option>
                            <option>Consignação em Pagamento – CPC</option>
                            <option>Embargos à Execução Fiscal</option>
                            <option>Embargos de Terceiro – CPC</option>
                            <option>Execução de Título Judicial – CPC</option>
                            <option>Execução Fiscal</option>
                            <option>Habeas Data</option>
                            <option>Homologação do Penhor Legal</option>
                            <option>Imissão na Posse</option>
                            <option>Mandado de Segurança – CPC</option>
                            <option>Mandado de Segurança Coletivo</option>
                            <option>Procedimento Comum</option>
                            <option>Tutela Antecipada Antecedente</option>
                            <option>Tutela Cautelar Antecedente</option>
                        </select>
                        <!--Dívida Ativa Municipal-->
                        <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'dividaMunicipal' && showComarca === 'voltaRedonda'">
                            <option>Escolha uma classe</option>
                            <option>Alvará Judicial – Lei 6858/80</option>
                            <option>Busca e Apreensão em Alienação Fiduciária</option>
                            <option>Consignação em Pagamento – CPC</option>
                            <option>Cumprimento Provisório de Sentença</option>
                            <option>Embargos à Execução Fiscal</option>
                            <option>Embargos de Terceiro – CPC</option>
                            <option>Execução de Título Judicial – CPC</option>
                            <option>Execução Fiscal</option>
                            <option>Homologação do Penhor Legal</option>
                            <option>Imissão Na Posse</option>
                            <option>Mandado de Injunção</option>
                            <option>Mandado de Segurança – CPC</option>
                            <option>Mandado de Segurança Coletivo</option>
                            <option>Petição – Cível</option>
                            <option>Procedimento Comum</option>
                            <option>Tutela Antecipada Antecedente</option>
                            <option>Tutela Cautelar Antecedente</option>
                        </select>
                        <!--Empresarial-->
                        <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'empresarial' && showComarca === 'voltaRedonda'">
                            <option>Escolha uma classe</option>
                            <option>Ação Civil Coletiva</option>
                            <option>Ação Civil Pública</option>
                            <option>Alienação Judicial</option>
                            <option>Busca e Apreensão em alienação Fiduciária</option>
                            <option>Consignação em Pagamento – CPC</option>
                            <option>Cumprimento de Sentença</option>
                            <option>Cumprimento Provisório de Sentença</option>
                            <option>Despejo</option>
                            <option>Despejo por falta de pagamento</option>
                            <option>Despejo por Falta de Pagamento Cumulado Com Cobrança</option>
                            <option>Dissolução Parcial de Sociedade</option>
                            <option>Embargos à execução (por Título Judicial, Contra a Fazenda Pública e Carta Precatória)</option>
                            <option>Embargos de Terceiro – CPC</option>
                            <option>Extinção das Obrigações do Falido</option>
                            <option>Falência de Empresários, Socied. Empresárias, Microempresas e Empresas de Peq. Porte – Requerimento</option>
                            <option>Habilitação</option>
                            <option>Habilitação de Crédito</option>
                            <option>Homologação de Transação Extrajudicial</option>
                            <option>Imissão na Posse</option>
                            <option>Impugnação de Crédito</option>
                            <option>Insolvência Requerida pelo Credor</option>
                            <option>Insolvência Requerida pelo Devedor ou pelo Espólio</option>
                            <option>Interdito Proibitório</option>
                            <option>Liquidação Provisória de Sentença pelo procedimento comum</option>
                            <option>Monitória</option>
                            <option>Petição – Cível</option>
                            <option>Prestação de Contas – Exigidas</option>
                            <option>Procedimento Comum</option>
                            <option>Produção Antecipada de Provas – CPC</option>
                            <option>Protesto – CPC</option>
                            <option>Reintegração/Manutenção de Posse</option>
                            <option>Restituição de Coisa ou Dinheiro na Falência do Devedor Empresário</option>
                            <option>Tutela Antecipada Antecedente</option>
                            <option>Tutela Cautelar Antecedente</option>
                            <option>Usucapião</option>
                        </select>
                        <!--Família-->
                        <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'familia' && showComarca === 'voltaRedonda'">
                            <option>Escolha uma classe</option>
                            <option>Abertura, Registro e Cumprimento de Testamento</option>
                            <option>Adoção – ECA</option>
                            <option>Alimentos – Lei Especial nº 5478/66</option>
                            <option>Alteração do Regime de Bens</option>
                            <option>Alvará Judicial – Lei 6858/80</option>
                            <option>Autorização Judicial – ECA</option>
                            <option>Busca e Apreensão Infracional</option>
                            <option>Cautelar – Regulamentação de Visitas</option>
                            <option>Consignação em Pagamento – CPC</option>
                            <option>Conversão de Separação Judicial em Divórcio</option>
                            <option>Cumprimento de Sentença</option>
                            <option>Cumprimento Provisório de Decisão</option>
                            <option>Cumprimento Provisório de Sentença</option>
                            <option>Divórcio</option>
                            <option>Divórcio Consensual</option>
                            <option>Execução de Alimentos</option>
                            <option>Habilitação</option>
                            <option>Homologação de Transação Judicial</option>
                            <option>Interdição</option>
                            <option>Internação Provisória</option>
                            <option>Inventário</option>
                            <option>Liquidação Provisória de Sentença pelo Procedimento Comum</option>
                            <option>Mandado de Segurança – CPC</option>
                            <option>Outros Procedimentos de Jurisdição Voluntária</option>
                            <option>Remoção e Dispensa/Tutela e Curatela</option>
                            <option>Sobrepartilha</option>
                            <option>Tutela Antecipada Antecedente</option>
                            <option>Tutela Cautelar Antecedente</option>
                            <option>Tutela e Curatela – Nomeação</option>
                        </select>
                        <!--Fazenda Pública-->
                        <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'fazenda' && showComarca === 'voltaRedonda'">
                            <option>Escolha uma classe</option>
                            <option>Ação Civil Coletiva</option>
                            <option>Ação Civil de Improbidade Administrativa</option>
                            <option>Ação Pública</option>
                            <option>Ação Popular Lei 4.717/65</option>
                            <option>Alienação Judicial</option>
                            <option>Alvará Judicial Lei 6.858/80</option>
                            <option>Busca e Apreensão Com Alienação Fidunciária</option>
                            <option>Consignação em Pagamento – CPC</option>
                            <option>Consignatória de Aluguéis</option>
                            <option>Contestação em Foro Diverso</option>
                            <option>Cumprimento de Sentença</option>
                            <option>Cumprimento Provisório de Sentença</option>
                            <option>Cumprimento Provisório de Decisão</option>
                            <option>Demarcação/Divisão</option>
                            <option>Depósito da Lei 8.866/94</option>
                            <option>Desapropriação</option>
                            <option>Despejo</option>
                            <option>Despejo por Falta de Pagamento</option>
                            <option>Despejo por Falta de Pagamento Cumulado com Cobrança</option>
                            <option>Discriminatório</option>
                            <option>Embargos à Execução Fiscal</option>
                            <option>Embargos à Execução Fiscal (com Título Extrajudicial, Contra a Fazenda Pública e Carta Precatória)</option>
                            <option>Embargos à Terceiro – CPC</option>
                            <option>Execução de Título Extrajudicial Contra a Fazenda Pública</option>
                            <option>Execução de Título Extrajudicial – CPC</option>
                            <option>Execução Hipotecária</option>
                            <option>Exibição de Documento ou Coisa</option>
                            <option>Habeas Data</option>
                            <option>Habilitação</option>
                            <option>Homologação de Transação Extrajudicial</option>
                            <option>Homologação de Penhor Legal</option>
                            <option>Imissão na Posse</option>
                            <option>Interdito Proibitório</option>
                            <option>Interpelação</option>
                            <option>Liquidação Provisória de Sentença Pelo Procedimento Comum</option>
                            <option>Mandado de Injunção</option>
                            <option>Mandado de Segurança – CPC</option>
                            <option>Mandado de Segurança Coletivo</option>
                            <option>Monitória</option>
                            <option>Notificação</option>
                            <option>Oposição</option>
                            <option>Outros Procedimentos de Jurisdição Voluntária</option>
                            <option>Pedido de Providência</option>
                            <option>Petição – Cível</option>
                            <option>Prestação de Contas – Exigível</option>
                            <option>Procedimento Comum</option>
                            <option>Processo Administrativo</option>
                            <option>Produção Antecipada de Provas – CPC</option>
                            <option>Protesto – CPC</option>
                            <option>Reintegração e manutenção de Posse</option>
                            <option>Renovatória de Locação</option>
                            <option>Restauração de Autos</option>
                            <option>Revisional de Aluguel</option>
                            <option>Tutela Antecipada Antecedente</option>
                            <option>Tutela Cautelar Antecedente</option>
                            <option>Usucapião</option>
                        </select>
                        <!--Juizado Especial Civil-->
                        <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'juizado' && showComarca === 'voltaRedonda'">
                            <option>Escolha uma classe</option>
                            <option>Alvará Judicial Lei 6.858/80</option>
                            <option>Cumprimento de Sentença</option>
                            <option>Cumprimento Provisório de Sentença</option>
                            <option>Despejo</option>
                            <option>Despejo por Falta de Pagamento</option>
                            <option>Despejo por Falta de Pagamento Cumulado com Cobrança</option>
                            <option>Embargos à Execução Fiscal (com Título Extrajudicial, Contra a Fazenda Pública e Carta Precatória)</option>
                            <option>Embargos de Terceiro – CPC</option>
                            <option>Execução de Título Extrajudicial – CPC</option>
                            <option>Exibição de Documento ou Coisa</option>
                            <option>Homologação de Transação Extrajudicial</option>
                            <option>Monitória</option>
                            <option>Procedimento do Juizado Especial Civil/Fazendário</option>
                            <option>Protesto – CPC</option>
                        </select>
                        <!--Órfãos e Sucessões-->
                        <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'orfaos' && showComarca === 'voltaRedonda'">
                            <option>Escolha uma classe</option>
                            <option>Abertura, Registro e Cumprimento de Testamento</option>
                            <option>Alienação Judicial</option>
                            <option>Alvará Judicial Lei 6.858/80</option>
                            <option>Arrolamento Comum</option>
                            <option>Arrolamento Sumário</option>
                            <option>Cumprimento Provisório de Sentença</option>
                            <option>Declaração de Ausência</option>
                            <option>Embargos à Execução Fiscal (com Título Extrajudicial, Contra a Fazenda Pública e Carta Precatória)</option>
                            <option>Embargos de Terceiro – CPC</option>
                            <option>Habilitação</option>
                            <option>Herança Jacente</option>
                            <option>Homologação de Transação Extrajudicial</option>
                            <option>Interdição</option>
                            <option>Interdito Probatório</option>
                            <option>Interpelação</option>
                            <option>Inventário</option>
                            <option>Notificação</option>
                            <option>Oposição</option>
                            <option>Outros Procedimentos de Jurisdição Voluntária</option>
                            <option>Pedidos de Providências</option>
                            <option>Petição – Cível</option>
                            <option>Prestação de Contas – ECA</option>
                            <option>Prestação de Contas – Exigidas</option>
                            <option>Procedimento Comum</option>
                            <option>Remoção e Dispensa/Tutela e Curatela</option>
                            <option>Sobrepartilha</option>
                            <option>Tutela Antecipada Antecedente</option>
                            <option>Tutela e Curatela – Nomeação</option>
                        </select>
                        <!--Registro Civil de Pessoas Naturais-->
                        <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'registroCivil' && showComarca === 'voltaRedonda'">
                            <option>Escolha uma classe</option>
                            <option>Alteração de Regime de Bens</option>
                            <option>Averiguação Oficiosa de Paternidade</option>
                            <option>Habilitação para Casamento – RCPN</option>
                            <option>Homologação e Transação Extrajudicial</option>
                            <option>Mandado de Segurança – CPC</option>
                            <option>Outros Procedimentos de Jurisdição Voluntária</option>
                            <option>Petição – Cível</option>
                            <option>Procedimento Comum</option>
                            <option>Registro de Casamento Nuncupativo</option>
                            <option>Sindicância</option>
                            <option>Retificação ou Suprimento ou Restauração do Registo Cível</option>
                        </select>
                        <!--Registro Público-->
                        <select class="custom-select" id="ddp_classe" v-show="showCompetencia === 'registroPublico' && showComarca === 'voltaRedonda'">
                            <option>Escolha uma classe</option>
                            <option>Cumprimento Provisório de Sentença</option>
                            <option>Cumprimento Provisório de Decisão</option>
                            <option>Demarcação/Divisão</option>
                            <option>Declaração de Ausência</option>
                            <option>Dúvida</option>
                            <option>Embargos à Execução Fiscal (com Título Extrajudicial, Contra a Fazenda Pública e Carta Precatória)</option>
                            <option>Embargos de Terceiro – CPC</option>
                            <option>Habilitação</option>
                            <option>Homologação e Transação Extrajudicial</option>
                            <option>Mandado de Segurança – CPC</option>
                            <option>Notificação</option>
                            <option>Oposição</option>
                            <option>Outros Procedimentos de Jurisdição Voluntária</option>
                            <option>Pedidos de Providências</option>
                            <option>Petição – Cível</option>
                            <option>Procedimento Comum</option>
                            <option>Processo Administrativo</option>
                            <option>Protesto – CPC</option>
                            <option>Registro Torrens</option>
                            <option>Retificação de Registro de Imóveis</option>
                        </select>
                    </label>
                </div>
                <br>
                <!--Distribuição-->
                <div>
                    <label for="ddp_distribuicao"><strong>* Distribuição</strong>
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
                            <span><strong>* Valor da Causa:</strong> </span>
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
            showCompetencia: "",
            showComarca: ""
        }
    },
}

</script>