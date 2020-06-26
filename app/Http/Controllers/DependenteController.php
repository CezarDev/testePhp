<?php

namespace App\Http\Controllers;

use App\Dependente;
use App\Pessoa;
use Illuminate\Http\Request;

class DependenteController extends Controller
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
    public function create($id)
    {   
        $pessoa = Pessoa::find($id);
       
        return view('dependentes',compact('pessoa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $pessoaId)
    {
        //
       
        $dependente = Dependente::create([
            "nome" => $request->input('cNomeDep'),
            "data_nasc" => $request->input('cDataNasc'),
            "pessoa_id" => $pessoaId
        ]);

        return redirect()->route('lista.cadastro')->with('success','<h6>Dependente cadastrado com sucesso !</h6>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dependente  $dependente
     * @return \Illuminate\Http\Response
     */
    public function show(Dependente $dependente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dependente  $dependente
     * @return \Illuminate\Http\Response
     */
    public function edit(Dependente $dependente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dependente  $dependente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dependente $dependente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dependente  $dependente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dependente $dependente)
    {
        //
    }
}
