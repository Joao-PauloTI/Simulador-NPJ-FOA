<?php

namespace App\Http\Controllers;

use App\RepresentanteAutor;
use Illuminate\Http\Request;

class RepresentanteAutorController extends Controller
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
        //
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
            'ra_nascimento' => 'nullable'
        ]);

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

        $representanteAutor->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RepresentanteAutor  $representanteAutor
     * @return \Illuminate\Http\Response
     */
    public function show(RepresentanteAutor $representanteAutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RepresentanteAutor  $representanteAutor
     * @return \Illuminate\Http\Response
     */
    public function edit(RepresentanteAutor $representanteAutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RepresentanteAutor  $representanteAutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RepresentanteAutor $representanteAutor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RepresentanteAutor  $representanteAutor
     * @return \Illuminate\Http\Response
     */
    public function destroy(RepresentanteAutor $representanteAutor)
    {
        //
    }
}
