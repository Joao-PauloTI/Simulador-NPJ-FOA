@extends('layout')
@section('titulo') Distribuição Eletrônica @endsection
@section('conteudo')

<div class="container">
    <h1>Distribuição de Petição Inicial</h1>
    <hr>
    <p><strong>ATENÇÃO SENHOR ADVOGADO: SE NÃO HOUVER PEDIDO DE JUSTIÇA GRATUITA, ANTES DE REALIZAR O CADASTRAMENTO DE SUA PETIÇÃO, FAÇA O RECOLHIMENTO DO GRERJ, POIS SEU NÚMERO E VALOR SERÃO NECESSÁRIOS.</strong></p>
    <p>Campos marcados com <strong>*</strong> são de preenchimento obrigatório.</p>

    <!--GRERJ-->
    <div class="card">
        <div class="card-header">
            <h5><strong>GRERJ</strong></h5>
        </div>
        <div class="card-body">
            <span><strong>*</strong> Possui GRERJ? </span>
            <!--Isto é apenas uma amostra dos casos. No programa real, nenhuma das opções devem estar 
                selecionadas quando a página carregar! O certo é aparecer um caso diferente de acordo 
                com a opção selecionada.-->
            <!--if (grerjSim == true)-->
                <label class="radio-inline"><input type="radio" name="grerjSim" checked> Sim </label>
                <label class="radio-inline"><input type="radio" name="grerjNao"> Não </label>
                <br>
                <span><strong>*</strong> Número da GRERJ </span>
                <input type="text" required>
                <br>
            <!--else
                <label class="radio-inline"><input type="radio" name="grerjSim"> Sim </label>
                <label class="radio-inline"><input type="radio" name="grerjNao" checked> Não </label>
                <br>
                <span><strong>*</strong> Motivo</span>
                <select>
                    <option>Escolha um motivo</option>
                    <option>Juizado Especial Cível</option>
                    <option>Justiça Gratuita / Pedido de Gratuidade</option>
                </select>
            endif-->
        </div>
    </div>
    <br>
    <!--Processo Principal (na maioria dos casos a opção é não)-->
    <div class="card">
        <div class="card-header">
            <h5><strong>Processo Principal</strong></h5>
        </div>
        <div class="card-body">
            <span><strong>*</strong> Distribuição por Dependência </span>
            <label class="radio-inline"><input type="radio" name="dpdSim"> Sim</label>
            <label class="radio-inline"><input type="radio" name="dpdNao" checked> Não</label>
            <br>
        </div>
    </div>
    <br>
    <!--Dados do Processo-->
    <div class="card">
        <div class="card-header">
            <h5><strong>Dados do Processo</strong></h5>
        </div>
        <!--É preciso perguntar as opções de marcar abaixo são necessárias-->
        <div class="card-body">
            <form action="">
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="ddp1"> Prioridade p/ deficiente físico ou mental 
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="ddp2"> Tutela de Urgência 
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="ddp3"> Prioridade p/ portador de doença grave 
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="ddp4"> Gratuidade de Justiça 
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="ddp5"> Exame Técnico 
                    </label>
                </div>
            </form>
            <br>
            <!--Todos os campos são interligados-->
            <label for="ddp_comarca"><strong>*</strong> Comarca
                <select id="ddp_comarca">
                    <option>Escolha uma comarca</option>
                    <option>Comarca de Barra do Piraí</option>
                    <option>Comarca de Volta Redonda</option>
                    <option>...</option>
                </select>
            </label>
            <br>
            <label for="ddp_competencia"><strong>*</strong> Competência 
                <select id="ddp_competencia">
                    <option>Escolha uma competência</option>
                    <option>Acidentes de Trabalho</option>
                    <option>Juizado Especial Cível</option>
                    <option>...</option>
                </select>
            </label>
            <br>
            <label for="ddp_classe"><strong>*</strong> Classe 
                <select id="ddp_classe">
                    <option>Escolha uma classe</option>
                    <option>Ação Civil Coletiva</option>
                    <option>Alvará Judicial</option>
                    <option>...</option>
                </select>
            </label>
            <br>
            <label for="ddp_distribuicao"><strong>*</strong> Distribuição 
                <select id="ddp_distribuicao">
                    <option>Escolha uma distribuição</option>
                    <option>...</option>
                    <option>...</option>
                    <option>...</option>
                </select>
            </label>
            <br>
            <span><strong>*</strong> Valor da Causa </span>
            <input type="text" required>
            <br>
        </div>
    </div>
</div>
@endsection