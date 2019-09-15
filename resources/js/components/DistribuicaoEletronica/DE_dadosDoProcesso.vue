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
                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="p_prioridadeDeficiente" value="Prioridade p/ deficiente físico ou mental" id="DE_dDP1">
                        <label class="custom-control-label" for="DE_dDP1"> Prioridade p/ deficiente físico ou mental
                        </label>
                    </div>
                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="p_tutela" value="Tutela de Urgência" id="DE_dDP2">
                        <label class="custom-control-label" for="DE_dDP2"> Tutela de Urgência </label>
                    </div>
                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="p_prioridadePortador" value="Prioridade p/ portador de doença grave" id="DE_dDP3">
                        <label class="custom-control-label" for="DE_dDP3"> Prioridade p/ portador de doença grave
                        </label>
                    </div>
                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="p_gratuidade" value="Gratuidade de Justiça" id="DE_dDP4">
                        <label class="custom-control-label" for="DE_dDP4"> Gratuidade de Justiça </label>
                    </div>
                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="p_exame" value="Exame Técnico" id="DE_dDP5">
                        <label class="custom-control-label" for="DE_dDP5"> Exame Técnico </label>
                    </div>
                </div>
                <br>
                <!--Comarca-->
                <div>
                    <label for="DE_dDP_comarca"><strong>* Comarca</strong>
                        <select class="custom-select" name="p_comarca" id="DE_dDP_comarca" v-model="showComarca">
                            <option value="">Escolha uma comarca</option>
                            <option value="Angra dos Reis">Comarca de Angra dos Reis</option>
                            <option value="Paraty">Comarca de Paraty</option>
                            <option value="Barra do Piraí">Comarca de Barra do Piraí</option>
                            <option value="Rio das Flores">Comarca de Rio das Flores</option>
                            <option value="Valença">Comarca de Valença</option>
                            <option value="Barra Mansa">Comarca de Barra Mansa</option>
                            <option value="Itatiaia">Comarca de Itatiaia</option>
                            <option value="Pinheiral">Comarca de Pinheiral</option>
                            <option value="Porto Real">Comarca de Porto Real</option>
                            <option value="Quatis">Comarca de Quatis</option>
                            <option value="Resende">Comarca de Resende</option>
                            <option value="Rio Claro">Comarca de Rio Claro</option>
                            <option value="Piraí">Comarca de Piraí</option>
                            <option value="Engenheiro Paulo de Frontin">Comarca de Engenheiro Paulo de Frontin</option>
                            <option value="Mendes">Comarca de Mendes</option>
                            <option value="Miguel Pereira">Comarca de Miguel Pereira</option>
                            <option value="Paracambi">Comarca de Paracambi</option>
                            <option value="Paty do Alferes">Comarca de Paty do Alferes</option>
                            <option value="Vassouras">Comarca de Vassouras</option>
                            <option value="Areal">Comarca de Areal</option>
                            <option value="Comendador Levy Gasparian">Comarca de Comendador Levy Gasparian</option>
                            <option value="Paraíba do Sul">Comarca de Paraíba do Sul</option>
                            <option value="Sapucaia">Comarca de Sapucaia</option>
                            <option value="Três Rios">Comarca de Três Rios</option>
                            <option value="Volta Redonda">Comarca de Volta Redonda</option>
                        </select>
                    </label>
                </div>
                <br>
                <!--Competência (baseado na comarca)-->
                <div>
                    <label for="DE_dDP_competencia"><strong>* Competência</strong>
                        <!--Escolha uma competencia (comarca não foi escolhida)-->
                        <select class="custom-select" name="p_competencia" id="DE_dDP_competencia" v-show="showComarca === ''">
                            <option value="">Escolha uma competência</option>
                        </select>
                        <select class="custom-select" name="p_competencia" id="DE_dDP_competencia" v-model="showCompetencia" v-show="showComarca !== ''">
                            <option value="">Escolha uma competência</option>
                            <option value="Acidentes de Trabalho">Acidentes de Trabalho</option>
                            <option value="Cível">Cível</option>
                            <option value="Dívida Ativa Estadual">Dívida Ativa Estadual</option>
                            <option value="Dívida Ativa Municipal">Dívida Ativa Municipal</option>
                            <option value="Empresarial">Empresarial</option>
                            <option value="Família">Família</option>
                            <option value="Fazenda Pública">Fazenda Pública</option>
                            <option value="Juizado Especial Civil">Juizado Especial Civil</option>
                            <option value="Órfãos">Órfãos e Sucessões</option>
                            <option value="Registro Civil de Pessoas Naturais">Registro Civil de Pessoas Naturais</option>
                            <option value="Registro Público">Registro Público</option>
                        </select>
                    </label>
                </div>
                <!--Opção extra para competência Cível, Empresarial, Família, Fazenda Pública e Órfãos e Sucessões-->
                <div v-show="showComarca !== '' && (showCompetencia === 'Cível' || showCompetencia === 'Empresarial' || showCompetencia === 'Família' || showCompetencia === 'Fazenda Pública' || showCompetencia === 'Órfãos')">
                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" name="p_conciliacao" value="Autor opta pela realização de audiência de
                            conciliação ou de mediação" class="custom-control-input" id="opcaoExtra">
                        <label class="custom-control-label" for="opcaoExtra">Autor opta pela realização de audiência de
                            conciliação ou de mediação?</label>
                    </div>
                </div>
                <br>
                <!--Classe (baseado na competência)-->
                <div>
                    <label for="DE_dDP_classe"><strong>* Classe</strong>
                        <!--Escolha uma classe (competência não foi escolhida)-->
                        <select class="custom-select" name="p_classe" id="DE_dDP_classe" v-show="showComarca === '' || showCompetencia === ''">
                            <option value="">Escolha uma classe</option>
                        </select>
                        <!--Acidentes de Trabalho-->
                        <select class="custom-select" name="p_classe" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'Acidentes de Trabalho' && showComarca !== ''">
                            <option value="">Escolha uma classe</option>
                            <option value="Ação Civil Coletiva">Ação Civil Coletiva</option>
                            <option value="Ação Civil Pública">Ação Civil Pública</option>
                            <option value="Consignação em Pagamento – CPC">Consignação em Pagamento – CPC</option>
                            <option value="Cumprimento de Sentença">Cumprimento de Sentença</option>
                            <option value="Embargos à Execução (por Título Judicial, Contra a Fazenda Pública
                                e Carta Precatória)">Embargos à Execução (por Título Judicial, Contra a Fazenda Pública
                                e Carta Precatória)</option>
                            <option value="Execução de Título Extrajudicial contra a Fazenda Pública">Execução de Título Extrajudicial contra a Fazenda Pública</option>
                            <option value="Execução de Título Extrajudicial – CPC">Execução de Título Extrajudicial – CPC</option>
                            <option value="Habilitação">Habilitação</option>
                            <option value="Mandado de Segurança – CPC">Mandado de Segurança – CPC</option>
                            <option value="Notificação">Notificação</option>
                            <option value="Petição – Cível">Petição – Cível</option>
                            <option value="Procedimento Comum">Procedimento Comum</option>
                        </select>
                        <!--Cível-->
                        <select class="custom-select" name="p_classe" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'Cível' && showComarca !== ''">
                            <option value="">Escolha uma classe</option>
                            <option value="Ação Civil Coletiva">Ação Civil Coletiva</option>
                            <option value="Ação Civil Pública">Ação Civil Pública</option>
                            <option value="Ação Civil Pública- ECA">Ação Civil Pública- ECA</option>
                            <option value="Ação Popular – Lei 4717/65">Ação Popular – Lei 4717/65</option>
                            <option value="Alvará Judicial – Lei 6858/80">Alvará Judicial – Lei 6858/80</option>
                            <option value="Busca e Apreensão em Alienação Fiduciária">Busca e Apreensão em Alienação Fiduciária</option>
                            <option value="Consignação em Pagamento – CPC">Consignação em Pagamento – CPC</option>
                            <option value="Cumprimento de Sentença">Cumprimento de Sentença</option>
                            <option value="Cumprimento Provisório de Decisão">Cumprimento Provisório de Decisão</option>
                            <option value="Cumprimento Provisório de Sentença">Cumprimento Provisório de Sentença</option>
                            <option value="Desapropriação">Desapropriação</option>
                            <option value="Despejo">Despejo</option>
                            <option value="Despejo por Falta de Pagamento">Despejo por Falta de Pagamento</option>
                            <option value="Despejo por Falta de Pagamento cumulado com Cobranças">Despejo por Falta de Pagamento cumulado com Cobranças</option>
                            <option value="Dissolução Parcial de Sociedades">Dissolução Parcial de Sociedades</option>
                            <option value="Embargos – ECA">Embargos – ECA</option>
                            <option value="Embargos à execução (por Título Judicial, Contra a Fazenda Pública e
                                Carta Precatória)">Embargos à execução (por Título Judicial, Contra a Fazenda Pública e
                                Carta Precatória)</option>
                            <option value="Embargos de Terceiro – CPC">Embargos de Terceiro – CPC</option>
                            <option value="Execução de Título extrajudicial – CPC">Execução de Título extrajudicial – CPC</option>
                            <option value="Execução de Hipoteca">Execução de Hipoteca</option>
                            <option value="Exibição de Documento ou Coisa">Exibição de Documento ou Coisa</option>
                            <option value="Falência de Empresários, Socied. Empresárias, Microempresas e Empresas
                                de Peq. Porte – Requerimento">Falência de Empresários, Socied. Empresárias, Microempresas e Empresas
                                de Peq. Porte – Requerimento</option>
                            <option value="Habeas Data">Habeas Data</option>
                            <option value="Habilitação">Habilitação</option>
                            <option value="Habilitação de Crédito">Habilitação de Crédito</option>
                            <option value="Homologação de Transação Extrajudicial">Homologação de Transação Extrajudicial</option>
                            <option value="Homologação de Penhor Legal">Homologação de Penhor Legal</option>
                            <option value="Imissão na Posse">Imissão na Posse</option>
                            <option value="Insolvência Requerida pelo Credor">Insolvência Requerida pelo Credor</option>
                            <option value="Insolvência Requerida pelo Devedor ou pelo Espólio">Insolvência Requerida pelo Devedor ou pelo Espólio</option>
                            <option value="Interdito Proibitório">Interdito Proibitório</option>
                            <option value="Inventário">Inventário</option>
                            <option value="Liquidação Provisória de Sentença pelo Procedimento Comum">Liquidação Provisória de Sentença pelo Procedimento Comum</option>
                            <option value="Mandado de Segurança – CPC">Mandado de Segurança – CPC</option>
                            <option value="Monitória">Monitória</option>
                            <option value="Notificação">Notificação</option>
                            <option value="Oposição">Oposição</option>
                            <option value="Petição – Cível">Petição – Cível</option>
                            <option value="Procedimento Comum">Procedimento Comum</option>
                            <option value="Protesto – CPC">Protesto – CPC</option>
                            <option value="Reintegração/Manutenção de Posse">Reintegração/Manutenção de Posse</option>
                            <option value="Requerimento de Apreensão de Veículo">Requerimento de Apreensão de Veículo</option>
                            <option value="Requerimento de Reintegração de Posse">Requerimento de Reintegração de Posse</option>
                            <option value="Tutela Antecipada Antecedente">Tutela Antecipada Antecedente</option>
                            <option value="Tutela Cautelar Antecedente">Tutela Cautelar Antecedente</option>
                            <option value="Usucapião">Usucapião</option>
                        </select>
                        <!--Dívida Ativa Estadual-->
                        <select class="custom-select" name="p_classe" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'Dívida Ativa Estadual' && showComarca !== ''">
                            <option value="">Escolha uma classe</option>
                            <option value="Ação Civil Pública">Ação Civil Pública</option>
                            <option value="Alvará Judicial – Lei 6858/80">Alvará Judicial – Lei 6858/80</option>
                            <option value="Busca e Apreensão em Alienação Fiduciária">Busca e Apreensão em Alienação Fiduciária</option>
                            <option value="Cautelar Fiscal">Cautelar Fiscal</option>
                            <option value="Consignação em Pagamento – CPC">Consignação em Pagamento – CPC</option>
                            <option value="Embargos à Execução Fiscal">Embargos à Execução Fiscal</option>
                            <option value="Embargos de Terceiro – CPC">Embargos de Terceiro – CPC</option>
                            <option value="Execução de Título Judicial – CPC">Execução de Título Judicial – CPC</option>
                            <option value="Execução Fiscal">Execução Fiscal</option>
                            <option value="Habeas Data">Habeas Data</option>
                            <option value="Homologação do Penhor Legal">Homologação do Penhor Legal</option>
                            <option value="Imissão na Posse">Imissão na Posse</option>
                            <option value="Mandado de Segurança – CPC">Mandado de Segurança – CPC</option>
                            <option value="Mandado de Segurança Coletivo">Mandado de Segurança Coletivo</option>
                            <option value="Procedimento Comum">Procedimento Comum</option>
                            <option value="Tutela Antecipada Antecedente">Tutela Antecipada Antecedente</option>
                            <option value="Tutela Cautelar Antecedente">Tutela Cautelar Antecedente</option>
                        </select>
                        <!--Dívida Ativa Municipal-->
                        <select class="custom-select" name="p_classe" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'Dívida Ativa Municipal' && showComarca !== ''">
                            <option value="">Escolha uma classe</option>
                            <option value="Alvará Judicial – Lei 6858/80">Alvará Judicial – Lei 6858/80</option>
                            <option value="Busca e Apreensão em Alienação Fiduciária">Busca e Apreensão em Alienação Fiduciária</option>
                            <option value="Consignação em Pagamento – CPC">Consignação em Pagamento – CPC</option>
                            <option value="Cumprimento Provisório de Sentença">Cumprimento Provisório de Sentença</option>
                            <option value="Embargos à Execução Fiscal">Embargos à Execução Fiscal</option>
                            <option value="Embargos de Terceiro – CPC">Embargos de Terceiro – CPC</option>
                            <option value="Execução de Título Judicial – CPC">Execução de Título Judicial – CPC</option>
                            <option value="Execução Fiscal">Execução Fiscal</option>
                            <option value="Homologação do Penhor Legal">Homologação do Penhor Legal</option>
                            <option value="Imissão Na Posse">Imissão Na Posse</option>
                            <option value="Mandado de Injunção">Mandado de Injunção</option>
                            <option value="Mandado de Segurança – CPC">Mandado de Segurança – CPC</option>
                            <option value="Mandado de Segurança Coletivo">Mandado de Segurança Coletivo</option>
                            <option value="Petição – Cível">Petição – Cível</option>
                            <option value="Procedimento Comum">Procedimento Comum</option>
                            <option value="Tutela Antecipada Antecedente">Tutela Antecipada Antecedente</option>
                            <option value="Tutela Cautelar Antecedente">Tutela Cautelar Antecedente</option>
                        </select>
                        <!--Empresarial-->
                        <select class="custom-select" name="p_classe" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'Empresarial' && showComarca !== ''">
                            <option value="">Escolha uma classe</option>
                            <option value="Ação Civil Coletiva">Ação Civil Coletiva</option>
                            <option value="Ação Civil Pública">Ação Civil Pública</option>
                            <option value="Alienação Judicial">Alienação Judicial</option>
                            <option value="Busca e Apreensão em alienação Fiduciária">Busca e Apreensão em alienação Fiduciária</option>
                            <option value="Consignação em Pagamento – CPC">Consignação em Pagamento – CPC</option>
                            <option value="Cumprimento de Sentença">Cumprimento de Sentença</option>
                            <option value="Cumprimento Provisório de Sentença">Cumprimento Provisório de Sentença</option>
                            <option value="Despejo">Despejo</option>
                            <option value="Despejo por falta de pagamento">Despejo por falta de pagamento</option>
                            <option value="Despejo por Falta de Pagamento Cumulado Com Cobrança">Despejo por Falta de Pagamento Cumulado Com Cobrança</option>
                            <option value="Dissolução Parcial de Sociedade">Dissolução Parcial de Sociedade</option>
                            <option value="Embargos à execução (por Título Judicial, Contra a Fazenda Pública
                                Pública e Carta Precatória)">Embargos à execução (por Título Judicial, Contra a Fazenda Pública
                                Pública e Carta Precatória)</option>
                            <option value="Embargos de Terceiro – CPC">Embargos de Terceiro – CPC</option>
                            <option value="Extinção das Obrigações do Falido">Extinção das Obrigações do Falido</option>
                            <option value="Falência de Empresários, Socied. Empresárias, Microempresas e
                                Empresas de Peq. Porte – Requerimento">Falência de Empresários, Socied. Empresárias, Microempresas e
                                Empresas de Peq. Porte – Requerimento</option>
                            <option value="Habilitação">Habilitação</option>
                            <option value="Habilitação de Crédito">Habilitação de Crédito</option>
                            <option value="Homologação de Transação Extrajudicial">Homologação de Transação Extrajudicial</option>
                            <option value="Imissão na Posse">Imissão na Posse</option>
                            <option value="Impugnação de Crédito">Impugnação de Crédito</option>
                            <option value="Insolvência Requerida pelo Credor">Insolvência Requerida pelo Credor</option>
                            <option value="Insolvência Requerida pelo Devedor ou pelo Espólio">Insolvência Requerida pelo Devedor ou pelo Espólio</option>
                            <option value="Interdito Proibitório">Interdito Proibitório</option>
                            <option value="Liquidação Provisória de Sentença pelo procedimento comum">Liquidação Provisória de Sentença pelo procedimento comum
                            </option>
                            <option value="Monitória">Monitória</option>
                            <option value="Petição – Cível">Petição – Cível</option>
                            <option value="Prestação de Contas – Exigidas">Prestação de Contas – Exigidas</option>
                            <option value="Procedimento Comum">Procedimento Comum</option>
                            <option value="Produção Antecipada de Provas – CPC">Produção Antecipada de Provas – CPC</option>
                            <option value="Protesto – CPC">Protesto – CPC</option>
                            <option value="Reintegração/Manutenção de Posse">Reintegração/Manutenção de Posse</option>
                            <option value="Restituição de Coisa ou Dinheiro na Falência do Devedor
                                Empresário">Restituição de Coisa ou Dinheiro na Falência do Devedor
                                Empresário</option>
                            <option value="Tutela Antecipada Antecedente">Tutela Antecipada Antecedente</option>
                            <option value="Tutela Cautelar Antecedente">Tutela Cautelar Antecedente</option>
                            <option value="Usucapião">Usucapião</option>
                        </select>
                        <!--Família-->
                        <select class="custom-select" name="p_classe" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'Família' && showComarca !== ''">
                            <option value="">Escolha uma classe</option>
                            <option value="Abertura, Registro e Cumprimento de Testamento">Abertura, Registro e Cumprimento de Testamento</option>
                            <option value="Adoção – ECA">Adoção – ECA</option>
                            <option value="Alimentos – Lei Especial nº 5478/66">Alimentos – Lei Especial nº 5478/66</option>
                            <option value="Alteração do Regime de Bens">Alteração do Regime de Bens</option>
                            <option value="Alvará Judicial – Lei 6858/80">Alvará Judicial – Lei 6858/80</option>
                            <option value="Autorização Judicial – ECA">Autorização Judicial – ECA</option>
                            <option value="Busca e Apreensão Infracional">Busca e Apreensão Infracional</option>
                            <option value="Cautelar – Regulamentação de Visitas">Cautelar – Regulamentação de Visitas</option>
                            <option value="Consignação em Pagamento – CPC">Consignação em Pagamento – CPC</option>
                            <option value="Conversão de Separação Judicial em Divórcio">Conversão de Separação Judicial em Divórcio</option>
                            <option value="Cumprimento de Sentença">Cumprimento de Sentença</option>
                            <option value="Cumprimento Provisório de Decisão">Cumprimento Provisório de Decisão</option>
                            <option value="Cumprimento Provisório de Sentença">Cumprimento Provisório de Sentença</option>
                            <option value="Divórcio">Divórcio</option>
                            <option value="Divórcio Consensual">Divórcio Consensual</option>
                            <option value="Execução de Alimentos">Execução de Alimentos</option>
                            <option value="Habilitação">Habilitação</option>
                            <option value="Homologação de Transação Judicial">Homologação de Transação Judicial</option>
                            <option value="Interdição">Interdição</option>
                            <option value="Internação Provisória">Internação Provisória</option>
                            <option value="Inventário">Inventário</option>
                            <option value="Liquidação Provisória de Sentença pelo Procedimento Comum">Liquidação Provisória de Sentença pelo Procedimento Comum</option>
                            <option value="Mandado de Segurança – CPC">Mandado de Segurança – CPC</option>
                            <option value="Outros Procedimentos de Jurisdição Voluntária">Outros Procedimentos de Jurisdição Voluntária</option>
                            <option value="Remoção e Dispensa/Tutela e Curatela">Remoção e Dispensa/Tutela e Curatela</option>
                            <option value="Sobrepartilha">Sobrepartilha</option>
                            <option value="Tutela Antecipada Antecedente">Tutela Antecipada Antecedente</option>
                            <option value="Tutela Cautelar Antecedente">Tutela Cautelar Antecedente</option>
                            <option value="Tutela e Curatela – Nomeação">Tutela e Curatela – Nomeação</option>
                        </select>
                        <!--Fazenda Pública-->
                        <select class="custom-select" name="p_classe" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'Fazenda Pública' && showComarca !== ''">
                            <option value="">Escolha uma classe</option>
                            <option value="Ação Civil Coletiva">Ação Civil Coletiva</option>
                            <option value="Ação Civil de Improbidade Administrativa">Ação Civil de Improbidade Administrativa</option>
                            <option value="Ação Pública">Ação Pública</option>
                            <option value="Ação Popular Lei 4.717/65">Ação Popular Lei 4.717/65</option>
                            <option value="Alienação Judicial">Alienação Judicial</option>
                            <option value="Alvará Judicial Lei 6.858/80">Alvará Judicial Lei 6.858/80</option>
                            <option value="Busca e Apreensão Com Alienação Fidunciária">Busca e Apreensão Com Alienação Fidunciária</option>
                            <option value="Consignação em Pagamento – CPC">Consignação em Pagamento – CPC</option>
                            <option value="Consignatória de Aluguéis">Consignatória de Aluguéis</option>
                            <option value="Contestação em Foro Diverso">Contestação em Foro Diverso</option>
                            <option value="Cumprimento de Sentença">Cumprimento de Sentença</option>
                            <option value="Cumprimento Provisório de Sentença">Cumprimento Provisório de Sentença</option>
                            <option value="Cumprimento Provisório de Decisão">Cumprimento Provisório de Decisão</option>
                            <option value="Demarcação/Divisão">Demarcação/Divisão</option>
                            <option value="Depósito da Lei 8.866/94">Depósito da Lei 8.866/94</option>
                            <option value="Desapropriação">Desapropriação</option>
                            <option value="Despejo">Despejo</option>
                            <option value="Despejo por Falta de Pagamento">Despejo por Falta de Pagamento</option>
                            <option value="Despejo por Falta de Pagamento Cumulado com Cobrança">Despejo por Falta de Pagamento Cumulado com Cobrança</option>
                            <option value="Discriminatório">Discriminatório</option>
                            <option value="Embargos à Execução Fiscal">Embargos à Execução Fiscal</option>
                            <option value="Embargos à Execução Fiscal (com Título Extrajudicial, Contra a
                                Fazenda Pública e Carta Precatória)">Embargos à Execução Fiscal (com Título Extrajudicial, Contra a
                                Fazenda Pública e Carta Precatória)</option>
                            <option value="Embargos à Terceiro – CPC">Embargos à Terceiro – CPC</option>
                            <option value="Execução de Título Extrajudicial Contra a Fazenda Pública">Execução de Título Extrajudicial Contra a Fazenda Pública</option>
                            <option value="Execução de Título Extrajudicial – CPC">Execução de Título Extrajudicial – CPC</option>
                            <option value="Execução Hipotecária">Execução Hipotecária</option>
                            <option value="Exibição de Documento ou Coisa">Exibição de Documento ou Coisa</option>
                            <option value="Habeas Data">Habeas Data</option>
                            <option value="Habilitação">Habilitação</option>
                            <option value="Homologação de Transação Extrajudicial">Homologação de Transação Extrajudicial</option>
                            <option value="Homologação de Penhor Legal">Homologação de Penhor Legal</option>
                            <option value="Imissão na Posse">Imissão na Posse</option>
                            <option value="Interdito Proibitório">Interdito Proibitório</option>
                            <option value="Interpelação">Interpelação</option>
                            <option value="Liquidação Provisória de Sentença Pelo Procedimento Comum">Liquidação Provisória de Sentença Pelo Procedimento Comum</option>
                            <option value="Mandado de Injunção">Mandado de Injunção</option>
                            <option value="Mandado de Segurança – CPC">Mandado de Segurança – CPC</option>
                            <option value="Mandado de Segurança Coletivo">Mandado de Segurança Coletivo</option>
                            <option value="Monitória">Monitória</option>
                            <option value="Notificação">Notificação</option>
                            <option value="Oposição">Oposição</option>
                            <option value="Outros Procedimentos de Jurisdição Voluntária">Outros Procedimentos de Jurisdição Voluntária</option>
                            <option value="Pedido de Providência">Pedido de Providência</option>
                            <option value="Petição – Cível">Petição – Cível</option>
                            <option value="Prestação de Contas – Exigível">Prestação de Contas – Exigível</option>
                            <option value="Procedimento Comum">Procedimento Comum</option>
                            <option value="Processo Administrativo">Processo Administrativo</option>
                            <option value="Produção Antecipada de Provas – CPC">Produção Antecipada de Provas – CPC</option>
                            <option value="Protesto – CPC">Protesto – CPC</option>
                            <option value="Reintegração e manutenção de Posse">Reintegração e manutenção de Posse</option>
                            <option value="Renovatória de Locação">Renovatória de Locação</option>
                            <option value="Restauração de Autos">Restauração de Autos</option>
                            <option value="Revisional de Aluguel">Revisional de Aluguel</option>
                            <option value="Tutela Antecipada Antecedente">Tutela Antecipada Antecedente</option>
                            <option value="Tutela Cautelar Antecedente">Tutela Cautelar Antecedente</option>
                            <option value="Usucapião">Usucapião</option>
                        </select>
                        <!--Juizado Especial Civil-->
                        <select class="custom-select" name="p_classe" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'Juizado Especial Civil' && showComarca !== ''">
                            <option value="">Escolha uma classe</option>
                            <option value="Alvará Judicial Lei 6.858/80">Alvará Judicial Lei 6.858/80</option>
                            <option value="Cumprimento de Sentença">Cumprimento de Sentença</option>
                            <option value="Cumprimento Provisório de Sentença">Cumprimento Provisório de Sentença</option>
                            <option value="Despejo">Despejo</option>
                            <option value="Despejo por Falta de Pagamento">Despejo por Falta de Pagamento</option>
                            <option value="Despejo por Falta de Pagamento Cumulado com Cobrança">Despejo por Falta de Pagamento Cumulado com Cobrança</option>
                            <option value="Embargos à Execução Fiscal (com Título Extrajudicial, Contra a
                                Fazenda Pública e Carta Precatória)">Embargos à Execução Fiscal (com Título Extrajudicial, Contra a
                                Fazenda Pública e Carta Precatória)</option>
                            <option value="Embargos de Terceiro – CPC">Embargos de Terceiro – CPC</option>
                            <option value="Execução de Título Extrajudicial – CPC">Execução de Título Extrajudicial – CPC</option>
                            <option value="Exibição de Documento ou Coisa">Exibição de Documento ou Coisa</option>
                            <option value="Homologação de Transação Extrajudicial">Homologação de Transação Extrajudicial</option>
                            <option value="Monitória">Monitória</option>
                            <option value="Procedimento do Juizado Especial Civil/Fazendário">Procedimento do Juizado Especial Civil/Fazendário</option>
                            <option value="Protesto – CPC">Protesto – CPC</option>
                        </select>
                        <!--Órfãos e Sucessões-->
                        <select class="custom-select" name="p_classe" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'Órfãos' && showComarca !== ''">
                            <option value="">Escolha uma classe</option>
                            <option value="Abertura, Registro e Cumprimento de Testamento">Abertura, Registro e Cumprimento de Testamento</option>
                            <option value="Alienação Judicial">Alienação Judicial</option>
                            <option value="Alvará Judicial Lei 6.858/80">Alvará Judicial Lei 6.858/80</option>
                            <option value="Arrolamento Comum">Arrolamento Comum</option>
                            <option value="Arrolamento Sumário">Arrolamento Sumário</option>
                            <option value="Cumprimento Provisório de Sentença">Cumprimento Provisório de Sentença</option>
                            <option value="Declaração de Ausência">Declaração de Ausência</option>
                            <option value="Embargos à Execução Fiscal (com Título Extrajudicial, Contra a
                                Fazenda Pública e Carta Precatória)">Embargos à Execução Fiscal (com Título Extrajudicial, Contra a
                                Fazenda Pública e Carta Precatória)</option>
                            <option value="Embargos de Terceiro – CPC">Embargos de Terceiro – CPC</option>
                            <option value="Habilitação">Habilitação</option>
                            <option value="Herança Jacente">Herança Jacente</option>
                            <option value="Homologação de Transação Extrajudicial">Homologação de Transação Extrajudicial</option>
                            <option value="Interdição">Interdição</option>
                            <option value="Interdito Probatório">Interdito Probatório</option>
                            <option value="Interpelação">Interpelação</option>
                            <option value="Inventário">Inventário</option>
                            <option value="Notificação">Notificação</option>
                            <option value="Oposição">Oposição</option>
                            <option value="Outros Procedimentos de Jurisdição Voluntária">Outros Procedimentos de Jurisdição Voluntária</option>
                            <option value="Pedidos de Providências">Pedidos de Providências</option>
                            <option value="Petição – Cível">Petição – Cível</option>
                            <option value="Prestação de Contas – ECA">Prestação de Contas – ECA</option>
                            <option value="Prestação de Contas – Exigidas">Prestação de Contas – Exigidas</option>
                            <option value="Procedimento Comum">Procedimento Comum</option>
                            <option value="Remoção e Dispensa/Tutela e Curatela">Remoção e Dispensa/Tutela e Curatela</option>
                            <option value="Sobrepartilha">Sobrepartilha</option>
                            <option value="Tutela Antecipada Antecedente">Tutela Antecipada Antecedente</option>
                            <option value="Tutela e Curatela – Nomeação">Tutela e Curatela – Nomeação</option>
                        </select>
                        <!--Registro Civil de Pessoas Naturais-->
                        <select class="custom-select" name="p_classe" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'Registro Civil de Pessoas Naturais' && showComarca !== ''">
                            <option value="">Escolha uma classe</option>
                            <option value="Alteração de Regime de Bens">Alteração de Regime de Bens</option>
                            <option value="Averiguação Oficiosa de Paternidade">Averiguação Oficiosa de Paternidade</option>
                            <option value="Habilitação para Casamento – RCPN">Habilitação para Casamento – RCPN</option>
                            <option value="Homologação e Transação Extrajudicial">Homologação e Transação Extrajudicial</option>
                            <option value="Mandado de Segurança – CPC">Mandado de Segurança – CPC</option>
                            <option value="Outros Procedimentos de Jurisdição Voluntária">Outros Procedimentos de Jurisdição Voluntária</option>
                            <option value="Petição – Cível">Petição – Cível</option>
                            <option value="Procedimento Comum">Procedimento Comum</option>
                            <option value="Registro de Casamento Nuncupativo">Registro de Casamento Nuncupativo</option>
                            <option value="Sindicância">Sindicância</option>
                            <option value="Retificação ou Suprimento ou Restauração do Registo Cível">Retificação ou Suprimento ou Restauração do Registo Cível
                            </option>
                        </select>
                        <!--Registro Público-->
                        <select class="custom-select" name="p_classe" id="DE_dDP_classe" v-model="showClasse" v-show="showCompetencia === 'Registro Público' && showComarca !== ''">
                            <option value="">Escolha uma classe</option>
                            <option value="Cumprimento Provisório de Sentença">Cumprimento Provisório de Sentença</option>
                            <option value="Cumprimento Provisório de Decisão">Cumprimento Provisório de Decisão</option>
                            <option value="Demarcação/Divisão">Demarcação/Divisão</option>
                            <option value="Declaração de Ausência">Declaração de Ausência</option>
                            <option value="Dúvida">Dúvida</option>
                            <option value="Embargos à Execução Fiscal (com Título Extrajudicial, Contra
                                a Fazenda Pública e Carta Precatória)">Embargos à Execução Fiscal (com Título Extrajudicial, Contra
                                a Fazenda Pública e Carta Precatória)</option>
                            <option value="Embargos de Terceiro – CPC">Embargos de Terceiro – CPC</option>
                            <option value="Habilitação">Habilitação</option>
                            <option value="Homologação e Transação Extrajudicial">Homologação e Transação Extrajudicial</option>
                            <option value="Mandado de Segurança – CPC">Mandado de Segurança – CPC</option>
                            <option value="Notificação">Notificação</option>
                            <option value="Oposição">Oposição</option>
                            <option value="Outros Procedimentos de Jurisdição Voluntária">Outros Procedimentos de Jurisdição Voluntária</option>
                            <option value="Pedidos de Providências">Pedidos de Providências</option>
                            <option value="Petição – Cível">Petição – Cível</option>
                            <option value="Procedimento Comum">Procedimento Comum</option>
                            <option value="Processo Administrativo">Processo Administrativo</option>
                            <option value="Protesto – CPC">Protesto – CPC</option>
                            <option value="Registro Torrens">Registro Torrens</option>
                            <option value="Retificação de Registro de Imóveis">Retificação de Registro de Imóveis</option>
                        </select>
                    </label>
                </div>
                <br>
                <!--Distribuição-->
                <div>
                    <label for="DE_dDP_distribuicao"><strong>* Distribuição</strong>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === '' || showCompetencia === '' || showClasse === ''">
                            <option value="">Escolha uma distribuição</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Angra dos Reis' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Angra dos Reis">Distribuidor de Angra dos Reis</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Paraty' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Paraty">Distribuidor de Paraty</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Barra do Piraí' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Barra do Piraí">Distribuidor de Barra do Piraí</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Rio das Flores' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Rio das Flores">Distribuidor de Rio das Flores</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Valença' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Valença">Distribuidor de Valença</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Barra Mansa' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Barra Mansa">Distribuidor de Barra Mansa</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Itatiaia' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Itatiaia">Distribuidor de Itatiaia</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Pinheiral' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Pinheiral">Distribuidor de Pinheiral</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Porto Real' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Porto Real">Distribuidor de Porto Real</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Quatis' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Quatis">Distribuidor de Quatis</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Resende' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Resende">Distribuidor de Resende</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Rio Claro' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Rio Claro">Distribuidor de Rio Claro</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Piraí' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Piraí">Distribuidor de Piraí</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Engenheiro Paulo de Frontin' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Engenheiro Paulo de Frontin">Distribuidor de Engenheiro Paulo de Frontin</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Mendes' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Mendes">Distribuidor de Mendes</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Miguel Pereira' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Miguel Pereira">Distribuidor de Miguel Pereira</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Paracambi' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Paracambi">Distribuidor de Paracambi</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Paty do Alferes' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Paty do Alferes">Distribuidor de Paty do Alferes</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Vassouras' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Vassouras">Distribuidor de Vassouras</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Areal' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Areal">Distribuidor de Areal</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Comendador Levy Gasparian' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Comendador Levy Gasparian">Distribuidor de Comendador Levy Gasparian</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Paraíba do Sul' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Paraíba do Sul">Distribuidor de Paraíba do Sul</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Sapucaia' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Sapucaia">Distribuidor de Sapucaia</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Três Rios' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Três Rios">Distribuidor de Três Rios</option>
                        </select>
                        <select class="custom-select" name="p_distribuicao" id="DE_dDP_distribuicao" v-show="showComarca === 'Volta Redonda' && showCompetencia != '' && showClasse != ''">
                            <option value="Distribuidor de Volta Redonda">Distribuidor de Volta Redonda</option>
                        </select>
                    </label>
                </div>
                <br>
                <!--Valor da Causa-->
                <div>
                    <div class="form-inline">
                        <div class="col-xs-2">
                            <span><strong>* Valor da Causa</strong> </span>
                            <input type="text" name="p_valor" class="form-control" id="DE_dDP_valorCausa" v-money="'R$'">
                        </div>
                    </div>
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
