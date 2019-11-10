<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Processo - {{ Session::get('sessaoProcesso.p_numeracaoProcesso') }}</title>
</head>
<body style="font-size:12px;">
    <img style="width:250px;height:78px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBnASlDNpJXtKGMpEDCdHZN8KD-X_H7ZdU5fq1SSnX4cRHS4Q_&<s></s>">
    <hr style="background-color:black; height:1px; margin-top:5px; margin-bottom:5px;">
    <div>
        <h5 align="center" style="background-color: #cccccc"><strong>Número do Processo</strong></h5>
        <h4 align="center"><strong>{{ Session::get('sessaoProcesso.p_numeracaoProcesso') }}</strong></h4>
        <h5><strong>Núcleo de Prática Jurídica - UniFOA</strong></h5>
        <table class="m-0 p-0 table table-borderless table-sm">
            <tr>
                <td><strong>Data de Distribuição: {{ Carbon\Carbon::now('America/Sao_Paulo')->format('d/m/Y') }}</strong></td>
                <td><strong>Horário de Distribuição: {{ Carbon\Carbon::now('America/Sao_Paulo')->format('H:i') }}</strong></td>
            </tr>
            <tr>
                <td><strong>Distribuidor:</strong> {{ Session::get('sessaoProcesso.p_distribuicao') }}</td>
            </tr>
            <tr>
                <td><strong>Competência:</strong> {{ Session::get('sessaoProcesso.p_competencia') }}</td>
                <td><strong>Classe:</strong> {{ Session::get('sessaoProcesso.p_classe') }}</td>
            </tr>
            <tr>
                <td><strong>Valor da Causa:</strong> {{ Session::get('sessaoProcesso.p_valor') }}</td>
                <td><strong>Justiça Gratuita:</strong> {{ Session::get('sessaoProcesso.p_grerjMotivo') }}</td>
            </tr>
        </table>
    </div>
    <div>
        <h5 align="center" style="background-color: #cccccc"><strong>Advogado(s) / Representante</strong></h5>
        <table class="m-0 p-0 table table-borderless table-sm">
            @if(Session::get('sessaoAdvogados.ad_numeroOAB') !== null)
                @foreach(Session::get('sessaoAdvogados.ad_numeroOAB') as $key => $numero)
                    <tr>
                        <td><strong>{{ Session::get('sessaoAdvogados.ad_estadoOAB')[$key] }}{{ $numero }}</strong> - {{ Session::get('sessaoAdvogados.ad_nome')[$key] }}</td>
                    </tr>
                @endforeach
            @endif
            @if(Session::get('sessaoDefensores.dp_matricula') !== null)
                @foreach(Session::get('sessaoDefensores.dp_matricula') as $key => $matricula)
                    <tr>
                        <td><strong>{{ $matricula }}</strong> - {{ Session::get('sessaoDefensores.dp_nome')[$key] }}</td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>
    <div>
        <h5 align="center" style="background-color: #cccccc"><strong>Parte(s)</strong></h5>
        <table class="m-0 p-0 table table-borderless table-sm">
            @if(Session::get('sessaoReu.r_cpf') !== null)
                <tr>
                    <td>
                        <strong>Réu: {{ Session::get('sessaoReu.r_nome') }}</strong>,
                        Sexo: {{ Session::get('sessaoReu.r_sexo') }},
                        CPF: {{ Session::get('sessaoReu.r_cpf') }}
                        @if(Session::get('sessaoReu.r_email') !== null),
                        E-mail: {{ Session::get('sessaoReu.r_email') }} 
                        @endif <br> 
                        Endereço: {{ Session::get('sessaoReu.r_tipoLogradouro') }} {{ Session::get('sessaoReu.r_logradouro') }},
                        nº {{ Session::get('sessaoReu.r_numeroEndereco') }}
                        @if(Session::get('sessaoReu.r_complemento') !== null),
                        {{ Session::get('sessaoReu.r_complemento') }}
                        @endif,
                        {{ Session::get('sessaoReu.r_cidade') }},
                        Bairro: {{ Session::get('sessaoReu.r_bairro') }},
                        CEP: {{ Session::get('sessaoReu.r_cep') }}
                    </td>
                </tr>
            @endif
            @if(Session::get('sessaoReuJuridico.rj_cnpj') !== null)
                <tr>
                    <td>
                        <strong>Réu: {{ Session::get('sessaoReuJuridico.rj_nome') }}</strong>,
                        CNPJ: {{ Session::get('sessaoReuJuridico.rj_cnpj') }} <br> 
                        Endereço: {{ Session::get('sessaoReuJuridico.rj_tipoLogradouro') }} {{ Session::get('sessaoReuJuridico.rj_logradouro') }},
                        nº {{ Session::get('sessaoReuJuridico.rj_numeroEndereco') }}
                        @if(Session::get('sessaoReuJuridico.rj_complemento') !== null),
                        {{ Session::get('sessaoReuJuridico.rj_complemento') }}
                        @endif,
                        {{ Session::get('sessaoReuJuridico.rj_cidade') }},
                        Bairro: {{ Session::get('sessaoReuJuridico.rj_bairro') }},
                        CEP: {{ Session::get('sessaoReuJuridico.rj_cep') }}
                    </td>
                </tr>
            @endif
            @if(Session::get('sessaoRepresentanteReu.rr_cpf') !== null)
                <tr>
                    <td>
                        <strong>Representante Legal: {{ Session::get('sessaoRepresentanteReu.rr_nome') }}</strong>,
                        @if(Session::get('sessaoRepresentanteReu.rr_sexo'))
                        Sexo: {{ Session::get('sessaoRepresentanteReu.rr_sexo') }},
                        @endif
                        CPF/CNPJ: {{ Session::get('sessaoRepresentanteReu.rr_cpf') }},
                        @if(Session::get('sessaoRepresentanteReu.rr_email') !== null)
                        E-mail: {{ Session::get('sessaoRepresentanteReu.rr_email') }}
                        @endif <br> 
                        Endereço: {{ Session::get('sessaoRepresentanteReu.rr_tipoLogradouro') }} {{ Session::get('sessaoRepresentanteReu.rr_logradouro') }},
                        nº {{ Session::get('sessaoRepresentanteReu.rr_numeroEndereco') }}
                        @if(Session::get('sessaoRepresentanteReu.rr_complemento') !== null),
                        {{ Session::get('sessaoRepresentanteReu.rr_complemento') }}
                        @endif,
                        {{ Session::get('sessaoRepresentanteReu.rr_cidade') }},
                        Bairro: {{ Session::get('sessaoRepresentanteReu.rr_bairro') }},
                        CEP: {{ Session::get('sessaoRepresentanteReu.rr_cep') }}
                    </td>
                </tr>
            @endif
            @if(Session::get('sessaoAutor.a_cpf') !== null)
                <tr>
                    <td>
                        <strong>Autor: {{ Session::get('sessaoAutor.a_nome') }}</strong>,
                        @if(Session::get('sessaoAutor.a_sexo') !== null)
                        Sexo: {{ Session::get('sessaoAutor.a_sexo') }},
                        @endif
                        CPF/CNPJ: {{ Session::get('sessaoAutor.a_cpf') }},
                        Nacionalidade: {{ Session::get('sessaoAutor.a_nacionalidade') }},
                        @if(Session::get('sessaoAutor.a_email') !== null)
                        E-mail: {{ Session::get('sessaoAutor.a_email') }},
                        @endif
                        @if(Session::get('sessaoAutor.a_nascimento') !== null)
                        Data de Nascimento: {{ Session::get('sessaoAutor.a_nascimento') }} 
                        @endif <br> 
                        Endereço: {{ Session::get('sessaoAutor.a_tipoLogradouro') }} {{ Session::get('sessaoAutor.a_logradouro') }},
                        nº {{ Session::get('sessaoAutor.a_numeroEndereco') }},
                        @if(Session::get('sessaoAutor.a_complemento') !== null)
                        {{ Session::get('sessaoAutor.a_complemento') }},
                        @endif
                        {{ Session::get('sessaoAutor.a_cidade') }},
                        Bairro: {{ Session::get('sessaoAutor.a_bairro') }},
                        CEP: {{ Session::get('sessaoAutor.a_cep') }}
                    </td>
                </tr>
            @endif
            @if(Session::get('sessaoRepresentanteAutor.ra_cpf') !== null)
                <tr>
                    <td>
                        <strong>Representante Legal: {{ Session::get('sessaoRepresentanteAutor.ra_nome') }}</strong>,
                        @if(Session::get('sessaoRepresentanteAutor.ra_sexo') !== null)
                        Sexo: {{ Session::get('sessaoRepresentanteAutor.ra_sexo') }},
                        @endif
                        CPF/CNPJ: {{ Session::get('sessaoRepresentanteAutor.ra_cpf') }},
                        Nacionalidade: {{ Session::get('sessaoRepresentanteAutor.ra_nacionalidade') }},
                        @if(Session::get('sessaoRepresentanteAutor.ra_email') !== null)
                        E-mail: {{ Session::get('sessaoRepresentanteAutor.ra_email') }},
                        @endif
                        @if(Session::get('sessaoRepresentanteAutor.ra_nascimento') !== null)
                        Data de Nascimento: {{ Session::get('sessaoRepresentanteAutor.ra_nascimento') }} 
                        @endif <br> 
                        Endereço: {{ Session::get('sessaoRepresentanteAutor.ra_tipoLogradouro') }} {{ Session::get('sessaoRepresentanteAutor.ra_logradouro') }},
                        nº {{ Session::get('sessaoRepresentanteAutor.ra_numeroEndereco') }},
                        @if(Session::get('sessaoRepresentanteAutor.ra_complemento') !== null)
                        {{ Session::get('sessaoRepresentanteAutor.ra_complemento') }},
                        @endif
                        {{ Session::get('sessaoRepresentanteAutor.ra_cidade') }},
                        Bairro: {{ Session::get('sessaoRepresentanteAutor.ra_bairro') }},
                        CEP: {{ Session::get('sessaoRepresentanteAutor.ra_cep') }}
                    </td>
                </tr>
            @endif
        </table>
    </div>
    <div>
        <h5 align="center" style="background-color: #cccccc"><strong>Documento(s)</strong></h5>
        <table class="m-0 p-0 table table-borderless table-sm">
            @if(is_array(Session::get('sessaoDocumentoAnexoPeticao')))
                @foreach(Session::get('sessaoDocumentoAnexoPeticao') as $key => $arquivo)
                    @foreach($arquivo as $atributo => $valor)
                        @if($atributo === 'dap_arquivo')
                            <tr>
                                <td><strong>Anexo - {{ $key + 1 }}: {{ $valor }}</strong></td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
            @endif
            @if(Session::get('sessaoDocumentoPeticaoInicial.dpi_arquivo') !== null)
                <tr>
                    <td><strong>Petição Inicial: {{ Session::get('sessaoDocumentoPeticaoInicial.dpi_arquivo') }}</strong></td>
                </tr>
            @endif
            @if(Session::get('sessaoDocumentoProcuracao.dpr_arquivo') !== null)
                <tr>
                    <td><strong>Procuração: {{ Session::get('sessaoDocumentoProcuracao.dpr_arquivo') }}</strong></td>
                </tr>
            @endif
            @if(Session::get('sessaoDocumentoComprovanteResidencia.dcr_arquivo') !== null)
                <tr>
                    <td><strong>Comprovante de Residência: {{ Session::get('sessaoDocumentoComprovanteResidencia.dcr_arquivo') }}</strong></td>
                </tr>
            @endif
            @if(Session::get('sessaoDocumentoCpf.dcpf_arquivo') !== null)
                <tr>
                    <td><strong>CPF: {{ Session::get('sessaoDocumentoCpf.dcpf_arquivo') }}</strong></td>
                </tr>
            @endif
        </table>
    </div>
    <hr style="background-color:black; height:1px; margin-top:5px; margin-bottom:5px;">
</body>
</html>