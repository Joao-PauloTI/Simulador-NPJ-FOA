<?php

namespace App\Http\Controllers;

use App\ReuJuridico;
use Illuminate\Http\Request;

class ReuJuridicoController extends Controller
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
        ]);

        $reuJuridico = new ReuJuridico([
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

        $reuJuridico->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReuJuridico  $reuJuridico
     * @return \Illuminate\Http\Response
     */
    public function show(ReuJuridico $reuJuridico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReuJuridico  $reuJuridico
     * @return \Illuminate\Http\Response
     */
    public function edit(ReuJuridico $reuJuridico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReuJuridico  $reuJuridico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReuJuridico $reuJuridico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReuJuridico  $reuJuridico
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReuJuridico $reuJuridico)
    {
        //
    }
}
