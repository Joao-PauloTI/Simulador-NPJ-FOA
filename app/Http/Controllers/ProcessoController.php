<?php

namespace App\Http\Controllers;

use App\Processo;
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
            'p_veracidade' => 'nullable'
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

        $processo->save();
        return redirect('/');
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
