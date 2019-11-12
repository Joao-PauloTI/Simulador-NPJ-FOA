@extends('layout')
@section('titulo') Histórico de Processos
@endsection

@section('conteudo')
<div id="app">
    <pimenulateral id="PI_mostrarEsconderMenu"></pimenulateral>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Histórico de Processos</h1>
            </div>
            <div class="card-body">
                <p><strong>Instância:</strong> {{ Session::get('consultaFiltros.comarca_instancia') }}</p>
                <p><strong>Comarca:</strong> {{ Session::get('consultaFiltros.comarca_consulta') }}</p>
                <p><strong>Total de processos encontrados:</strong> {{ count($processos) }}</p>

                <form action="{{ route('processo.excluir') }}" method="post">
                    @csrf
                    @foreach ($processos as $processo)
                    <div class="custom-control custom-checkbox" style="float: left;">
                        <input type="checkbox" class="custom-control-input" id="{{ $processo->p_numeracaoProcesso }}" name="processosSelecionados[]" value="{{ $processo->p_numeracaoProcesso }}">
                        <label class="custom-control-label" for="{{ $processo->p_numeracaoProcesso }}" />
                    </div>
                    <div style="border-style:solid; border-width:1px; margin-left: 10%; margin-right: 10%; padding-top: 1%; padding-left: 2%; padding-right: 2%">
                        <h5><strong>1ª Instância - <ins><a href="#">{{ $processo->p_numeracaoProcesso }}</ins></a></strong></h5>
                        <p class="p-0 m-0"><strong>Comarca:</strong> {{ $processo->p_comarca }}</p>
                        <p class="p-0 m-0"><strong>Serventia:</strong> Núcleo de Prática Jurídica - UniFOA</p>
                        <p class="p-0 m-0"><strong>Autor:</strong> {{ $processo->processo_autor->a_nome }}</p>
                        @if ($processo->processo_reu->r_nome !== null)
                        <p class="p-0 m-0"><strong>Réu:</strong> {{ $processo->processo_reu->r_nome }}</p>
                        @else
                        <p class="p-0 m-0"><strong>Réu:</strong> {{ $processo->processo_reuJuridico->rj_nome }}</p>
                        @endif
                        @if (count($processo->processo_advogado) > 0)
                        @foreach ($processo->processo_advogado as $advogado)
                        <p class="p-0 m-0"><strong>Advogado:</strong> {{ $advogado->ad_estadoOAB }}{{ $advogado->ad_numeroOAB }} {{ $advogado->ad_nome }}</p>
                        @endforeach
                        @endif
                        @if (count($processo->processo_defensor) > 0)
                        @foreach ($processo->processo_defensor as $defensor)
                        <p class="p-0 m-0"><strong>Advogado:</strong> {{ $defensor->dp_matricula }} - {{ $defensor->dp_nome }} - DEFENSOR PÚBLICO</p>
                        @endforeach
                        @endif
                    </div>
                    <br>
                    @endforeach
                    @if (count($processos) > 0)
                    <div align="center">
                        <button type="submit" class="btn btn-danger"><strong>Excluir Processos Selecionados</strong></button>
                        <a href="/consultarexcluirprocessos" class="btn btn-primary"><strong>Voltar</strong></a>
                    </div>
                    @else
                    <div align="center">
                        <a href="/consultarexcluirprocessos" class="btn btn-primary"><strong>Voltar</strong></a>
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection
