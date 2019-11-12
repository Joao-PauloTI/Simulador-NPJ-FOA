<?php

namespace App\Http\Controllers;

use App\Processo;
use App\Advogado;
use App\Defensor;
use App\Autor;
use App\RepresentanteAutor;
use App\Reu;
use App\ReuJuridico;
use App\RepresentanteReu;
use App\DocumentoAnexoPeticao;
use App\DocumentoComprovanteResidencia;
use App\DocumentoCpf;
use App\DocumentoPeticaoInicial;
use App\DocumentoProcuracao;

use Illuminate\Http\Request;
use PDF;

class ProcessoController extends Controller
{
    public function confirmar(Request $request)
    {
        $request->validate([
            //Distribuição Eletronica
            'p_grerjMotivo' => 'nullable',
            'p_grerjNumero' => 'nullable',
            'p_dependencia' => 'nullable',
            'p_prioridadeDeficiente' => 'nullable',
            'p_tutela' => 'nullable',
            'p_prioridadePortador' => 'nullable',
            'p_gratuidade' => 'nullable',
            'p_exame' => 'nullable',
            'p_comarca' => 'nullable',
            'p_competencia' => 'nullable',
            'p_conciliacao' => 'nullable',
            'p_classe' => 'nullable',
            'p_distribuicao' => 'nullable',
            'p_valor' => 'nullable',
            'p_veracidade' => 'nullable',
            //Advogado
            'ad_categoria' => 'nullable',
            'ad_nome' => 'nullable',
            'ad_estadoOAB' => 'nullable',
            'ad_numeroOAB' => 'nullable',
            'ad_representa' => 'nullable',
            'ad_intimacao' => 'nullable',
            //Defensor
            'dp_categoria' => 'nullable',
            'dp_nome' => 'nullable',
            'dp_matricula' => 'nullable',
            'dp_representa' => 'nullable',
            'dp_intimacao' => 'nullable',
            //Autor
            'a_incapaz' => 'nullable',
            'a_massa' => 'nullable',
            'a_insolvente' => 'nullable',
            'a_preso' => 'nullable',
            'a_espolio' => 'nullable',
            'a_condominio' => 'nullable',
            'a_ministerio' => 'nullable',
            'a_pessoa' => 'nullable',
            'a_estrangeiro' => 'nullable',
            'a_sexo' => 'nullable',
            'a_cpf' => 'nullable',
            'a_nome' => 'nullable',
            'a_menor' => 'nullable',
            'a_documento' => 'nullable',
            'a_numeroIdentificacao' => 'nullable',
            'a_expedidor' => 'nullable',
            'a_emissao' => 'nullable',
            'a_telefone' => 'nullable',
            'a_email' => 'nullable',
            'a_cep' => 'nullable',
            'a_estado' => 'nullable',
            'a_cidade' => 'nullable',
            'a_bairro' => 'nullable',
            'a_tipoLogradouro' => 'nullable',
            'a_logradouro' => 'nullable',
            'a_numeroEndereco' => 'nullable',
            'a_complemento' => 'nullable',
            'a_tipoEndereco' => 'nullable',
            'a_referencia' => 'nullable',
            'a_comprovante' => 'nullable',
            'a_valorPedido' => 'nullable',
            'a_valorLiquido' => 'nullable',
            'a_valorCausa' => 'nullable',
            'a_pretensao' => 'nullable',
            'a_estadoCivil' => 'nullable',
            'a_profissao' => 'nullable',
            'a_nacionalidade' => 'nullable',
            'a_estadoNaturalidade' => 'nullable',
            'a_cidadeNaturalidade' => 'nullable',
            'a_pai' => 'nullable',
            'a_mae' => 'nullable',
            'a_nascimento' => 'nullable',
            //Representante do Autor
            'ra_incapaz' => 'nullable',
            'ra_massa' => 'nullable',
            'ra_insolvente' => 'nullable',
            'ra_preso' => 'nullable',
            'ra_espolio' => 'nullable',
            'ra_condominio' => 'nullable',
            'ra_parte' => 'nullable',
            'ra_ministerio' => 'nullable',
            'ra_pessoa' => 'nullable',
            'ra_sexo' => 'nullable',
            'ra_cpf' => 'nullable',
            'ra_nome' => 'nullable',
            'ra_documento' => 'nullable',
            'ra_numeroIdentificacao' => 'nullable',
            'ra_emissor' => 'nullable',
            'ra_emissao' => 'nullable',
            'ra_telefone' => 'nullable',
            'ra_email' => 'nullable',
            'ra_cep' => 'nullable',
            'ra_estado' => 'nullable',
            'ra_cidade' => 'nullable',
            'ra_bairro' => 'nullable',
            'ra_tipoLogradouro' => 'nullable',
            'ra_logradouro' => 'nullable',
            'ra_numeroEndereco' => 'nullable',
            'ra_complemento' => 'nullable',
            'ra_tipoEndereco' => 'nullable',
            'ra_referencia' => 'nullable',
            'ra_comprovante' => 'nullable',
            'ra_estadoCivil' => 'nullable',
            'ra_profissao' => 'nullable',
            'ra_nacionalidade' => 'nullable',
            'ra_estadoNaturalidade' => 'nullable',
            'ra_cidadeNaturalidade' => 'nullable',
            'ra_pai' => 'nullable',
            'ra_mae' => 'nullable',
            'ra_nascimento' => 'nullable',
            //Reu
            'r_estrangeiro' => 'nullable',
            'r_sexo' => 'nullable',
            'r_cpf' => 'nullable',
            'r_nome' => 'nullable',
            'r_documento' => 'nullable',
            'r_numeroIdentificacao' => 'nullable',
            'r_expedidor' => 'nullable',
            'r_emissao' => 'nullable',
            'r_email' => 'nullable',
            'r_incerto' => 'nullable',
            'r_cep' => 'nullable',
            'r_estado' => 'nullable',
            'r_cidade' => 'nullable',
            'r_bairro' => 'nullable',
            'r_tipoLogradouro' => 'nullable',
            'r_logradouro' => 'nullable',
            'r_numeroEndereco' => 'nullable',
            'r_complemento' => 'nullable',
            'r_tipoEndereco' => 'nullable',
            'r_referencia' => 'nullable',
            'r_comprovante' => 'nullable',
            //Réu - Pessoa Jurídica
            'rj_nome' => 'nullable',
            'rj_cnpj' => 'nullable',
            'rj_tipoEmpresa' => 'nullable',
            'rj_cep' => 'nullable',
            'rj_estado' => 'nullable',
            'rj_cidade' => 'nullable',
            'rj_bairro' => 'nullable',
            'rj_tipoLogradouro' => 'nullable',
            'rj_logradouro' => 'nullable',
            'rj_numeroEndereco' => 'nullable',
            'rj_complemento' => 'nullable',
            'rj_tipoEndereco' => 'nullable',
            'rj_referencia' => 'nullable',
            //Representante do Réu
            'rr_parte' => 'nullable',
            'rr_pessoa' => 'nullable',
            'rr_sexo' => 'nullable',
            'rr_cpf' => 'nullable',
            'rr_nome' => 'nullable',
            'rr_documento' => 'nullable',
            'rr_numeroIdentificacao' => 'nullable',
            'rr_emissor' => 'nullable',
            'rr_emissao' => 'nullable',
            'rr_telefone' => 'nullable',
            'rr_email' => 'nullable',
            'rr_incerto' => 'nullable',
            'rr_cep' => 'nullable',
            'rr_estado' => 'nullable',
            'rr_cidade' => 'nullable',
            'rr_bairro' => 'nullable',
            'rr_tipoLogradouro' => 'nullable',
            'rr_logradouro' => 'nullable',
            'rr_numeroEndereco' => 'nullable',
            'rr_complemento' => 'nullable',
            'rr_tipoEndereco' => 'nullable',
            'rr_referencia' => 'nullable',
            'rr_comprovante' => 'nullable',
            //Anexo da petição
            'dap_arquivo' => 'nullable',
            'dap_descricao' => 'nullable',
            //Comprovante de Residencia
            'dcr_arquivo' => 'nullable',
            'dcr_descricao' => 'nullable',
            //CPF
            'dcpf_arquivo' => 'nullable',
            'dcpf_descricao' => 'nullable',
            //Petição Inicial
            'dpi_arquivo' => 'nullable',
            'dpi_descricao' => 'nullable',
            //Procuração
            'dpr_arquivo' => 'nullable',
            'dpr_descricao' => 'nullable',
        ]);

        $request->session()->put('sessaoProcesso', [
            'p_numeracaoProcesso' => mt_rand(0000000, 9999999)."-".mt_rand(00, 99).".".date("Y").".8.19.0066",
            'p_grerjMotivo' => $request->get('p_grerjMotivo'),
            'p_grerjNumero' => $request->get('p_grerjNumero'),
            'p_dependencia' => $request->get('p_dependencia'),
            'p_prioridadeDeficiente' => $request->get('p_prioridadeDeficiente'),
            'p_tutela' => $request->get('p_tutela'),
            'p_prioridadePortador' => $request->get('p_prioridadePortador'),
            'p_gratuidade' => $request->get('p_gratuidade'),
            'p_exame' => $request->get('p_exame'),
            'p_comarca' => $request->get('p_comarca'),
            'p_competencia' => $request->get('p_competencia'),
            'p_conciliacao' => $request->get('p_conciliacao'),
            'p_classe' => $request->get('p_classe'),
            'p_distribuicao' => $request->get('p_distribuicao'),
            'p_valor' => $request->get('p_valor'),
            'p_veracidade' => $request->get('p_veracidade')
        ]);

        $request->session()->put('sessaoAdvogados', [
            'ad_numeroOAB' => $request->ad_numeroOAB,
            'ad_categoria' => $request->ad_categoria,
            'ad_nome' => $request->ad_nome,
            'ad_estadoOAB' => $request->ad_estadoOAB,
            'ad_representa' => $request->ad_representa,
            'ad_intimacao' => $request->ad_intimacao
        ]);

        $request->session()->put('sessaoDefensores', [
            'dp_matricula' => $request->dp_matricula,
            'dp_categoria' => $request->dp_categoria,
            'dp_nome' => $request->dp_nome,
            'dp_representa' => $request->dp_representa,
            'dp_intimacao' => $request->dp_intimacao
        ]);

        $request->session()->put('sessaoAutor', [
            'a_incapaz' => $request->get('a_incapaz'),
            'a_massa' => $request->get('a_massa'),
            'a_insolvente' => $request->get('a_insolvente'),
            'a_preso' => $request->get('a_preso'),
            'a_espolio' => $request->get('a_espolio'),
            'a_condominio' => $request->get('a_condominio'),
            'a_ministerio' => $request->get('a_ministerio'),
            'a_pessoa' => $request->get('a_pessoa'),
            'a_estrangeiro' => $request->get('a_estrangeiro'),
            'a_sexo' => $request->get('a_sexo'),
            'a_cpf' => $request->get('a_cpf'),
            'a_nome' => $request->get('a_nome'),
            'a_menor' => $request->get('a_menor'),
            'a_documento' => $request->get('a_documento'),
            'a_numeroIdentificacao' => $request->get('a_numeroIdentificacao'),
            'a_expedidor' => $request->get('a_expedidor'),
            'a_emissao' => $request->get('a_emissao'),
            'a_telefone' => $request->get('a_telefone'),
            'a_email' => $request->get('a_email'),
            'a_cep' => $request->get('a_cep'),
            'a_estado' => $request->get('a_estado'),
            'a_cidade' => $request->get('a_cidade'),
            'a_bairro' => $request->get('a_bairro'),
            'a_tipoLogradouro' => $request->get('a_tipoLogradouro'),
            'a_logradouro' => $request->get('a_logradouro'),
            'a_numeroEndereco' => $request->get('a_numeroEndereco'),
            'a_complemento' => $request->get('a_complemento'),
            'a_tipoEndereco' => $request->get('a_tipoEndereco'),
            'a_referencia' => $request->get('a_referencia'),
            'a_comprovante' => $request->get('a_comprovante'),
            'a_valorPedido' => $request->get('a_valorPedido'),
            'a_valorLiquido' => $request->get('a_valorLiquido'),
            'a_valorCausa' => $request->get('a_valorCausa'),
            'a_pretensao' => $request->get('a_pretensao'),
            'a_estadoCivil' => $request->get('a_estadoCivil'),
            'a_profissao' => $request->get('a_profissao'),
            'a_nacionalidade' => $request->get('a_nacionalidade'),
            'a_estadoNaturalidade' => $request->get('a_estadoNaturalidade'),
            'a_cidadeNaturalidade' => $request->get('a_cidadeNaturalidade'),
            'a_pai' => $request->get('a_pai'),
            'a_mae' => $request->get('a_mae'),
            'a_nascimento' => $request->get('a_nascimento')
        ]);

        $request->session()->put('sessaoRepresentanteAutor', [
            'ra_incapaz' => $request->get('ra_incapaz'),
            'ra_massa' => $request->get('ra_massa'),
            'ra_insolvente' => $request->get('ra_insolvente'),
            'ra_preso' => $request->get('ra_preso'),
            'ra_espolio' => $request->get('ra_espolio'),
            'ra_condominio' => $request->get('ra_condominio'),
            'ra_parte' => $request->get('ra_parte'),
            'ra_ministerio' => $request->get('ra_ministerio'),
            'ra_pessoa' => $request->get('ra_pessoa'),
            'ra_estrangeiro' => $request->get('ra_estrangeiro'),
            'ra_sexo' => $request->get('ra_sexo'),
            'ra_cpf' => $request->get('ra_cpf'),
            'ra_nome' => $request->get('ra_nome'),
            'ra_documento' => $request->get('ra_documento'),
            'ra_numeroIdentificacao' => $request->get('ra_numeroIdentificacao'),
            'ra_emissor' => $request->get('ra_emissor'),
            'ra_emissao' => $request->get('ra_emissao'),
            'ra_telefone' => $request->get('ra_telefone'),
            'ra_email' => $request->get('ra_email'),
            'ra_cep' => $request->get('ra_cep'),
            'ra_estado' => $request->get('ra_estado'),
            'ra_cidade' => $request->get('ra_cidade'),
            'ra_bairro' => $request->get('ra_bairro'),
            'ra_tipoLogradouro' => $request->get('ra_tipoLogradouro'),
            'ra_logradouro' => $request->get('ra_logradouro'),
            'ra_numeroEndereco' => $request->get('ra_numeroEndereco'),
            'ra_complemento' => $request->get('ra_complemento'),
            'ra_tipoEndereco' => $request->get('ra_tipoEndereco'),
            'ra_referencia' => $request->get('ra_referencia'),
            'ra_comprovante' => $request->get('ra_comprovante'),
            'ra_estadoCivil' => $request->get('ra_estadoCivil'),
            'ra_profissao' => $request->get('ra_profissao'),
            'ra_nacionalidade' => $request->get('ra_nacionalidade'),
            'ra_estadoNaturalidade' => $request->get('ra_estadoNaturalidade'),
            'ra_cidadeNaturalidade' => $request->get('ra_cidadeNaturalidade'),
            'ra_pai' => $request->get('ra_pai'),
            'ra_mae' => $request->get('ra_mae'),
            'ra_nascimento' => $request->get('ra_nascimento')
        ]);

        $request->session()->put('sessaoReu', [
            'r_estrangeiro' => $request->get('r_estrangeiro'),
            'r_sexo' => $request->get('r_sexo'),
            'r_cpf' => $request->get('r_cpf'),
            'r_nome' => $request->get('r_nome'),
            'r_documento' => $request->get('r_documento'),
            'r_numeroIdentificacao' => $request->get('r_numeroIdentificacao'),
            'r_expedidor' => $request->get('r_expedidor'),
            'r_emissao' => $request->get('r_emissao'),
            'r_email' => $request->get('r_email'),
            'r_incerto' => $request->get('r_incerto'),
            'r_cep' => $request->get('r_cep'),
            'r_estado' => $request->get('r_estado'),
            'r_cidade' => $request->get('r_cidade'),
            'r_bairro' => $request->get('r_bairro'),
            'r_tipoLogradouro' => $request->get('r_tipoLogradouro'),
            'r_logradouro' => $request->get('r_logradouro'),
            'r_numeroEndereco' => $request->get('r_numeroEndereco'),
            'r_complemento' => $request->get('r_complemento'),
            'r_tipoEndereco' => $request->get('r_tipoEndereco'),
            'r_referencia' => $request->get('r_referencia'),
            'r_comprovante' => $request->get('r_comprovante')
        ]);

        $request->session()->put('sessaoReuJuridico', [
            'rj_nome' => $request->get('rj_nome'),
            'rj_cnpj' => $request->get('rj_cnpj'),
            'rj_tipoEmpresa' => $request->get('rj_tipoEmpresa'),
            'rj_cep' => $request->get('rj_cep'),
            'rj_estado' => $request->get('rj_estado'),
            'rj_cidade' => $request->get('rj_cidade'),
            'rj_bairro' => $request->get('rj_bairro'),
            'rj_tipoLogradouro' => $request->get('rj_tipoLogradouro'),
            'rj_logradouro' => $request->get('rj_logradouro'),
            'rj_numeroEndereco' => $request->get('rj_numeroEndereco'),
            'rj_complemento' => $request->get('rj_complemento'),
            'rj_tipoEndereco' => $request->get('rj_tipoEndereco'),
            'rj_referencia' => $request->get('rj_referencia')
        ]);

        $request->session()->put('sessaoRepresentanteReu', [
            'rr_parte' => $request->get('rr_parte'),
            'rr_pessoa' => $request->get('rr_pessoa'),
            'rr_sexo' => $request->get('rr_sexo'),
            'rr_cpf' => $request->get('rr_cpf'),
            'rr_nome' => $request->get('rr_nome'),
            'rr_documento' => $request->get('rr_documento'),
            'rr_numeroIdentificacao' => $request->get('rr_numeroIdentificacao'),
            'rr_emissor' => $request->get('rr_emissor'),
            'rr_emissao' => $request->get('rr_emissao'),
            'rr_telefone' => $request->get('rr_telefone'),
            'rr_email' => $request->get('rr_email'),
            'rr_incerto' => $request->get('rr_incerto'),
            'rr_cep' => $request->get('rr_cep'),
            'rr_estado' => $request->get('rr_estado'),
            'rr_cidade' => $request->get('rr_cidade'),
            'rr_bairro' => $request->get('rr_bairro'),
            'rr_tipoLogradouro' => $request->get('rr_tipoLogradouro'),
            'rr_logradouro' => $request->get('rr_logradouro'),
            'rr_numeroEndereco' => $request->get('rr_numeroEndereco'),
            'rr_complemento' => $request->get('rr_complemento'),
            'rr_tipoEndereco' => $request->get('rr_tipoEndereco'),
            'rr_referencia' => $request->get('rr_referencia'),
            'rr_comprovante' => $request->get('rr_comprovante')
        ]);

        if ($request->session()->exists('sessaoDocumentoAnexoPeticao')) {
            $request->session()->forget('sessaoDocumentoAnexoPeticao');
        }
        if (isset($request->dap_arquivo)) {
            if ($request->hasFile('dap_arquivo')) {
                foreach ($request->dap_arquivo as $key => $arquivo) {
                    $arquivo = $request->file('dap_arquivo')[$key]->getClientOriginalName();
                    $dap_caminho = $request->file('dap_arquivo')[$key]->storeAs('public/documentos/anexosPeticao', $arquivo);
                    $request->session()->push('sessaoDocumentoAnexoPeticao', [
                        'dap_arquivo' => $arquivo,
                        'dap_descricao' => $request->get('dap_descricao')
                    ]);
                }
            }
        }

        if ($request->session()->exists('sessaoDocumentoProcuracao')) {
            $request->session()->forget('sessaoDocumentoProcuracao');
        }
        if ($request->hasFile('dpr_arquivo')) {
            $dpr_arquivo = $request->file('dpr_arquivo')->getClientOriginalName();
            $dap_caminho = $request->file('dpr_arquivo')->storeAs('public/documentos/procuracoes', $dpr_arquivo);
            $request->session()->put('sessaoDocumentoProcuracao', [
                'dpr_arquivo' => $dpr_arquivo,
                'dpr_descricao' => $request->get('dpr_descricao')
            ]);
        }

        if ($request->session()->exists('sessaoDocumentoCpf')) {
            $request->session()->forget('sessaoDocumentoCpf');
        }
        if ($request->hasFile('dcpf_arquivo')) {
            $dcpf_arquivo = $request->file('dcpf_arquivo')->getClientOriginalName();
            $dcpf_caminho = $request->file('dcpf_arquivo')->storeAs('public/documentos/cpfs', $dcpf_arquivo);
            $request->session()->put('sessaoDocumentoCpf', [
                'dcpf_arquivo' => $dcpf_arquivo,
                'dcpf_descricao' => $request->get('dcpf_descricao')
            ]);
        }

        if ($request->session()->exists('sessaoDocumentoComprovanteResidencia')) {
            $request->session()->forget('sessaoDocumentoComprovanteResidencia');
        }
        if ($request->hasFile('dcr_arquivo')) {
            $dcr_arquivo = $request->file('dcr_arquivo')->getClientOriginalName();
            $dcr_caminho = $request->file('dcr_arquivo')->storeAs('public/documentos/comprovantesResidencia', $dcr_arquivo);
            $request->session()->put('sessaoDocumentoComprovanteResidencia', [
                'dcr_arquivo' => $dcr_arquivo,
                'dcr_descricao' => $request->get('dcr_descricao')
            ]);
        }

        if ($request->session()->exists('sessaoDocumentoPeticaoInicial')) {
            $request->session()->forget('sessaoDocumentoPeticaoInicial');
        }
        if ($request->hasFile('dpi_arquivo')) {
            $dpi_arquivo = $request->file('dpi_arquivo')->getClientOriginalName();
            $dpi_caminho = $request->file('dpi_arquivo')->storeAs('public/documentos/peticoesIniciais', $dpi_arquivo);
            $request->session()->put('sessaoDocumentoPeticaoInicial', [
                'dpi_arquivo' => $dpi_arquivo,
                'dpi_descricao' => $request->get('dpi_descricao')
            ]);
        }

        return view('DistribuicaoEletronica/DE_confirmacao');
    }

    public function salvar(Request $request)
    {
        $processo = new Processo([
            'p_numeracaoProcesso' => $request->session()->get('sessaoProcesso.p_numeracaoProcesso'),
            'p_grerjMotivo' => $request->session()->get('sessaoProcesso.p_grerjMotivo'),
            'p_grerjNumero' => $request->session()->get('sessaoProcesso.p_grerjNumero'),
            'p_dependencia' => $request->session()->get('sessaoProcesso.p_dependencia'),
            'p_prioridadeDeficiente' => $request->session()->get('sessaoProcesso.p_prioridadeDeficiente'),
            'p_tutela' => $request->session()->get('sessaoProcesso.p_tutela'),
            'p_prioridadePortador' => $request->session()->get('sessaoProcesso.p_prioridadePortador'),
            'p_gratuidade' => $request->session()->get('sessaoProcesso.p_gratuidade'),
            'p_exame' => $request->session()->get('sessaoProcesso.p_exame'),
            'p_comarca' => $request->session()->get('sessaoProcesso.p_comarca'),
            'p_competencia' => $request->session()->get('sessaoProcesso.p_competencia'),
            'p_conciliacao' => $request->session()->get('sessaoProcesso.p_conciliacao'),
            'p_classe' => $request->session()->get('sessaoProcesso.p_classe'),
            'p_distribuicao' => $request->session()->get('sessaoProcesso.p_distribuicao'),
            'p_valor' => $request->session()->get('sessaoProcesso.p_valor'),
            'p_veracidade' => $request->session()->get('sessaoProcesso.p_veracidade')
        ]);
        $processo->save(); //O processo precisa ser salvo primeiro, senão as chaves estrangeiras não terão referência

        //Loops para salvar vários advogados no sistema
        if ($request->session()->get('sessaoAdvogados.ad_numeroOAB') !== null) {
            foreach ($request->session()->get('sessaoAdvogados.ad_numeroOAB') as $key => $numero) {
                if ($request->session()->get('sessaoAdvogados.ad_intimacao')[$key] !== null && $request->session()->get('sessaoAdvogados.ad_representa')[$key] !== null) {
                    $advogado = new Advogado([
                        'ad_numeroOAB' => $numero,
                        'ad_categoria' => $request->session()->get('sessaoAdvogados.ad_categoria')[$key],
                        'ad_nome' => $request->session()->get('sessaoAdvogados.ad_nome')[$key],
                        'ad_estadoOAB' => $request->session()->get('sessaoAdvogados.ad_estadoOAB')[$key],
                        'ad_representa' => $request->session()->get('sessaoAdvogados.ad_representa')[$key],
                        'ad_intimacao' => $request->session()->get('sessaoAdvogados.ad_intimacao')[$key]
                    ]);
                    $advogado->advogado_processo()->associate($processo);
                    $advogado->save();
                } elseif ($request->session()->get('sessaoAdvogados.ad_intimacao')[$key] !== null && $request->session()->get('sessaoAdvogados.ad_representa')[$key] == null) {
                    $advogado = new Advogado([
                        'ad_numeroOAB' => $numero,
                        'ad_categoria' => $request->session()->get('sessaoAdvogados.ad_categoria')[$key],
                        'ad_nome' => $request->session()->get('sessaoAdvogados.ad_nome')[$key],
                        'ad_estadoOAB' => $request->session()->get('sessaoAdvogados.ad_estadoOAB')[$key],
                        'ad_representa' => 'Não',
                        'ad_intimacao' => $request->session()->get('sessaoAdvogados.ad_intimacao')[$key]
                    ]);
                    $advogado->advogado_processo()->associate($processo);
                    $advogado->save();
                } elseif ($request->session()->get('sessaoAdvogados.ad_intimacao')[$key] == null && $request->session()->get('sessaoAdvogados.ad_representa')[$key] !== null) {
                    $advogado = new Advogado([
                        'ad_numeroOAB' => $numero,
                        'ad_categoria' => $request->session()->get('sessaoAdvogados.ad_categoria')[$key],
                        'ad_nome' => $request->session()->get('sessaoAdvogados.ad_nome')[$key],
                        'ad_estadoOAB' => $request->session()->get('sessaoAdvogados.ad_estadoOAB')[$key],
                        'ad_representa' => $request->session()->get('sessaoAdvogados.ad_representa')[$key],
                        'ad_intimacao' => 'Não'
                    ]);
                    $advogado->advogado_processo()->associate($processo);
                    $advogado->save();
                } elseif ($request->session()->get('sessaoAdvogados.ad_intimacao')[$key] == null && $request->session()->get('sessaoAdvogados.ad_representa')[$key] == null) {
                    $advogado = new Advogado([
                        'ad_numeroOAB' => $numero,
                        'ad_categoria' => $request->session()->get('sessaoAdvogados.ad_categoria')[$key],
                        'ad_nome' => $request->session()->get('sessaoAdvogados.ad_nome')[$key],
                        'ad_estadoOAB' => $request->session()->get('sessaoAdvogados.ad_estadoOAB')[$key],
                        'ad_representa' => 'Não',
                        'ad_intimacao' => 'Não'
                    ]);
                    $advogado->advogado_processo()->associate($processo);
                    $advogado->save();
                }
            }
        }

        //Loops para salvar vários defensores no sistema
        if ($request->session()->get('sessaoDefensores.dp_matricula') !== null) {
            foreach ($request->session()->get('sessaoDefensores.dp_matricula') as $key => $matricula) {
                if ($request->session()->get('sessaoDefensores.dp_intimacao')[$key] !== null && $request->session()->get('sessaoDefensores.dp_representa')[$key] !== null) {
                    $defensor = new Defensor([
                        'dp_matricula' => $matricula,
                        'dp_categoria' => $request->session()->get('sessaoDefensores.dp_categoria')[$key],
                        'dp_nome' => $request->session()->get('sessaoDefensores.dp_nome')[$key],
                        'dp_representa' => $request->session()->get('sessaoDefensores.dp_representa')[$key],
                        'dp_intimacao' => $request->session()->get('sessaoDefensores.dp_intimacao')[$key]
                    ]);
                    $defensor->defensor_processo()->associate($processo);
                    $defensor->save();
                } elseif ($request->session()->get('sessaoDefensores.dp_intimacao')[$key] !== null && $request->session()->get('sessaoDefensores.dp_representa')[$key] == null) {
                    $defensor = new Defensor([
                        'dp_matricula' => $matricula,
                        'dp_categoria' => $request->session()->get('sessaoDefensores.dp_categoria')[$key],
                        'dp_nome' => $request->session()->get('sessaoDefensores.dp_nome')[$key],
                        'dp_representa' => 'Não',
                        'dp_intimacao' => $request->session()->get('sessaoDefensores.dp_intimacao')[$key]
                    ]);
                    $defensor->defensor_processo()->associate($processo);
                    $defensor->save();
                } elseif ($request->session()->get('sessaoDefensores.dp_intimacao')[$key] == null && $request->session()->get('sessaoDefensores.dp_representa')[$key] !== null) {
                    $defensor = new Defensor([
                        'dp_matricula' => $matricula,
                        'dp_categoria' => $request->session()->get('sessaoDefensores.dp_categoria')[$key],
                        'dp_nome' => $request->session()->get('sessaoDefensores.dp_nome')[$key],
                        'dp_representa' => $request->session()->get('sessaoDefensores.dp_representa')[$key],
                        'dp_intimacao' => 'Não'
                    ]);
                    $defensor->defensor_processo()->associate($processo);
                    $defensor->save();
                } elseif ($request->session()->get('sessaoDefensores.dp_intimacao')[$key] == null && $request->session()->get('sessaoDefensores.dp_representa')[$key] == null) {
                    $defensor = new Defensor([
                        'dp_matricula' => $matricula,
                        'dp_categoria' => $request->session()->get('sessaoDefensores.dp_categoria')[$key],
                        'dp_nome' => $request->session()->get('sessaoDefensores.dp_nome')[$key],
                        'dp_representa' => 'Não',
                        'dp_intimacao' => 'Não'
                    ]);
                    $defensor->defensor_processo()->associate($processo);
                    $defensor->save();
                }
            }
        }

        $autor = new Autor([
            'a_incapaz' => $request->session()->get('sessaoAutor.a_incapaz'),
            'a_massa' => $request->session()->get('sessaoAutor.a_massa'),
            'a_insolvente' => $request->session()->get('sessaoAutor.a_insolvente'),
            'a_preso' => $request->session()->get('sessaoAutor.a_preso'),
            'a_espolio' => $request->session()->get('sessaoAutor.a_espolio'),
            'a_condominio' => $request->session()->get('sessaoAutor.a_condominio'),
            'a_ministerio' => $request->session()->get('sessaoAutor.a_ministerio'),
            'a_pessoa' => $request->session()->get('sessaoAutor.a_pessoa'),
            'a_estrangeiro' => $request->session()->get('sessaoAutor.a_estrangeiro'),
            'a_sexo' => $request->session()->get('sessaoAutor.a_sexo'),
            'a_cpf' => $request->session()->get('sessaoAutor.a_cpf'),
            'a_nome' => $request->session()->get('sessaoAutor.a_nome'),
            'a_menor' => $request->session()->get('sessaoAutor.a_menor'),
            'a_documento' => $request->session()->get('sessaoAutor.a_documento'),
            'a_numeroIdentificacao' => $request->session()->get('sessaoAutor.a_numeroIdentificacao'),
            'a_expedidor' => $request->session()->get('sessaoAutor.a_expedidor'),
            'a_emissao' => $request->session()->get('sessaoAutor.a_emissao'),
            'a_telefone' => $request->session()->get('sessaoAutor.a_telefone'),
            'a_email' => $request->session()->get('sessaoAutor.a_email'),
            'a_cep' => $request->session()->get('sessaoAutor.a_cep'),
            'a_estado' => $request->session()->get('sessaoAutor.a_estado'),
            'a_cidade' => $request->session()->get('sessaoAutor.a_cidade'),
            'a_bairro' => $request->session()->get('sessaoAutor.a_bairro'),
            'a_tipoLogradouro' => $request->session()->get('sessaoAutor.a_tipoLogradouro'),
            'a_logradouro' => $request->session()->get('sessaoAutor.a_logradouro'),
            'a_numeroEndereco' => $request->session()->get('sessaoAutor.a_numeroEndereco'),
            'a_complemento' => $request->session()->get('sessaoAutor.a_complemento'),
            'a_tipoEndereco' => $request->session()->get('sessaoAutor.a_tipoEndereco'),
            'a_referencia' => $request->session()->get('sessaoAutor.a_referencia'),
            'a_comprovante' => $request->session()->get('sessaoAutor.a_comprovante'),
            'a_valorPedido' => $request->session()->get('sessaoAutor.a_valorPedido'),
            'a_valorLiquido' => $request->session()->get('sessaoAutor.a_valorLiquido'),
            'a_valorCausa' => $request->session()->get('sessaoAutor.a_valorCausa'),
            'a_pretensao' => $request->session()->get('sessaoAutor.a_pretensao'),
            'a_estadoCivil' => $request->session()->get('sessaoAutor.a_estadoCivil'),
            'a_profissao' => $request->session()->get('sessaoAutor.a_profissao'),
            'a_nacionalidade' => $request->session()->get('sessaoAutor.a_nacionalidade'),
            'a_estadoNaturalidade' => $request->session()->get('sessaoAutor.a_estadoNaturalidade'),
            'a_cidadeNaturalidade' => $request->session()->get('sessaoAutor.a_cidadeNaturalidade'),
            'a_pai' => $request->session()->get('sessaoAutor.a_pai'),
            'a_mae' => $request->session()->get('sessaoAutor.a_mae'),
            'a_nascimento' => $request->session()->get('sessaoAutor.a_nascimento')
        ]);
        $autor->autor_processo()->associate($processo);
        $autor->save();

        $representanteAutor = new RepresentanteAutor([
            'ra_incapaz' => $request->session()->get('sessaoRepresentanteAutor.ra_incapaz'),
            'ra_massa' => $request->session()->get('sessaoRepresentanteAutor.ra_massa'),
            'ra_insolvente' => $request->session()->get('sessaoRepresentanteAutor.ra_insolvente'),
            'ra_preso' => $request->session()->get('sessaoRepresentanteAutor.ra_preso'),
            'ra_espolio' => $request->session()->get('sessaoRepresentanteAutor.ra_espolio'),
            'ra_condominio' => $request->session()->get('sessaoRepresentanteAutor.ra_condominio'),
            'ra_parte' => $request->session()->get('sessaoRepresentanteAutor.ra_parte'),
            'ra_ministerio' => $request->session()->get('sessaoRepresentanteAutor.ra_ministerio'),
            'ra_pessoa' => $request->session()->get('sessaoRepresentanteAutor.ra_pessoa'),
            'ra_estrangeiro' => $request->session()->get('sessaoRepresentanteAutor.ra_estrangeiro'),
            'ra_sexo' => $request->session()->get('sessaoRepresentanteAutor.ra_sexo'),
            'ra_cpf' => $request->session()->get('sessaoRepresentanteAutor.ra_cpf'),
            'ra_nome' => $request->session()->get('sessaoRepresentanteAutor.ra_nome'),
            'ra_documento' => $request->session()->get('sessaoRepresentanteAutor.ra_documento'),
            'ra_numeroIdentificacao' => $request->session()->get('sessaoRepresentanteAutor.ra_numeroIdentificacao'),
            'ra_emissor' => $request->session()->get('sessaoRepresentanteAutor.ra_emissor'),
            'ra_emissao' => $request->session()->get('sessaoRepresentanteAutor.ra_emissao'),
            'ra_telefone' => $request->session()->get('sessaoRepresentanteAutor.ra_telefone'),
            'ra_email' => $request->session()->get('sessaoRepresentanteAutor.ra_email'),
            'ra_cep' => $request->session()->get('sessaoRepresentanteAutor.ra_cep'),
            'ra_estado' => $request->session()->get('sessaoRepresentanteAutor.ra_estado'),
            'ra_cidade' => $request->session()->get('sessaoRepresentanteAutor.ra_cidade'),
            'ra_bairro' => $request->session()->get('sessaoRepresentanteAutor.ra_bairro'),
            'ra_tipoLogradouro' => $request->session()->get('sessaoRepresentanteAutor.ra_tipoLogradouro'),
            'ra_logradouro' => $request->session()->get('sessaoRepresentanteAutor.ra_logradouro'),
            'ra_numeroEndereco' => $request->session()->get('sessaoRepresentanteAutor.ra_numeroEndereco'),
            'ra_complemento' => $request->session()->get('sessaoRepresentanteAutor.ra_complemento'),
            'ra_tipoEndereco' => $request->session()->get('sessaoRepresentanteAutor.ra_tipoEndereco'),
            'ra_referencia' => $request->session()->get('sessaoRepresentanteAutor.ra_referencia'),
            'ra_comprovante' => $request->session()->get('sessaoRepresentanteAutor.ra_comprovante'),
            'ra_estadoCivil' => $request->session()->get('sessaoRepresentanteAutor.ra_estadoCivil'),
            'ra_profissao' => $request->session()->get('sessaoRepresentanteAutor.ra_profissao'),
            'ra_nacionalidade' => $request->session()->get('sessaoRepresentanteAutor.ra_nacionalidade'),
            'ra_estadoNaturalidade' => $request->session()->get('sessaoRepresentanteAutor.ra_estadoNaturalidade'),
            'ra_cidadeNaturalidade' => $request->session()->get('sessaoRepresentanteAutor.ra_cidadeNaturalidade'),
            'ra_pai' => $request->session()->get('sessaoRepresentanteAutor.ra_pai'),
            'ra_mae' => $request->session()->get('sessaoRepresentanteAutor.ra_mae'),
            'ra_nascimento' => $request->session()->get('sessaoRepresentanteAutor.ra_nascimento')
        ]);
        $representanteAutor->representanteAutor_processo()->associate($processo);
        $representanteAutor->save();

        $reu = new Reu([
            'r_estrangeiro' => $request->session()->get('sessaoReu.r_estrangeiro'),
            'r_sexo' => $request->session()->get('sessaoReu.r_sexo'),
            'r_cpf' => $request->session()->get('sessaoReu.r_cpf'),
            'r_nome' => $request->session()->get('sessaoReu.r_nome'),
            'r_documento' => $request->session()->get('sessaoReu.r_documento'),
            'r_numeroIdentificacao' => $request->session()->get('sessaoReu.r_numeroIdentificacao'),
            'r_expedidor' => $request->session()->get('sessaoReu.r_expedidor'),
            'r_emissao' => $request->session()->get('sessaoReu.r_emissao'),
            'r_email' => $request->session()->get('sessaoReu.r_email'),
            'r_incerto' => $request->session()->get('sessaoReu.r_incerto'),
            'r_cep' => $request->session()->get('sessaoReu.r_cep'),
            'r_estado' => $request->session()->get('sessaoReu.r_estado'),
            'r_cidade' => $request->session()->get('sessaoReu.r_cidade'),
            'r_bairro' => $request->session()->get('sessaoReu.r_bairro'),
            'r_tipoLogradouro' => $request->session()->get('sessaoReu.r_tipoLogradouro'),
            'r_logradouro' => $request->session()->get('sessaoReu.r_logradouro'),
            'r_numeroEndereco' => $request->session()->get('sessaoReu.r_numeroEndereco'),
            'r_complemento' => $request->session()->get('sessaoReu.r_complemento'),
            'r_tipoEndereco' => $request->session()->get('sessaoReu.r_tipoEndereco'),
            'r_referencia' => $request->session()->get('sessaoReu.r_referencia'),
            'r_comprovante' => $request->session()->get('sessaoReu.r_comprovante')
        ]);
        $reu->reu_processo()->associate($processo);
        $reu->save();

        $reuJuridico = new ReuJuridico([
            'rj_nome' => $request->session()->get('sessaoReuJuridico.rj_nome'),
            'rj_cnpj' => $request->session()->get('sessaoReuJuridico.rj_cnpj'),
            'rj_tipoEmpresa' => $request->session()->get('sessaoReuJuridico.rj_tipoEmpresa'),
            'rj_cep' => $request->session()->get('sessaoReuJuridico.rj_cep'),
            'rj_estado' => $request->session()->get('sessaoReuJuridico.rj_estado'),
            'rj_cidade' => $request->session()->get('sessaoReuJuridico.rj_cidade'),
            'rj_bairro' => $request->session()->get('sessaoReuJuridico.rj_bairro'),
            'rj_tipoLogradouro' => $request->session()->get('sessaoReuJuridico.rj_tipoLogradouro'),
            'rj_logradouro' => $request->session()->get('sessaoReuJuridico.rj_logradouro'),
            'rj_numeroEndereco' => $request->session()->get('sessaoReuJuridico.rj_numeroEndereco'),
            'rj_complemento' => $request->session()->get('sessaoReuJuridico.rj_complemento'),
            'rj_tipoEndereco' => $request->session()->get('sessaoReuJuridico.rj_tipoEndereco'),
            'rj_referencia' => $request->session()->get('sessaoReuJuridico.rj_referencia')
        ]);
        $reuJuridico->reuJuridico_processo()->associate($processo);
        $reuJuridico->save();

        $representanteReu = new RepresentanteReu([
            'rr_parte' => $request->session()->get('sessaoRepresentanteReu.rr_parte'),
            'rr_pessoa' => $request->session()->get('sessaoRepresentanteReu.rr_pessoa'),
            'rr_sexo' => $request->session()->get('sessaoRepresentanteReu.rr_sexo'),
            'rr_cpf' => $request->session()->get('sessaoRepresentanteReu.rr_cpf'),
            'rr_nome' => $request->session()->get('sessaoRepresentanteReu.rr_nome'),
            'rr_documento' => $request->session()->get('sessaoRepresentanteReu.rr_documento'),
            'rr_numeroIdentificacao' => $request->session()->get('sessaoRepresentanteReu.rr_numeroIdentificacao'),
            'rr_emissor' => $request->session()->get('sessaoRepresentanteReu.rr_emissor'),
            'rr_emissao' => $request->session()->get('sessaoRepresentanteReu.rr_emissao'),
            'rr_telefone' => $request->session()->get('sessaoRepresentanteReu.rr_telefone'),
            'rr_email' => $request->session()->get('sessaoRepresentanteReu.rr_email'),
            'rr_incerto' => $request->session()->get('sessaoRepresentanteReu.rr_incerto'),
            'rr_cep' => $request->session()->get('sessaoRepresentanteReu.rr_cep'),
            'rr_estado' => $request->session()->get('sessaoRepresentanteReu.rr_estado'),
            'rr_cidade' => $request->session()->get('sessaoRepresentanteReu.rr_cidade'),
            'rr_bairro' => $request->session()->get('sessaoRepresentanteReu.rr_bairro'),
            'rr_tipoLogradouro' => $request->session()->get('sessaoRepresentanteReu.rr_tipoLogradouro'),
            'rr_logradouro' => $request->session()->get('sessaoRepresentanteReu.rr_logradouro'),
            'rr_numeroEndereco' => $request->session()->get('sessaoRepresentanteReu.rr_numeroEndereco'),
            'rr_complemento' => $request->session()->get('sessaoRepresentanteReu.rr_complemento'),
            'rr_tipoEndereco' => $request->session()->get('sessaoRepresentanteReu.rr_tipoEndereco'),
            'rr_referencia' => $request->session()->get('sessaoRepresentanteReu.rr_referencia'),
            'rr_comprovante' => $request->session()->get('sessaoRepresentanteReu.rr_comprovante')
        ]);
        $representanteReu->representanteReu_processo()->associate($processo);
        $representanteReu->save();

        if (is_array($request->session()->get('sessaoDocumentoAnexoPeticao'))) {
            foreach ($request->session()->get('sessaoDocumentoAnexoPeticao') as $key => $arquivo) {
                $documentoAnexoPeticao = new DocumentoAnexoPeticao([
                    'dap_arquivo' => $arquivo['dap_arquivo'],
                    'dap_descricao' => $arquivo['dap_descricao']
                ]);
                $documentoAnexoPeticao->documentoAnexoPeticao_processo()->associate($processo);
                $documentoAnexoPeticao->save();
            }
        }

        if ($request->session()->get('sessaoDocumentoProcuracao') !== null) {
            $documentoProcuracao = new DocumentoProcuracao([
                'dpr_arquivo' => $request->session()->get('sessaoDocumentoProcuracao.dpr_arquivo'),
                'dpr_descricao' => $request->session()->get('sessaoDocumentoProcuracao.dpr_descricao')
            ]);
            $documentoProcuracao->documentoProcuracao_processo()->associate($processo);
            $documentoProcuracao->save();
        }

        if ($request->session()->get('sessaoDocumentoCpf') !== null) {
            $documentoCpf = new DocumentoCpf([
                'dcpf_arquivo' => $request->session()->get('sessaoDocumentoCpf.dcpf_arquivo'),
                'dcpf_descricao' => $request->session()->get('sessaoDocumentoCpf.dcpf_descricao')
            ]);
            $documentoCpf->documentoCpf_processo()->associate($processo);
            $documentoCpf->save();
        }

        if ($request->session()->get('sessaoDocumentoComprovanteResidencia') !== null) {
            $documentoComprovanteResidencia = new DocumentoComprovanteResidencia([
                'dcr_arquivo' => $request->session()->get('sessaoDocumentoComprovanteResidencia.dcr_arquivo'),
                'dcr_descricao' => $request->session()->get('sessaoDocumentoComprovanteResidencia.dcr_descricao')
            ]);
            $documentoComprovanteResidencia->documentoComprovanteResidencia_processo()->associate($processo);
            $documentoComprovanteResidencia->save();
        }

        if ($request->session()->get('sessaoDocumentoPeticaoInicial') !== null) {
            $documentoPeticaoInicial = new DocumentoPeticaoInicial([
                'dpi_arquivo' => $request->session()->get('sessaoDocumentoPeticaoInicial.dpi_arquivo'),
                'dpi_descricao' => $request->session()->get('sessaoDocumentoPeticaoInicial.dpi_descricao')
            ]);
            $documentoPeticaoInicial->documentoPeticaoInicial_processo()->associate($processo);
            $documentoPeticaoInicial->save();
        }

        return redirect()->action('ProcessoController@gerarPDF', $request->session()->get('sessaoProcesso.p_numeracaoProcesso'));
    }

    public function gerarPDF($numeracaoProcesso)
    {
        $processo = Processo::where('p_numeracaoProcesso', $numeracaoProcesso)->with('processo_advogado', 'processo_defensor', 'processo_autor', 'processo_representanteAutor', 'processo_reu', 'processo_reuJuridico', 'processo_representanteReu', 'processo_documentoComprovanteResidencia', 'processo_documentoCpf', 'processo_documentoProcuracao', 'processo_documentoAnexoPeticao', 'processo_documentoPeticaoInicial')->first();
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('DistribuicaoEletronica/DE_processoPDF', compact('processo'));
        return $pdf->stream("Processo - ". $processo->p_numeracaoProcesso .".pdf");
    }

    public function consultarTodos(Request $request)
    {
        $request->validate([
            'comarca_consulta' => 'nullable',
            'comarca_instancia' => 'nullable'
        ]);
        $request->session()->put('consultaFiltros', [
            'comarca_consulta' => $request->get('comarca_consulta'),
            'comarca_instancia'  => $request->get('comarca_instancia')
        ]);
        if ($request->session()->get('consultaFiltros.comarca_consulta') === 'Todas') {
            $processos = Processo::with('processo_advogado', 'processo_defensor', 'processo_autor', 'processo_representanteAutor', 'processo_reu', 'processo_reuJuridico', 'processo_representanteReu', 'processo_documentoComprovanteResidencia', 'processo_documentoCpf', 'processo_documentoProcuracao', 'processo_documentoAnexoPeticao', 'processo_documentoPeticaoInicial')->get();
            return view('ConsultarExcluirProcessos/CEP_historico', compact('processos'));
        } else {
            $processos = Processo::where('p_comarca', $request->session()->get('consultaFiltros.comarca_consulta'))->with('processo_advogado', 'processo_defensor', 'processo_autor', 'processo_representanteAutor', 'processo_reu', 'processo_reuJuridico', 'processo_representanteReu', 'processo_documentoComprovanteResidencia', 'processo_documentoCpf', 'processo_documentoProcuracao', 'processo_documentoAnexoPeticao', 'processo_documentoPeticaoInicial')->get();
            return view('ConsultarExcluirProcessos/CEP_historico', compact('processos'));
        }
    }

    public function excluirSelecionados(Request $request)
    {
        $request->validate([
            'processosSelecionados' => 'nullable'
      ]);
        if (is_array($request->processosSelecionados)) {
            foreach ($request->processosSelecionados as $key => $numero) {
                $processosSelecionados = Processo::where('p_numeracaoProcesso', $numero);
                $processosSelecionados->delete();
            }
        } else {
            if ($request->session()->get('consultaFiltros.comarca_consulta') === 'Todas') {
                $processos = Processo::with('processo_advogado', 'processo_defensor', 'processo_autor', 'processo_representanteAutor', 'processo_reu', 'processo_reuJuridico', 'processo_representanteReu', 'processo_documentoComprovanteResidencia', 'processo_documentoCpf', 'processo_documentoProcuracao', 'processo_documentoAnexoPeticao', 'processo_documentoPeticaoInicial')->get();
                return view('ConsultarExcluirProcessos/CEP_historico', compact('processos'));
            } else {
                $processos = Processo::where('p_comarca', $request->session()->get('consultaFiltros.comarca_consulta'))->with('processo_advogado', 'processo_defensor', 'processo_autor', 'processo_representanteAutor', 'processo_reu', 'processo_reuJuridico', 'processo_representanteReu', 'processo_documentoComprovanteResidencia', 'processo_documentoCpf', 'processo_documentoProcuracao', 'processo_documentoAnexoPeticao', 'processo_documentoPeticaoInicial')->get();
                return view('ConsultarExcluirProcessos/CEP_historico', compact('processos'));
            }
        }
        if ($request->session()->get('consultaFiltros.comarca_consulta') === 'Todas') {
            $processos = Processo::with('processo_advogado', 'processo_defensor', 'processo_autor', 'processo_representanteAutor', 'processo_reu', 'processo_reuJuridico', 'processo_representanteReu', 'processo_documentoComprovanteResidencia', 'processo_documentoCpf', 'processo_documentoProcuracao', 'processo_documentoAnexoPeticao', 'processo_documentoPeticaoInicial')->get();
            return view('ConsultarExcluirProcessos/CEP_historico', compact('processos'));
        } else {
            $processos = Processo::where('p_comarca', $request->session()->get('consultaFiltros.comarca_consulta'))->with('processo_advogado', 'processo_defensor', 'processo_autor', 'processo_representanteAutor', 'processo_reu', 'processo_reuJuridico', 'processo_representanteReu', 'processo_documentoComprovanteResidencia', 'processo_documentoCpf', 'processo_documentoProcuracao', 'processo_documentoAnexoPeticao', 'processo_documentoPeticaoInicial')->get();
            return view('ConsultarExcluirProcessos/CEP_historico', compact('processos'));
        }
    }

    public function consultar(Request $request)
    {
        $request->validate([
            'cp_numeracaoProcesso' => 'nullable'
        ]);

        $processo = Processo::where('p_numeracaoProcesso', $request->cp_numeracaoProcesso)->with('processo_advogado', 'processo_defensor', 'processo_autor', 'processo_representanteAutor', 'processo_reu', 'processo_reuJuridico', 'processo_representanteReu', 'processo_documentoComprovanteResidencia', 'processo_documentoCpf', 'processo_documentoProcuracao', 'processo_documentoAnexoPeticao', 'processo_documentoPeticaoInicial')->first();
        if ($processo != null) {
            return view('ConsultasProcessuais/CP_processo', compact('processo'));
        } else {
            return back()->with('mensagemConsulta', "Processo ". $request->cp_numeracaoProcesso ." não encontrado!");
        }
    }
}
