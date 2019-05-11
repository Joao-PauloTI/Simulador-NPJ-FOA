@extends('layout')
@section('titulo') Distribuição Eletrônica @endsection
@section('conteudo')

<div class="container">
    <h1>Distribuição de Petição Inicial</h1>
    <hr>
    <p><strong>ATENÇÃO SENHOR ADVOGADO: SE NÃO HOUVER PEDIDO DE JUSTIÇA GRATUITA, ANTES DE REALIZAR O CADASTRAMENTO DE SUA PETIÇÃO, FAÇA O RECOLHIMENTO DO GRERJ, POIS SEU NÚMERO E VALOR SERÃO NECESSÁRIOS.</strong></p>
    <p>Campos marcados com "*" são de preenchimento obrigatório.</p>

    <!--GRERJ-->
    <div class="well well-sm">
        <h3>GRERJ</h3>
        <span>Possui GRERJ?</span>
        <!--Isto é apenas uma amostra dos casos. Nenhuma das opções devem estar selecionadas quando a 
            página carregar! O certo é aparecer um caso diferente de acordo com a opção selecionada.-->
        <!--if (grerjSim == true)-->
            <label class="radio-inline"><input type="radio" name="grerjSim" checked>Sim</label>
            <label class="radio-inline"><input type="radio" name="grerjNao">Não</label>
            <br>
            <span><strong>*</strong> Número da GRERJ</span>
            <input type="text" required>
            <br>
        <!--else
            <label class="radio-inline"><input type="radio" name="grerjSim">Sim</label>
            <label class="radio-inline"><input type="radio" name="grerjNao" checked>Não</label>
            <br>
            <span><strong>*</strong> Motivo</span>
            <select>
                <option>Escolha um motivo</option>
                <option>Ação popular</option>
                <option>Dúvida (Registro Público)</option>
                <option>Execução Fiscal</option>
                <option>Juizado Especial Cível</option>
                <option>Juizado Especial Fazendário</option>
                <option>Justiça Gratuita / Pedido de Gratuidade</option>
                <option>M.P.</option>
                <option>Parcelamento de Custas</option>
            </select>
        endif-->
    </div>
</div>
@endsection