@extends('layout')
@section('titulo') Processo - {{ $processo->p_numeracaoProcesso }}
@endsection

@section('conteudo')
<div id="app">
    <pimenulateral id="PI_mostrarEsconderMenu"></pimenulateral>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Consulta Processual - Número - Primeira Instância</h1>
            </div>
            <div class="card-body">
                <p class="p-0 m-0" align="center"><strong>As informações aqui contidas não produzem efeitos legais.</strong></p>
                <p class="p-0 m-0" align="center"><strong>Somente a publicação no DJERJ oficializa despachos e decisões e estabelece prazos.</strong></p>
                <br>
                <h3 align="center"><strong>Processo Nº {{ $processo->p_numeracaoProcesso }}</strong></h3>
                <br>
                <p><strong>TJ/RJ - {{ Carbon\Carbon::now('America/Sao_Paulo')->format('d/m/Y') }} {{ Carbon\Carbon::now('America/Sao_Paulo')->format('H:i:s') }} - Primeira instância - Distribuído em {{ $processo->created_at->format('d/m/Y')}}</strong></p>
                <br>
                <table class="table table-borderless">
                    <tr>
                        <td><strong>Comarca de {{ $processo->p_comarca }}</strong></td>
                        <td><strong>Núcleo de Prática Jurídica - UniFOA</strong></td>
                    </tr>
                    <tr>
                        <td class="pt-0 pb-0 mt-0 mb-0"><strong>Endereço:</strong></td>
                        <td class="pt-0 pb-0 mt-0 mb-0">Avenida Paulo Erlei Alves Abrantes, 1325</td>
                    </tr>
                    <tr>
                        <td class="pt-0 pb-0 mt-0 mb-0"><strong>Bairro:</strong></td>
                        <td class="pt-0 pb-0 mt-0 mb-0">Três Poços</td>
                    </tr>
                    <tr>
                        <td class="pt-0 pb-0 mt-0 mb-0"><strong>Cidade:</strong></td>
                        <td class="pt-0 pb-0 mt-0 mb-0">Volta Redonda</td>
                    </tr>
                    <tr>
                        <td><strong>Classe:</strong></td>
                        <td>{{ $processo->p_classe }}</td>
                    </tr>
                    <tr>
                        <td class="pt-0 pb-0 mt-0 mb-0"><strong>Autor:</strong></td>
                        <td class="pt-0 pb-0 mt-0 mb-0">{{ $processo->processo_autor->a_nome }}</td>
                    </tr>
                    @if($processo->processo_representanteAutor->ra_cpf !== null)
                    <tr>
                        <td class="pt-0 pb-0 mt-0 mb-0"><strong>Representante do Autor:</strong></td>
                        <td class="pt-0 pb-0 mt-0 mb-0">{{ $processo->processo_representanteAutor->ra_nome }}</td>
                    </tr>
                    @endif
                    <tr>
                        <td class="pt-0 pb-0 mt-0 mb-0"><strong>Réu:</strong></td>
                        @if ($processo->processo_reu->r_cpf !== null)
                        <td class="pt-0 pb-0 mt-0 mb-0">{{ $processo->processo_reu->r_nome }}</td>
                        @elseif($processo->processo_reuJuridico->rj_cnpj !== null)
                        <td class="pt-0 pb-0 mt-0 mb-0">{{ $processo->processo_reuJuridico->rj_nome }}</td>
                        @endif
                    </tr>
                    @if($processo->processo_representanteReu->rr_cpf !== null)
                    <tr>
                        <td class="pt-0 pb-0 mt-0 mb-0"><strong>Representante do Réu:</strong></td>
                        <td class="pt-0 pb-0 mt-0 mb-0">{{ $processo->processo_representanteReu->rr_nome }}</td>
                    </tr>
                    @endif
                    <tr>
                        <td><strong>Advogado(s)</strong></td>
                        <td>
                            @if(count($processo->processo_advogado) > 0)
                            @foreach ($processo->processo_advogado as $advogado)
                            {{ $advogado->ad_estadoOAB }}{{ $advogado->ad_numeroOAB }} - {{ $advogado->ad_nome }}<br>
                            @endforeach
                            @endif
                            @if(count($processo->processo_defensor) > 0)
                            @foreach ($processo->processo_defensor as $defensor)
                            {{ $defensor->dp_matricula }} - {{ $defensor->dp_nome }} - DEFENSOR PÚBLICO<br>
                            @endforeach
                            @endif
                        </td>
                    </tr>
                </table>
                <p>Os autos processuais findos dos Juizados Especiais Cíveis serão eliminados após o prazo de 90 (noventa) dias da data do arquivamento definitivo.</p>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection
