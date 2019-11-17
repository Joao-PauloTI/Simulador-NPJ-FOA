<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Processo - {{ $processo->p_numeracaoProcesso }}</title>
</head>

<body style="font-size:12px;">
    <img style="width:250px;height:78px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBnASlDNpJXtKGMpEDCdHZN8KD-X_H7ZdU5fq1SSnX4cRHS4Q_&<s></s>">
    <hr style="background-color:black; height:1px; margin-top:5px; margin-bottom:5px;">
    <div>
        <h5 align="center" style="background-color: #cccccc"><strong>Número do Processo</strong></h5>
        <h4 align="center"><strong>{{ $processo->p_numeracaoProcesso }}</strong></h4>
        <h5><strong>Núcleo de Prática Jurídica - UniFOA</strong></h5>
        <table class="m-0 p-0 table table-borderless table-sm">
            <tr>
                <td><strong>Data de Distribuição: {{ Carbon\Carbon::now('America/Sao_Paulo')->format('d/m/Y') }}</strong></td>
                <td><strong>Horário de Distribuição: {{ Carbon\Carbon::now('America/Sao_Paulo')->format('H:i') }}</strong></td>
            </tr>
            <tr>
                <td><strong>Distribuidor:</strong> {{ $processo->p_distribuicao }}</td>
            </tr>
            <tr>
                <td><strong>Competência:</strong> {{ $processo->p_competencia }}</td>
                <td><strong>Classe:</strong> {{ $processo->p_classe }}</td>
            </tr>
            <tr>
                <td><strong>Valor da Causa:</strong> {{ $processo->p_valor }}</td>
                <td><strong>Justiça Gratuita:</strong> {{ $processo->p_grerjMotivo }}</td>
            </tr>
        </table>
    </div>
    <div>
        <h5 align="center" style="background-color: #cccccc"><strong>Advogado(s) / Representante</strong></h5>
        <table class="m-0 p-0 table table-borderless table-sm">
            @if(count($processo->processo_advogado) > 0)
            @foreach($processo->processo_advogado as $advogado)
            <tr>
                <td><strong>{{ $advogado->ad_estadoOAB }}{{ $advogado->ad_numeroOAB }}</strong> - {{ $advogado->ad_nome }}</td>
            </tr>
            @endforeach
            @endif
            @if(count($processo->processo_defensor) > 0 )
            @foreach($processo->processo_defensor as $defensor)
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
            @if($processo->processo_reu)
            <tr>
                <td>
                    <strong>Réu: {{ $processo->processo_reu->r_nome }}</strong>,
                    Sexo: {{ $processo->processo_reu->r_sexo }},
                    CPF: {{ $processo->processo_reu->r_cpf }}
                    @if($processo->processo_reu->r_email !== null),
                    E-mail: {{ $processo->processo_reu->r_email }}
                    @endif <br>
                    Endereço: {{ $processo->processo_reu->r_tipoLogradouro }} {{ $processo->processo_reu->r_logradouro }},
                    nº {{ $processo->processo_reu->r_numeroEndereco }}
                    @if($processo->processo_reu->r_complemento !== null),
                    {{ $processo->processo_reu->r_complemento }}
                    @endif,
                    {{ $processo->processo_reu->r_cidade }},
                    Bairro: {{ $processo->processo_reu->r_bairro }},
                    CEP: {{ $processo->processo_reu->r_cep }}
                </td>
            </tr>
            @endif
            @if($processo->processo_reuJuridico)
            <tr>
                <td>
                    <strong>Réu: {{ $processo->processo_reuJuridico->rj_nome }}</strong>,
                    CNPJ: {{ $processo->processo_reuJuridico->rj_cnpj }} <br>
                    Endereço: {{ $processo->processo_reuJuridico->rj_tipoLogradouro }} {{ $processo->processo_reuJuridico->rj_logradouro }},
                    nº {{ $processo->processo_reuJuridico->rj_numeroEndereco }}
                    @if($processo->processo_reuJuridico->rj_complemento !== null),
                    {{ $processo->processo_reuJuridico->rj_complemento }}
                    @endif,
                    {{ $processo->processo_reuJuridico->rj_cidade }},
                    Bairro: {{ $processo->processo_reuJuridico->rj_bairro }},
                    CEP: {{ $processo->processo_reuJuridico->rj_cep }}
                </td>
            </tr>
            @endif
            @if($processo->processo_representanteReu)
            <tr>
                <td>
                    <strong>Representante Legal: {{ $processo->processo_representanteReu->rr_nome }}</strong>,
                    @if($processo->processo_representanteReu->rr_sexo)
                    Sexo: {{ $processo->processo_representanteReu->rr_sexo }},
                    @endif
                    CPF/CNPJ: {{ $processo->processo_representanteReu->rr_cpf }},
                    @if($processo->processo_representanteReu->rr_email !== null)
                    E-mail: {{ $processo->processo_representanteReu->rr_email }}
                    @endif <br>
                    Endereço: {{ $processo->processo_representanteReu->rr_tipoLogradouro }} {{ $processo->processo_representanteReu->rr_logradouro }},
                    nº {{ $processo->processo_representanteReu->rr_numeroEndereco }}
                    @if($processo->processo_representanteReu->rr_complemento !== null),
                    {{ $processo->processo_representanteReu->rr_complemento }}
                    @endif,
                    {{ $processo->processo_representanteReu->rr_cidade }},
                    Bairro: {{ $processo->processo_representanteReu->rr_bairro }},
                    CEP: {{ $processo->processo_representanteReu->rr_cep }}
                </td>
            </tr>
            @endif
            <tr>
                <td>
                    <strong>Autor: {{ $processo->processo_autor->a_nome }}</strong>,
                    @if($processo->processo_autor->a_sexo !== null)
                    Sexo: {{ $processo->processo_autor->a_sexo }},
                    @endif
                    CPF/CNPJ: {{ $processo->processo_autor->a_cpf }},
                    Nacionalidade: {{ $processo->processo_autor->a_nacionalidade }},
                    @if($processo->processo_autor->a_email !== null)
                    E-mail: {{ $processo->processo_autor->a_email }},
                    @endif
                    @if($processo->processo_autor->a_nascimento !== null)
                    Data de Nascimento: {{ $processo->processo_autor->a_nascimento }}
                    @endif <br>
                    Endereço: {{ $processo->processo_autor->a_tipoLogradouro }} {{ $processo->processo_autor->a_logradouro }},
                    nº {{ $processo->processo_autor->a_numeroEndereco }},
                    @if($processo->processo_autor->a_complemento !== null)
                    {{ $processo->processo_autor->a_complemento }},
                    @endif
                    {{ $processo->processo_autor->a_cidade }},
                    Bairro: {{ $processo->processo_autor->a_bairro }},
                    CEP: {{ $processo->processo_autor->a_cep }}
                </td>
            </tr>
            @if($processo->processo_representanteAutor)
            <tr>
                <td>
                    <strong>Representante Legal: {{ $processo->processo_representanteAutor->ra_nome }}</strong>,
                    @if($processo->processo_representanteAutor->ra_sexo !== null)
                    Sexo: {{ $processo->processo_representanteAutor->ra_sexo }},
                    @endif
                    CPF/CNPJ: {{ $processo->processo_representanteAutor->ra_cpf }},
                    Nacionalidade: {{ $processo->processo_representanteAutor->ra_nacionalidade }},
                    @if($processo->processo_representanteAutor->ra_email !== null)
                    E-mail: {{ $processo->processo_representanteAutor->ra_email }},
                    @endif
                    @if($processo->processo_representanteAutor->ra_nascimento !== null)
                    Data de Nascimento: {{ $processo->processo_representanteAutor->ra_nascimento }}
                    @endif <br>
                    Endereço: {{ $processo->processo_representanteAutor->ra_tipoLogradouro }} {{ $processo->processo_representanteAutor->ra_logradouro }},
                    nº {{ $processo->processo_representanteAutor->ra_numeroEndereco }},
                    @if($processo->processo_representanteAutor->ra_complemento !== null)
                    {{ $processo->processo_representanteAutor->ra_complemento }},
                    @endif
                    {{ $processo->processo_representanteAutor->ra_cidade }},
                    Bairro: {{ $processo->processo_representanteAutor->ra_bairro }},
                    CEP: {{ $processo->processo_representanteAutor->ra_cep }}
                </td>
            </tr>
            @endif
        </table>
    </div>
    <div>
        <h5 align="center" style="background-color: #cccccc"><strong>Documento(s)</strong></h5>
        <table class="m-0 p-0 table table-borderless table-sm">
            @if(count($processo->processo_documentoAnexoPeticao) > 0)
            @foreach($processo->processo_documentoAnexoPeticao as $numero => $anexo)
            <tr>
                <td><strong>Anexo - {{ $numero + 1 }}: {{ $anexo->dap_arquivo }}</strong></td>
            </tr>
            @endforeach
            @endif
            @if($processo->processo_documentoPeticaoInicial)
            <tr>
                <td><strong>Petição Inicial: {{ $processo->processo_documentoPeticaoInicial->dpi_arquivo }}</strong></td>
            </tr>
            @endif
            @if($processo->processo_documentoProcuracao)
            <tr>
                <td><strong>Procuração: {{ $processo->processo_documentoProcuracao->dpr_arquivo }}</strong></td>
            </tr>
            @endif
            @if($processo->processo_documentoComprovanteResidencia)
            <tr>
                <td><strong>Comprovante de Residência: {{ $processo->processo_documentoComprovanteResidencia->dcr_arquivo }}</strong></td>
            </tr>
            @endif
            @if($processo->processo_documentoCpf)
            <tr>
                <td><strong>CPF: {{ $processo->processo_documentoCpf->dcpf_arquivo }}</strong></td>
            </tr>
            @endif
        </table>
    </div>
    <hr style="background-color:black; height:1px; margin-top:5px; margin-bottom:5px;">
</body>

</html>
