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

                <!--Se for selecionado sim
                <div class="custom-control custom-control-inline custom-radio">
                    <input type="radio" class="custom-control-input" name="grerj" id="grerjSim" checked>
                    <label class="custom-control-label" for="grerjSim"> Sim </label>
                </div>
                <div class="custom-control custom-control-inline custom-radio">
                    <input type="radio" class="custom-control-input" name="grerj" id="grerjNao">
                    <label class="custom-control-label" for="grerjNao"> Não </label>
                </div>
                <br>
                <span><strong>*</strong> Número da GRERJ </span>
                <input type="text" required>
                <br>
                Se for selecionado não-->
                <div class="custom-control custom-control-inline custom-radio">
                    <input type="radio" class="custom-control-input" name="grerj" id="grerjSim">
                    <label class="custom-control-label" for="grerjSim"> Sim </label>
                </div>
                <div class="custom-control custom-control-inline custom-radio">
                    <input type="radio" class="custom-control-input" name="grerj" id="grerjNao" checked>
                    <label class="custom-control-label" for="grerjNao"> Não </label>
                </div>
                <br>
                <label for="grerjMotivo">Motivo 
                    <select id="grerjMotivo" class="custom-select">
                        <option>Escolha um motivo</option>
                        <option>Juizado Especial Cível</option>
                        <option>Justiça Gratuita / Pedido de Gratuidade</option>
                        <option>...</option>
                    </select>
                </label>        
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
            <div class="custom-control custom-control-inline custom-radio">
                <input type="radio" class="custom-control-input" name="dpd" id="dpdSim">
                <label class="custom-control-label" for="dpdSim"> Sim </label>
            </div>
            <div class="custom-control custom-control-inline custom-radio">
                <input type="radio" class="custom-control-input" name="dpd" id="dpdNao">
                <label class="custom-control-label" for="dpdNao"> Não </label>
            </div>
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
                <div class="custom-control custom-control-inline custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="ddp1" id="ddp1">
                    <label class="custom-control-label" for="ddp1">
                         Prioridade p/ deficiente físico ou mental 
                    </label>
                </div>
                <div class="custom-control custom-control-inline custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="ddp2" id="ddp2">
                    <label class="custom-control-label" for="ddp2">
                         Tutela de Urgência 
                    </label>
                </div>
                <div class="custom-control custom-control-inline custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="ddp3" id="ddp3">
                    <label class="custom-control-label" for="ddp3">
                         Prioridade p/ portador de doença grave 
                    </label>
                </div>
                <div class="custom-control custom-control-inline custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="ddp4" id="ddp4">
                    <label class="custom-control-label" for="ddp4">
                         Gratuidade de Justiça 
                    </label>
                </div>
                <div class="custom-control custom-control-inline custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="ddp5" id="ddp5">
                    <label class="custom-control-label" for="ddp5">
                         Exame Técnico 
                    </label>
                </div>
            </form>
            <br>
            <!--Todos os campos são interligados-->
            <label for="ddp_comarca"><strong>*</strong> Comarca
                <select class="custom-select"  id="ddp_comarca">
                    <option>Escolha uma comarca</option>
                    <option>Comarca de Barra do Piraí</option>
                    <option>Comarca de Volta Redonda</option>
                    <option>...</option>
                </select>
            </label>
            <br>
            <label for="ddp_competencia"><strong>*</strong> Competência 
                <select class="custom-select" id="ddp_competencia">
                    <option>Escolha uma competência</option>
                    <option>Acidentes de Trabalho</option>
                    <option>Juizado Especial Cível</option>
                    <option>...</option>
                </select>
            </label>
            <br>
            <label for="ddp_classe"><strong>*</strong> Classe 
                <select class="custom-select" id="ddp_classe">
                    <option>Escolha uma classe</option>
                    <option>Ação Civil Coletiva</option>
                    <option>Alvará Judicial</option>
                    <option>...</option>
                </select>
            </label>
            <br>
            <label for="ddp_distribuicao"><strong>*</strong> Distribuição 
                <select class="custom-select" id="ddp_distribuicao">
                    <option>Escolha uma distribuição</option>
                    <option>...</option>
                    <option>...</option>
                    <option>...</option>
                </select>
            </label>
            <br>
            <form class="form-inline">
                <div class="col-xs-2">
                    <span><strong>*</strong> Valor da Causa: </span>
                    <input type="text" class="form-control" id="valorCausa" placeholder="ex.: 1.000,00" required>
                </div>
            </form>
            <br>
        </div>
    </div>
    <br>
    <!--Advogado/Representante-->
    <div class="card">
        <div class="card-header">
            <h5><strong>Advogado / Representante</strong></h5>
        </div>
        <div class="card-body">
            <form class="form-inline">
                <label for="selectAR">
                    <select class="custom-select" id="selectAR">
                        <option>Advogado</option>
                        <option>Defensor Público</option>
                    </select>
                </label>
                <div class="col-md-1"><!--espaço--></div>
                <!--if(advogado == true)-->
                <span> Número de OAB: </span>
                <label for="regiaoOAB">
                    <select class="custom-select" id="regiaoOAB">
                        <option>RJ</option>
                        <option>SP</option>
                        <option>...</option>
                   </select>
                </label>
                <input type="text" class="form-control" required>
            <!--else
            <span> Matrícula </span>
            <input type="text" class="form-control" required>
            endif-->
            </form>
        </div>
    </div>
    <br>
    <!--Autores-->
    <div class="card">
        <div class="card-header">
            <h5><strong>Autor(es)</strong></h5>
        </div>
        <div class="card-body">
            <a href="#">Cadastrar Autor </a>
            <span> | </span>
            <a href="#"> Cadastrar Representante do Autor </a>
        </div>
    </div>
    <br>
    <!--Réus-->
    <div class="card">
        <div class="card-header">
            <h5><strong>Réu(s)</strong></h5>
        </div>
        <div class="card-body">
            <a href="#">Cadastrar Réu </a>
            <span> | </span>
            <a href="#"> Cadastrar Representante do Réu </a>
        </div>
    </div>
    <br>
    <!--Documentos-->
    <div class="card">
        <div class="card-header">
            <h5><strong>Documento(s)</strong></h5>
        </div>
        <div class="card-body">
            <a href="#">Upload da Petição Inicial </a>
            <span> | </span>
            <a href="#"> Enviar CPF </a>
            <span> | </span>
            <a href="#"> Enviar Comprovante de Residência </a>
            <span> | </span>
            <a href="#"> Enviar Procuração </a>
            <span> | </span>
            <a href="#"> Upload do(s) Anexo(s) da Petição Inicial </a>
        </div>
    </div>
    <br>
    <!--Declaração de Veracidade-->
    <div class="card">
        <div class="card-header">
            <h5><strong>Declaração de Veracidade</strong></h5>
        </div>
        <div class="card-body">
            <form action="">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="ddvCheck">
                    <label class="custom-control-label" for="ddvCheck"> "Declaro sob as penas da Lei, que as informações acima prestadas correspondem à verdade, tendo sido prestadas em obediência à lealdade processual e à boa fé, nos termos do Art. 5º do CPC/15, ciente de que a eventual prestação de informações inverídicas poderá acarretar a incidência das penalidades previstas em lei."</label>
                </div>
            </form>
        </div>
    </div>
    <br>
    <!--Botões SALVAR/LIMPAR-->
    <div style="text-align:center">
        <form action="">
            <button type="submit" class="btn btn-primary">SALVAR</button>
            <button type="reset" class="btn btn-danger">LIMPAR</button>
        </form>
    </div>
    <br>
</div>
@endsection