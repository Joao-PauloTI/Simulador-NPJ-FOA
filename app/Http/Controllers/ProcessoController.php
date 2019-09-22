<?php

namespace App\Http\Controllers;

use App\Processo;
use App\Autor;
use App\RepresentanteAutor;
use App\Reu;
use App\RepresentanteReu;
use App\Documento;

use Illuminate\Http\Request;

class ProcessoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            'a_representa' => 'nullable',
            'a_intimacao' => 'nullable',
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
            'ra_valorPedido' => 'nullable',
            'ra_valorLiquido' => 'nullable',
            'ra_valorCausa' => 'nullable',
            'ra_pretensao' => 'nullable',
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
            'r_valorPedido' => 'nullable',
            'r_valorLiquido' => 'nullable',
            'r_valorCausa' => 'nullable',
            'r_pretensao' => 'nullable',
            'r_estadoCivil' => 'nullable',
            'r_profissao' => 'nullable',
            'r_nacionalidade' => 'nullable',
            'r_estadoNaturalidade' => 'nullable',
            'r_cidadeNaturalidade' => 'nullable',
            'r_pai' => 'nullable',
            'r_mae' => 'nullable',
            'r_nascimento' => 'nullable',
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
            'rr_valorPedido' => 'nullable',
            'rr_valorLiquido' => 'nullable',
            'rr_valorCausa' => 'nullable',
            'rr_pretensao' => 'nullable',
            'rr_estadoCivil' => 'nullable',
            'rr_profissao' => 'nullable',
            'rr_nacionalidade' => 'nullable',
            'rr_estadoNaturalidade' => 'nullable',
            'rr_cidadeNaturalidade' => 'nullable',
            'rr_pai' => 'nullable',
            'rr_mae' => 'nullable',
            'rr_nascimento' => 'nullable',
            //Documentos
            'd_arquivo' => 'nullable',
            'd_descricao' => 'nullable',
            'd_tipoArquivo' => 'nullable'
        ]);

        $processo = new Processo([
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

        $processo->save(); //O processo precisa ser salvo primeiro, senão as chaves estrangeiras não terão referência

        $autor = new Autor([
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
            'a_representa' => $request->get('a_representa'),
            'a_intimacao' => $request->get('a_intimacao'),
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

        $autor->autor_processo()->associate($processo);
        $autor->save();

        $representanteAutor = new RepresentanteAutor([
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
            'ra_valorPedido' => $request->get('ra_valorPedido'),
            'ra_valorLiquido' => $request->get('ra_valorLiquido'),
            'ra_valorCausa' => $request->get('ra_valorCausa'),
            'ra_pretensao' => $request->get('ra_pretensao'),
            'ra_estadoCivil' => $request->get('ra_estadoCivil'),
            'ra_profissao' => $request->get('ra_profissao'),
            'ra_nacionalidade' => $request->get('ra_nacionalidade'),
            'ra_estadoNaturalidade' => $request->get('ra_estadoNaturalidade'),
            'ra_cidadeNaturalidade' => $request->get('ra_cidadeNaturalidade'),
            'ra_pai' => $request->get('ra_pai'),
            'ra_mae' => $request->get('ra_mae'),
            'ra_nascimento' => $request->get('ra_nascimento')
        ]);

        $representanteAutor->representanteAutor_processo()->associate($processo);
        $representanteAutor->save();

        $reu = new Reu([
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
            'r_comprovante' => $request->get('r_comprovante'),
            'r_valorPedido' => $request->get('r_valorPedido'),
            'r_valorLiquido' => $request->get('r_valorLiquido'),
            'r_valorCausa' => $request->get('r_valorCausa'),
            'r_pretensao' => $request->get('r_pretensao'),
            'r_estadoCivil' => $request->get('r_estadoCivil'),
            'r_profissao' => $request->get('r_profissao'),
            'r_nacionalidade' => $request->get('r_nacionalidade'),
            'r_estadoNaturalidade' => $request->get('r_estadoNaturalidade'),
            'r_cidadeNaturalidade' => $request->get('r_cidadeNaturalidade'),
            'r_pai' => $request->get('r_pai'),
            'r_mae' => $request->get('r_mae'),
            'r_nascimento' => $request->get('r_nascimento')
        ]);

        $reu->reu_processo()->associate($processo);
        $reu->save();

        $representanteReu = new RepresentanteReu([
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
            'rr_comprovante' => $request->get('rr_comprovante'),
            'rr_valorPedido' => $request->get('rr_valorPedido'),
            'rr_valorLiquido' => $request->get('rr_valorLiquido'),
            'rr_valorCausa' => $request->get('rr_valorCausa'),
            'rr_pretensao' => $request->get('rr_pretensao'),
            'rr_estadoCivil' => $request->get('rr_estadoCivil'),
            'rr_profissao' => $request->get('rr_profissao'),
            'rr_nacionalidade' => $request->get('rr_nacionalidade'),
            'rr_estadoNaturalidade' => $request->get('rr_estadoNaturalidade'),
            'rr_cidadeNaturalidade' => $request->get('rr_cidadeNaturalidade'),
            'rr_pai' => $request->get('rr_pai'),
            'rr_mae' => $request->get('rr_mae'),
            'rr_nascimento' => $request->get('rr_nascimento')
        ]);

        $representanteReu->representanteReu_processo()->associate($processo);
        $representanteReu->save();
        /*
        $documento = new Documento([
            'd_arquivo' => $request->get('d_arquivo'),
            'd_descricao' => $request->get('d_descricao'),
            'd_tipoArquivo' => $request->get('d_tipoArquivo')
        ]);

        $documento->documento_processo()->associate($processo);
        $documento->save();
        */
        return redirect('/distribuicaoeletronica');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Processo  $processo
     * @return \Illuminate\Http\Response
     */
    public function show(Processo $processo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Processo  $processo
     * @return \Illuminate\Http\Response
     */
    public function edit(Processo $processo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Processo  $processo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Processo $processo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Processo  $processo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Processo $processo)
    {
        //
    }
}
