<?php

namespace App\Http\Controllers;

use App\AdvogadoRepresentante;
use Illuminate\Http\Request;

class AdvogadoRepresentanteController extends Controller
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
            'ar_advogadoRepresentante' => 'nullable',
            'ar_nome' => 'nullable',
            'ar_estadoOAB' => 'nullable',
            'ar_numeroOAB' => 'nullable',
            'ar_matriculaRepresentante' => 'nullable',
            'ar_representa' => 'nullable',
            'ar_intimacao' => 'nullable'
        ]);

        $advogadoRepresentante = new AdvogadoRepresentante([
            'ar_advogadoRepresentante' => $request->get('ar_advogadoRepresentante'),
            'ar_nome' => $request->get('ar_nome'),
            'ar_estadoOAB' => $request->get('ar_estadoOAB'),
            'ar_numeroOAB' => $request->get('ar_numeroOAB'),
            'ar_matriculaRepresentante' => $request->get('ar_matriculaRepresentante'),
            'ar_representa' => $request->get('ar_representa'),
            'ar_intimacao' => $request->get('ar_intimacao'),
        ]);

        $advogadoRepresentante->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdvogadoRepresentante  $advogadoRepresentante
     * @return \Illuminate\Http\Response
     */
    public function show(AdvogadoRepresentante $advogadoRepresentante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdvogadoRepresentante  $advogadoRepresentante
     * @return \Illuminate\Http\Response
     */
    public function edit(AdvogadoRepresentante $advogadoRepresentante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdvogadoRepresentante  $advogadoRepresentante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdvogadoRepresentante $advogadoRepresentante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdvogadoRepresentante  $advogadoRepresentante
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdvogadoRepresentante $advogadoRepresentante)
    {
        //
    }
}
