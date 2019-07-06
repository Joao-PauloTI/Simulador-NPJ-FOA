<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Dados do Processo</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <div>
                    <!--Opções de marcar-->
                    <form action="">
                        <div class="custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="DE_dDP1" id="DE_dDP1">
                            <label class="custom-control-label" for="DE_dDP1"> Prioridade p/ deficiente físico ou mental
                            </label>
                        </div>
                        <div class="custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="DE_dDP2" id="DE_dDP2">
                            <label class="custom-control-label" for="DE_dDP2"> Tutela de Urgência </label>
                        </div>
                        <div class="custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="DE_dDP3" id="DE_dDP3">
                            <label class="custom-control-label" for="DE_dDP3"> Prioridade p/ portador de doença grave
                            </label>
                        </div>
                        <div class="custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="DE_dDP4" id="DE_dDP4">
                            <label class="custom-control-label" for="DE_dDP4"> Gratuidade de Justiça </label>
                        </div>
                        <div class="custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="DE_dDP5" id="DE_dDP5">
                            <label class="custom-control-label" for="DE_dDP5"> Exame Técnico </label>
                        </div>
                    </form>
                </div>
                <br>
                <!--Comarca-->
                <div>
                    <label for="DE_dDP_comarca"><strong>* Comarca</strong>
                        <select class="custom-select" id="DE_dDP_comarca" v-model="showComarca">
                            <option value="">Escolha uma comarca</option>
                            <option value="voltaRedonda">Comarca de Volta Redonda</option>
                        </select>
                    </label>
                </div>
                <br>
                <!--Competência (baseado na comarca)-->
                <div>
                    <label for="DE_dDP_competencia"><strong>* Competência</strong>
                        <!--Escolha uma competencia (comarca não foi escolhida)-->
                        <select class="custom-select" id="DE_dDP_competencia" v-show="showComarca === ''">
                            <option>Escolha uma competência</option>
                        </select>
                        <!--Volta Redonda-->
                        <select class="custom-select" id="DE_dDP_competencia" v-model="showCompetencia" v-show="showComarca === 'voltaRedonda'">
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
                        <label class="custom-control-label" for="opcaoExtra">Autor opta pela realização de audiência de
                            conciliação ou de mediação?</label>
                    </div>
                </div>
                <br>
                <!--Classe (baseado na competência)-->
                <div>
                    <label for="DE_dDP_classe"><strong>* Classe</strong>
                        <!--Escolha uma classe (competência não foi escolhida)-->
                        <select class="custom-select" id="DE_dDP_classe" v-show="showComarca === '' || showCompetencia === ''">
                            <option>Escolha uma classe</option>
                        </select>
                        <!--Acidentes de Trabalho-->
                        <select class="custom-select" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'acidente' && showComarca === 'voltaRedonda'">
                            <option value="">Escolha uma classe</option>
                            <option value="acidente1">Ação Civil Coletiva</option>
                            <option value="acidente2">Ação Civil Pública</option>
                            <option value="acidente3">Consignação em Pagamento – CPC</option>
                            <option value="acidente4">Cumprimento de Sentença</option>
                            <option value="acidente5">Embargos à Execução (por Título Judicial, Contra a Fazenda Pública
                                e Carta Precatória)</option>
                            <option value="acidente6">Execução de Título Extrajudicial contra a Fazenda Pública</option>
                            <option value="acidente7">Execução de Título Extrajudicial – CPC</option>
                            <option value="acidente8">Habilitação</option>
                            <option value="acidente9">Mandado de Segurança – CPC</option>
                            <option value="acidente10">Notificação</option>
                            <option value="acidente11">Petição – Cível</option>
                            <option value="acidente12">Procedimento Comum</option>
                        </select>
                        <!--Cível-->
                        <select class="custom-select" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'civel' && showComarca === 'voltaRedonda'">
                            <option value="">Escolha uma classe</option>
                            <option value="civel">Ação Civil Coletiva</option>
                            <option value="civel">Ação Civil Pública</option>
                            <option value="civel">Ação Civil Pública- ECA</option>
                            <option value="civel">Ação Popular – Lei 4717/65</option>
                            <option value="civel">Alvará Judicial – Lei 6858/80</option>
                            <option value="civel">Busca e Apreensão em Alienação Fiduciária</option>
                            <option value="civel">Consignação em Pagamento – CPC</option>
                            <option value="civel">Cumprimento de Sentença</option>
                            <option value="civel">Cumprimento Provisório de Decisão</option>
                            <option value="civel">Cumprimento Provisório de Sentença</option>
                            <option value="civel">Desapropriação</option>
                            <option value="civel">Despejo</option>
                            <option value="civel">Despejo por Falta de Pagamento</option>
                            <option value="civel">Despejo por Falta de Pagamento cumulado com Cobranças</option>
                            <option value="civel">Dissolução Parcial de Sociedades</option>
                            <option value="civel">Embargos – ECA</option>
                            <option value="civel">Embargos à execução (por Título Judicial, Contra a Fazenda Pública e
                                Carta Precatória)</option>
                            <option value="civel">Embargos de Terceiro – CPC</option>
                            <option value="civel">Execução de Título extrajudicial – CPC</option>
                            <option value="civel">Execução de Hipoteca</option>
                            <option value="civel">Exibição de Documento ou Coisa</option>
                            <option value="civel">Falência de Empresários, Socied. Empresárias, Microempresas e Empresas
                                de Peq. Porte – Requerimento</option>
                            <option value="civel">Habeas Data</option>
                            <option value="civel">Habilitação</option>
                            <option value="civel">Habilitação de Crédito</option>
                            <option value="civel">Homologação de Transação Extrajudicial</option>
                            <option value="civel">Homologação de Penhor Legal</option>
                            <option value="civel">Imissão na Posse</option>
                            <option value="civel">Insolvência Requerida pelo Credor</option>
                            <option value="civel">Insolvência Requerida pelo Devedor ou pelo Espólio</option>
                            <option value="civel">Interdito Proibitório</option>
                            <option value="civel">Inventário</option>
                            <option value="civel">Liquidação Provisória de Sentença pelo Procedimento Comum</option>
                            <option value="civel">Mandado de Segurança – CPC</option>
                            <option value="civel">Monitória</option>
                            <option value="civel">Notificação</option>
                            <option value="civel">Oposição</option>
                            <option value="civel">Petição – Cível</option>
                            <option value="civel">Procedimento Comum</option>
                            <option value="civel">Protesto – CPC</option>
                            <option value="civel">Reintegração/Manutenção de Posse</option>
                            <option value="civel">Requerimento de Apreensão de Veículo</option>
                            <option value="civel">Requerimento de Reintegração de Posse</option>
                            <option value="civel">Tutela Antecipada Antecedente</option>
                            <option value="civel">Tutela Cautelar Antecedente</option>
                            <option value="civel">Usucapião</option>
                        </select>
                        <!--Dívida Ativa Estadual-->
                        <select class="custom-select" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'dividaEstadual' && showComarca === 'voltaRedonda'">
                            <option value="">Escolha uma classe</option>
                            <option value="dividaEstadual">Ação Civil Pública</option>
                            <option value="dividaEstadual">Alvará Judicial – Lei 6858/80</option>
                            <option value="dividaEstadual">Busca e Apreensão em Alienação Fiduciária</option>
                            <option value="dividaEstadual">Cautelar Fiscal</option>
                            <option value="dividaEstadual">Consignação em Pagamento – CPC</option>
                            <option value="dividaEstadual">Embargos à Execução Fiscal</option>
                            <option value="dividaEstadual">Embargos de Terceiro – CPC</option>
                            <option value="dividaEstadual">Execução de Título Judicial – CPC</option>
                            <option value="dividaEstadual">Execução Fiscal</option>
                            <option value="dividaEstadual">Habeas Data</option>
                            <option value="dividaEstadual">Homologação do Penhor Legal</option>
                            <option value="dividaEstadual">Imissão na Posse</option>
                            <option value="dividaEstadual">Mandado de Segurança – CPC</option>
                            <option value="dividaEstadual">Mandado de Segurança Coletivo</option>
                            <option value="dividaEstadual">Procedimento Comum</option>
                            <option value="dividaEstadual">Tutela Antecipada Antecedente</option>
                            <option value="dividaEstadual">Tutela Cautelar Antecedente</option>
                        </select>
                        <!--Dívida Ativa Municipal-->
                        <select class="custom-select" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'dividaMunicipal' && showComarca === 'voltaRedonda'">
                            <option value="">Escolha uma classe</option>
                            <option value="dividaMunicipal">Alvará Judicial – Lei 6858/80</option>
                            <option value="dividaMunicipal">Busca e Apreensão em Alienação Fiduciária</option>
                            <option value="dividaMunicipal">Consignação em Pagamento – CPC</option>
                            <option value="dividaMunicipal">Cumprimento Provisório de Sentença</option>
                            <option value="dividaMunicipal">Embargos à Execução Fiscal</option>
                            <option value="dividaMunicipal">Embargos de Terceiro – CPC</option>
                            <option value="dividaMunicipal">Execução de Título Judicial – CPC</option>
                            <option value="dividaMunicipal">Execução Fiscal</option>
                            <option value="dividaMunicipal">Homologação do Penhor Legal</option>
                            <option value="dividaMunicipal">Imissão Na Posse</option>
                            <option value="dividaMunicipal">Mandado de Injunção</option>
                            <option value="dividaMunicipal">Mandado de Segurança – CPC</option>
                            <option value="dividaMunicipal">Mandado de Segurança Coletivo</option>
                            <option value="dividaMunicipal">Petição – Cível</option>
                            <option value="dividaMunicipal">Procedimento Comum</option>
                            <option value="dividaMunicipal">Tutela Antecipada Antecedente</option>
                            <option value="dividaMunicipal">Tutela Cautelar Antecedente</option>
                        </select>
                        <!--Empresarial-->
                        <select class="custom-select" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'empresarial' && showComarca === 'voltaRedonda'">
                            <option value="">Escolha uma classe</option>
                            <option value="empresarial">Ação Civil Coletiva</option>
                            <option value="empresarial">Ação Civil Pública</option>
                            <option value="empresarial">Alienação Judicial</option>
                            <option value="empresarial">Busca e Apreensão em alienação Fiduciária</option>
                            <option value="empresarial">Consignação em Pagamento – CPC</option>
                            <option value="empresarial">Cumprimento de Sentença</option>
                            <option value="empresarial">Cumprimento Provisório de Sentença</option>
                            <option value="empresarial">Despejo</option>
                            <option value="empresarial">Despejo por falta de pagamento</option>
                            <option value="empresarial">Despejo por Falta de Pagamento Cumulado Com Cobrança</option>
                            <option value="empresarial">Dissolução Parcial de Sociedade</option>
                            <option value="empresarial">Embargos à execução (por Título Judicial, Contra a Fazenda
                                Pública e Carta Precatória)</option>
                            <option value="empresarial">Embargos de Terceiro – CPC</option>
                            <option value="empresarial">Extinção das Obrigações do Falido</option>
                            <option value="empresarial">Falência de Empresários, Socied. Empresárias, Microempresas e
                                Empresas de Peq. Porte – Requerimento</option>
                            <option value="empresarial">Habilitação</option>
                            <option value="empresarial">Habilitação de Crédito</option>
                            <option value="empresarial">Homologação de Transação Extrajudicial</option>
                            <option value="empresarial">Imissão na Posse</option>
                            <option value="empresarial">Impugnação de Crédito</option>
                            <option value="empresarial">Insolvência Requerida pelo Credor</option>
                            <option value="empresarial">Insolvência Requerida pelo Devedor ou pelo Espólio</option>
                            <option value="empresarial">Interdito Proibitório</option>
                            <option value="empresarial">Liquidação Provisória de Sentença pelo procedimento comum
                            </option>
                            <option value="empresarial">Monitória</option>
                            <option value="empresarial">Petição – Cível</option>
                            <option value="empresarial">Prestação de Contas – Exigidas</option>
                            <option value="empresarial">Procedimento Comum</option>
                            <option value="empresarial">Produção Antecipada de Provas – CPC</option>
                            <option value="empresarial">Protesto – CPC</option>
                            <option value="empresarial">Reintegração/Manutenção de Posse</option>
                            <option value="empresarial">Restituição de Coisa ou Dinheiro na Falência do Devedor
                                Empresário</option>
                            <option value="empresarial">Tutela Antecipada Antecedente</option>
                            <option value="empresarial">Tutela Cautelar Antecedente</option>
                            <option value="empresarial">Usucapião</option>
                        </select>
                        <!--Família-->
                        <select class="custom-select" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'familia' && showComarca === 'voltaRedonda'">
                            <option value="">Escolha uma classe</option>
                            <option value="familia">Abertura, Registro e Cumprimento de Testamento</option>
                            <option value="familia">Adoção – ECA</option>
                            <option value="familia">Alimentos – Lei Especial nº 5478/66</option>
                            <option value="familia">Alteração do Regime de Bens</option>
                            <option value="familia">Alvará Judicial – Lei 6858/80</option>
                            <option value="familia">Autorização Judicial – ECA</option>
                            <option value="familia">Busca e Apreensão Infracional</option>
                            <option value="familia">Cautelar – Regulamentação de Visitas</option>
                            <option value="familia">Consignação em Pagamento – CPC</option>
                            <option value="familia">Conversão de Separação Judicial em Divórcio</option>
                            <option value="familia">Cumprimento de Sentença</option>
                            <option value="familia">Cumprimento Provisório de Decisão</option>
                            <option value="familia">Cumprimento Provisório de Sentença</option>
                            <option value="familia">Divórcio</option>
                            <option value="familia">Divórcio Consensual</option>
                            <option value="familia">Execução de Alimentos</option>
                            <option value="familia">Habilitação</option>
                            <option value="familia">Homologação de Transação Judicial</option>
                            <option value="familia">Interdição</option>
                            <option value="familia">Internação Provisória</option>
                            <option value="familia">Inventário</option>
                            <option value="familia">Liquidação Provisória de Sentença pelo Procedimento Comum</option>
                            <option value="familia">Mandado de Segurança – CPC</option>
                            <option value="familia">Outros Procedimentos de Jurisdição Voluntária</option>
                            <option value="familia">Remoção e Dispensa/Tutela e Curatela</option>
                            <option value="familia">Sobrepartilha</option>
                            <option value="familia">Tutela Antecipada Antecedente</option>
                            <option value="familia">Tutela Cautelar Antecedente</option>
                            <option value="familia">Tutela e Curatela – Nomeação</option>
                        </select>
                        <!--Fazenda Pública-->
                        <select class="custom-select" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'fazenda' && showComarca === 'voltaRedonda'">
                            <option value="">Escolha uma classe</option>
                            <option value="fazenda">Ação Civil Coletiva</option>
                            <option value="fazenda">Ação Civil de Improbidade Administrativa</option>
                            <option value="fazenda">Ação Pública</option>
                            <option value="fazenda">Ação Popular Lei 4.717/65</option>
                            <option value="fazenda">Alienação Judicial</option>
                            <option value="fazenda">Alvará Judicial Lei 6.858/80</option>
                            <option value="fazenda">Busca e Apreensão Com Alienação Fidunciária</option>
                            <option value="fazenda">Consignação em Pagamento – CPC</option>
                            <option value="fazenda">Consignatória de Aluguéis</option>
                            <option value="fazenda">Contestação em Foro Diverso</option>
                            <option value="fazenda">Cumprimento de Sentença</option>
                            <option value="fazenda">Cumprimento Provisório de Sentença</option>
                            <option value="fazenda">Cumprimento Provisório de Decisão</option>
                            <option value="fazenda">Demarcação/Divisão</option>
                            <option value="fazenda">Depósito da Lei 8.866/94</option>
                            <option value="fazenda">Desapropriação</option>
                            <option value="fazenda">Despejo</option>
                            <option value="fazenda">Despejo por Falta de Pagamento</option>
                            <option value="fazenda">Despejo por Falta de Pagamento Cumulado com Cobrança</option>
                            <option value="fazenda">Discriminatório</option>
                            <option value="fazenda">Embargos à Execução Fiscal</option>
                            <option value="fazenda">Embargos à Execução Fiscal (com Título Extrajudicial, Contra a
                                Fazenda Pública e Carta Precatória)</option>
                            <option value="fazenda">Embargos à Terceiro – CPC</option>
                            <option value="fazenda">Execução de Título Extrajudicial Contra a Fazenda Pública</option>
                            <option value="fazenda">Execução de Título Extrajudicial – CPC</option>
                            <option value="fazenda">Execução Hipotecária</option>
                            <option value="fazenda">Exibição de Documento ou Coisa</option>
                            <option value="fazenda">Habeas Data</option>
                            <option value="fazenda">Habilitação</option>
                            <option value="fazenda">Homologação de Transação Extrajudicial</option>
                            <option value="fazenda">Homologação de Penhor Legal</option>
                            <option value="fazenda">Imissão na Posse</option>
                            <option value="fazenda">Interdito Proibitório</option>
                            <option value="fazenda">Interpelação</option>
                            <option value="fazenda">Liquidação Provisória de Sentença Pelo Procedimento Comum</option>
                            <option value="fazenda">Mandado de Injunção</option>
                            <option value="fazenda">Mandado de Segurança – CPC</option>
                            <option value="fazenda">Mandado de Segurança Coletivo</option>
                            <option value="fazenda">Monitória</option>
                            <option value="fazenda">Notificação</option>
                            <option value="fazenda">Oposição</option>
                            <option value="fazenda">Outros Procedimentos de Jurisdição Voluntária</option>
                            <option value="fazenda">Pedido de Providência</option>
                            <option value="fazenda">Petição – Cível</option>
                            <option value="fazenda">Prestação de Contas – Exigível</option>
                            <option value="fazenda">Procedimento Comum</option>
                            <option value="fazenda">Processo Administrativo</option>
                            <option value="fazenda">Produção Antecipada de Provas – CPC</option>
                            <option value="fazenda">Protesto – CPC</option>
                            <option value="fazenda">Reintegração e manutenção de Posse</option>
                            <option value="fazenda">Renovatória de Locação</option>
                            <option value="fazenda">Restauração de Autos</option>
                            <option value="fazenda">Revisional de Aluguel</option>
                            <option value="fazenda">Tutela Antecipada Antecedente</option>
                            <option value="fazenda">Tutela Cautelar Antecedente</option>
                            <option value="fazenda">Usucapião</option>
                        </select>
                        <!--Juizado Especial Civil-->
                        <select class="custom-select" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'juizado' && showComarca === 'voltaRedonda'">
                            <option value="">Escolha uma classe</option>
                            <option value="juizado">Alvará Judicial Lei 6.858/80</option>
                            <option value="juizado">Cumprimento de Sentença</option>
                            <option value="juizado">Cumprimento Provisório de Sentença</option>
                            <option value="juizado">Despejo</option>
                            <option value="juizado">Despejo por Falta de Pagamento</option>
                            <option value="juizado">Despejo por Falta de Pagamento Cumulado com Cobrança</option>
                            <option value="juizado">Embargos à Execução Fiscal (com Título Extrajudicial, Contra a
                                Fazenda Pública e Carta Precatória)</option>
                            <option value="juizado">Embargos de Terceiro – CPC</option>
                            <option value="juizado">Execução de Título Extrajudicial – CPC</option>
                            <option value="juizado">Exibição de Documento ou Coisa</option>
                            <option value="juizado">Homologação de Transação Extrajudicial</option>
                            <option value="juizado">Monitória</option>
                            <option value="juizado">Procedimento do Juizado Especial Civil/Fazendário</option>
                            <option value="juizado">Protesto – CPC</option>
                        </select>
                        <!--Órfãos e Sucessões-->
                        <select class="custom-select" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'orfaos' && showComarca === 'voltaRedonda'">
                            <option value="">Escolha uma classe</option>
                            <option value="orfaos">Abertura, Registro e Cumprimento de Testamento</option>
                            <option value="orfaos">Alienação Judicial</option>
                            <option value="orfaos">Alvará Judicial Lei 6.858/80</option>
                            <option value="orfaos">Arrolamento Comum</option>
                            <option value="orfaos">Arrolamento Sumário</option>
                            <option value="orfaos">Cumprimento Provisório de Sentença</option>
                            <option value="orfaos">Declaração de Ausência</option>
                            <option value="orfaos">Embargos à Execução Fiscal (com Título Extrajudicial, Contra a
                                Fazenda Pública e Carta Precatória)</option>
                            <option value="orfaos">Embargos de Terceiro – CPC</option>
                            <option value="orfaos">Habilitação</option>
                            <option value="orfaos">Herança Jacente</option>
                            <option value="orfaos">Homologação de Transação Extrajudicial</option>
                            <option value="orfaos">Interdição</option>
                            <option value="orfaos">Interdito Probatório</option>
                            <option value="orfaos">Interpelação</option>
                            <option value="orfaos">Inventário</option>
                            <option value="orfaos">Notificação</option>
                            <option value="orfaos">Oposição</option>
                            <option value="orfaos">Outros Procedimentos de Jurisdição Voluntária</option>
                            <option value="orfaos">Pedidos de Providências</option>
                            <option value="orfaos">Petição – Cível</option>
                            <option value="orfaos">Prestação de Contas – ECA</option>
                            <option value="orfaos">Prestação de Contas – Exigidas</option>
                            <option value="orfaos">Procedimento Comum</option>
                            <option value="orfaos">Remoção e Dispensa/Tutela e Curatela</option>
                            <option value="orfaos">Sobrepartilha</option>
                            <option value="orfaos">Tutela Antecipada Antecedente</option>
                            <option value="orfaos">Tutela e Curatela – Nomeação</option>
                        </select>
                        <!--Registro Civil de Pessoas Naturais-->
                        <select class="custom-select" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'registroCivil' && showComarca === 'voltaRedonda'">
                            <option value="">Escolha uma classe</option>
                            <option value="registroCivel">Alteração de Regime de Bens</option>
                            <option value="registroCivel">Averiguação Oficiosa de Paternidade</option>
                            <option value="registroCivel">Habilitação para Casamento – RCPN</option>
                            <option value="registroCivel">Homologação e Transação Extrajudicial</option>
                            <option value="registroCivel">Mandado de Segurança – CPC</option>
                            <option value="registroCivel">Outros Procedimentos de Jurisdição Voluntária</option>
                            <option value="registroCivel">Petição – Cível</option>
                            <option value="registroCivel">Procedimento Comum</option>
                            <option value="registroCivel">Registro de Casamento Nuncupativo</option>
                            <option value="registroCivel">Sindicância</option>
                            <option value="registroCivel">Retificação ou Suprimento ou Restauração do Registo Cível
                            </option>
                        </select>
                        <!--Registro Público-->
                        <select class="custom-select" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'registroPublico' && showComarca === 'voltaRedonda'">
                            <option value="">Escolha uma classe</option>
                            <option value="registroPublico">Cumprimento Provisório de Sentença</option>
                            <option value="registroPublico">Cumprimento Provisório de Decisão</option>
                            <option value="registroPublico">Demarcação/Divisão</option>
                            <option value="registroPublico">Declaração de Ausência</option>
                            <option value="registroPublico">Dúvida</option>
                            <option value="registroPublico">Embargos à Execução Fiscal (com Título Extrajudicial, Contra
                                a Fazenda Pública e Carta Precatória)</option>
                            <option value="registroPublico">Embargos de Terceiro – CPC</option>
                            <option value="registroPublico">Habilitação</option>
                            <option value="registroPublico">Homologação e Transação Extrajudicial</option>
                            <option value="registroPublico">Mandado de Segurança – CPC</option>
                            <option value="registroPublico">Notificação</option>
                            <option value="registroPublico">Oposição</option>
                            <option value="registroPublico">Outros Procedimentos de Jurisdição Voluntária</option>
                            <option value="registroPublico">Pedidos de Providências</option>
                            <option value="registroPublico">Petição – Cível</option>
                            <option value="registroPublico">Procedimento Comum</option>
                            <option value="registroPublico">Processo Administrativo</option>
                            <option value="registroPublico">Protesto – CPC</option>
                            <option value="registroPublico">Registro Torrens</option>
                            <option value="registroPublico">Retificação de Registro de Imóveis</option>
                        </select>
                    </label>
                </div>
                <br>
                <!--Distribuição-->
                <div>
                    <label for="DE_dDP_distribuicao"><strong>* Distribuição</strong>
                        <select class="custom-select" id="DE_dDP_distribuicao" v-show="showComarca === '' || showCompetencia === '' || showClasse === ''">
                            <option>Escolha uma distribuição</option>
                        </select>
                        <select class="custom-select" id="DE_dDP_distribuicao" v-show="showComarca === 'voltaRedonda' && showCompetencia === 'acidente' && showClasse === 'acidente1'">
                            <option>Escolha uma distribuição</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </label>
                </div>
                <br>
                <!--Valor da Causa-->
                <div>
                    <form class="form-inline">
                        <div class="col-xs-2">
                            <span><strong>* Valor da Causa:</strong> </span>
                            <input type="text" class="form-control" id="DE_dDP_valorCausa" placeholder="ex.: 1.000,00" required>
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
    name: 'dedadosdoprocesso',
    data: function() {
        return {
            showCompetencia: "",
            showComarca: "",
            showClasse: "",
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
