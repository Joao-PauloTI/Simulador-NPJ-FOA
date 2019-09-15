<?php

namespace App\Http\Controllers;

use App\RepresentanteReu;
use Illuminate\Http\Request;

class RepresentanteReuController extends Controller
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
            'rr_nascimento' => 'nullable'
        ]);

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

        $representanteReu->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RepresentanteReu  $representanteReu
     * @return \Illuminate\Http\Response
     */
    public function show(RepresentanteReu $representanteReu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RepresentanteReu  $representanteReu
     * @return \Illuminate\Http\Response
     */
    public function edit(RepresentanteReu $representanteReu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RepresentanteReu  $representanteReu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RepresentanteReu $representanteReu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RepresentanteReu  $representanteReu
     * @return \Illuminate\Http\Response
     */
    public function destroy(RepresentanteReu $representanteReu)
    {
        //
    }
}
