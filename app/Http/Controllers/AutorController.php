<?php

namespace App\Http\Controllers;

use App\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
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
            'a_nascimento' => 'nullable'
        ]);

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

        $autor->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(Autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(Autor $autor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autor $autor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autor)
    {
        //
    }
}
