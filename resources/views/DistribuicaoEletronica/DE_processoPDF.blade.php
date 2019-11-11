<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Processo - {{ $dadosProcesso->p_numeracaoProcesso }}</title>
</head>

<body style="font-size:12px;">
    <img style="width:250px;height:78px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBnASlDNpJXtKGMpEDCdHZN8KD-X_H7ZdU5fq1SSnX4cRHS4Q_&<s></s>">
    <hr style="background-color:black; height:1px; margin-top:5px; margin-bottom:5px;">
    <div>
        <h5 align="center" style="background-color: #cccccc"><strong>Número do Processo</strong></h5>
        <h4 align="center"><strong>{{ $dadosProcesso->p_numeracaoProcesso }}</strong></h4>
        <h5><strong>Núcleo de Prática Jurídica - UniFOA</strong></h5>
        <table class="m-0 p-0 table table-borderless table-sm">
            <tr>
                <td><strong>Data de Distribuição: {{ Carbon\Carbon::now('America/Sao_Paulo')->format('d/m/Y') }}</strong></td>
                <td><strong>Horário de Distribuição: {{ Carbon\Carbon::now('America/Sao_Paulo')->format('H:i') }}</strong></td>
            </tr>
            <tr>
                <td><strong>Distribuidor:</strong> {{ $dadosProcesso->p_distribuicao }}</td>
            </tr>
            <tr>
                <td><strong>Competência:</strong> {{ $dadosProcesso->p_competencia }}</td>
                <td><strong>Classe:</strong> {{ $dadosProcesso->p_classe }}</td>
            </tr>
            <tr>
                <td><strong>Valor da Causa:</strong> {{ $dadosProcesso->p_valor }}</td>
                <td><strong>Justiça Gratuita:</strong> {{ $dadosProcesso->p_grerjMotivo }}</td>
            </tr>
        </table>
    </div>
    <div>
        <h5 align="center" style="background-color: #cccccc"><strong>Advogado(s) / Representante</strong></h5>
        <table class="m-0 p-0 table table-borderless table-sm">
            @if(count($dadosProcesso->processo_advogado) > 0)
            @foreach($dadosProcesso->processo_advogado as $advogado)
            <tr>
                <td><strong>{{ $advogado->ad_estadoOAB }}{{ $advogado->ad_numeroOAB }}</strong> - {{ $advogado->ad_nome }}</td>
            </tr>
            @endforeach
            @endif
            @if(count($dadosProcesso->processo_defensor) > 0 )
            @foreach($dadosProcesso->processo_defensor as $defensor)
            <tr>
                <td><strong>{{ $defensor->dp_matricula }}</strong> - {{ $defensor->dp_nome }}</td>
            </tr>
            @endforeach
            @endif
        </table>
    </div>
    <div>
        <h5 align="center" style="background-color: #cccccc"><strong>Parte(s)</strong></h5>
        <table class="m-0 p-0 table table-borderless table-sm">
            @if($dadosProcesso->processo_reu->r_cpf !== null)
            <tr>
                <td>
                    <strong>Réu: {{ $dadosProcesso->processo_reu->r_nome }}</strong>,
                    Sexo: {{ $dadosProcesso->processo_reu->r_sexo }},
                    CPF: {{ $dadosProcesso->processo_reu->r_cpf }}
                    @if($dadosProcesso->processo_reu->r_email !== null),
                    E-mail: {{ $dadosProcesso->processo_reu->r_email }}
                    @endif <br>
                    Endereço: {{ $dadosProcesso->processo_reu->r_tipoLogradouro }} {{ $dadosProcesso->processo_reu->r_logradouro }},
                    nº {{ $dadosProcesso->processo_reu->r_numeroEndereco }}
                    @if($dadosProcesso->processo_reu->r_complemento !== null),
                    {{ $dadosProcesso->processo_reu->r_complemento }}
                    @endif,
                    {{ $dadosProcesso->processo_reu->r_cidade }},
                    Bairro: {{ $dadosProcesso->processo_reu->r_bairro }},
                    CEP: {{ $dadosProcesso->processo_reu->r_cep }}
                </td>
            </tr>
            @endif
            @if($dadosProcesso->processo_reuJuridico->rj_cnpj !== null)
            <tr>
                <td>
                    <strong>Réu: {{ $dadosProcesso->processo_reuJuridico->rj_nome }}</strong>,
                    CNPJ: {{ $dadosProcesso->processo_reuJuridico->rj_cnpj }} <br>
                    Endereço: {{ $dadosProcesso->processo_reuJuridico->rj_tipoLogradouro }} {{ $dadosProcesso->processo_reuJuridico->rj_logradouro }},
                    nº {{ $dadosProcesso->processo_reuJuridico->rj_numeroEndereco }}
                    @if($dadosProcesso->processo_reuJuridico->rj_complemento !== null),
                    {{ $dadosProcesso->processo_reuJuridico->rj_complemento }}
                    @endif,
                    {{ $dadosProcesso->processo_reuJuridico->rj_cidade }},
                    Bairro: {{ $dadosProcesso->processo_reuJuridico->rj_bairro }},
                    CEP: {{ $dadosProcesso->processo_reuJuridico->rj_cep }}
                </td>
            </tr>
            @endif
            @if($dadosProcesso->processo_representanteReu->rr_cpf !== null)
            <tr>
                <td>
                    <strong>Representante Legal: {{ $dadosProcesso->processo_representanteReu->rr_nome }}</strong>,
                    @if($dadosProcesso->processo_representanteReu->rr_sexo)
                    Sexo: {{ $dadosProcesso->processo_representanteReu->rr_sexo }},
                    @endif
                    CPF/CNPJ: {{ $dadosProcesso->processo_representanteReu->rr_cpf }},
                    @if($dadosProcesso->processo_representanteReu->rr_email !== null)
                    E-mail: {{ $dadosProcesso->processo_representanteReu->rr_email }}
                    @endif <br>
                    Endereço: {{ $dadosProcesso->processo_representanteReu->rr_tipoLogradouro }} {{ $dadosProcesso->processo_representanteReu->rr_logradouro }},
                    nº {{ $dadosProcesso->processo_representanteReu->rr_numeroEndereco }}
                    @if($dadosProcesso->processo_representanteReu->rr_complemento !== null),
                    {{ $dadosProcesso->processo_representanteReu->rr_complemento }}
                    @endif,
                    {{ $dadosProcesso->processo_representanteReu->rr_cidade }},
                    Bairro: {{ $dadosProcesso->processo_representanteReu->rr_bairro }},
                    CEP: {{ $dadosProcesso->processo_representanteReu->rr_cep }}
                </td>
            </tr>
            @endif
            @if($dadosProcesso->processo_autor->a_cpf !== null)
            <tr>
                <td>
                    <strong>Autor: {{ $dadosProcesso->processo_autor->a_nome }}</strong>,
                    @if($dadosProcesso->processo_autor->a_sexo !== null)
                    Sexo: {{ $dadosProcesso->processo_autor->a_sexo }},
                    @endif
                    CPF/CNPJ: {{ $dadosProcesso->processo_autor->a_cpf }},
                    Nacionalidade: {{ $dadosProcesso->processo_autor->a_nacionalidade }},
                    @if($dadosProcesso->processo_autor->a_email !== null)
                    E-mail: {{ $dadosProcesso->processo_autor->a_email }},
                    @endif
                    @if($dadosProcesso->processo_autor->a_nascimento !== null)
                    Data de Nascimento: {{ $dadosProcesso->processo_autor->a_nascimento }}
                    @endif <br>
                    Endereço: {{ $dadosProcesso->processo_autor->a_tipoLogradouro }} {{ $dadosProcesso->processo_autor->a_logradouro }},
                    nº {{ $dadosProcesso->processo_autor->a_numeroEndereco }},
                    @if($dadosProcesso->processo_autor->a_complemento !== null)
                    {{ $dadosProcesso->processo_autor->a_complemento }},
                    @endif
                    {{ $dadosProcesso->processo_autor->a_cidade }},
                    Bairro: {{ $dadosProcesso->processo_autor->a_bairro }},
                    CEP: {{ $dadosProcesso->processo_autor->a_cep }}
                </td>
            </tr>
            @endif
            @if($dadosProcesso->processo_representanteAutor->ra_cpf !== null)
            <tr>
                <td>
                    <strong>Representante Legal: {{ $dadosProcesso->processo_representanteAutor->ra_nome }}</strong>,
                    @if($dadosProcesso->processo_representanteAutor->ra_sexo !== null)
                    Sexo: {{ $dadosProcesso->processo_representanteAutor->ra_sexo }},
                    @endif
                    CPF/CNPJ: {{ $dadosProcesso->processo_representanteAutor->ra_cpf }},
                    Nacionalidade: {{ $dadosProcesso->processo_representanteAutor->ra_nacionalidade }},
                    @if($dadosProcesso->processo_representanteAutor->ra_email !== null)
                    E-mail: {{ $dadosProcesso->processo_representanteAutor->ra_email }},
                    @endif
                    @if($dadosProcesso->processo_representanteAutor->ra_nascimento !== null)
                    Data de Nascimento: {{ $dadosProcesso->processo_representanteAutor->ra_nascimento }}
                    @endif <br>
                    Endereço: {{ $dadosProcesso->processo_representanteAutor->ra_tipoLogradouro }} {{ $dadosProcesso->processo_representanteAutor->ra_logradouro }},
                    nº {{ $dadosProcesso->processo_representanteAutor->ra_numeroEndereco }},
                    @if($dadosProcesso->processo_representanteAutor->ra_complemento !== null)
                    {{ $dadosProcesso->processo_representanteAutor->ra_complemento }},
                    @endif
                    {{ $dadosProcesso->processo_representanteAutor->ra_cidade }},
                    Bairro: {{ $dadosProcesso->processo_representanteAutor->ra_bairro }},
                    CEP: {{ $dadosProcesso->processo_representanteAutor->ra_cep }}
                </td>
            </tr>
            @endif
        </table>
    </div>
    <div>
        <h5 align="center" style="background-color: #cccccc"><strong>Documento(s)</strong></h5>
        <table class="m-0 p-0 table table-borderless table-sm">
            @if(count($dadosProcesso->processo_documentoAnexoPeticao) > 0)
            @foreach($dadosProcesso->processo_documentoAnexoPeticao as $numero => $anexo)
            <tr>
                <td><strong>Anexo - {{ $numero + 1 }}: {{ $anexo->dap_arquivo }}</strong></td>
            </tr>
            @endforeach
            @endif
            @if($dadosProcesso->processo_documentoPeticaoInicial !== null)
            <tr>
                <td><strong>Petição Inicial: {{ $dadosProcesso->processo_documentoPeticaoInicial->dpi_arquivo }}</strong></td>
            </tr>
            @endif
            @if($dadosProcesso->processo_documentoProcuracao !== null)
            <tr>
                <td><strong>Procuração: {{ $dadosProcesso->processo_documentoProcuracao->dpr_arquivo }}</strong></td>
            </tr>
            @endif
            @if($dadosProcesso->processo_documentoComprovanteResidencia !== null)
            <tr>
                <td><strong>Comprovante de Residência: {{ $dadosProcesso->processo_documentoComprovanteResidencia->dcr_arquivo }}</strong></td>
            </tr>
            @endif
            @if($dadosProcesso->processo_documentoCpf !== null)
            <tr>
                <td><strong>CPF: {{ $dadosProcesso->processo_documentoCpf->dcpf_arquivo }}</strong></td>
            </tr>
            @endif
        </table>
    </div>
    <hr style="background-color:black; height:1px; margin-top:5px; margin-bottom:5px;">
</body>

</html>
