<?php

namespace App\Http\Controllers;

use App\Reu;
use Illuminate\Http\Request;

class ReuController extends Controller
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
            'r_nascimento' => 'nullable'
        ]);

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

        $reu->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reu  $reu
     * @return \Illuminate\Http\Response
     */
    public function show(Reu $reu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reu  $reu
     * @return \Illuminate\Http\Response
     */
    public function edit(Reu $reu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reu  $reu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reu $reu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reu  $reu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reu $reu)
    {
        //
    }
}
