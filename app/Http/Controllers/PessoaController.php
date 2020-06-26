<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('lista', ['pessoas' => $pessoas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $limite = 204800;  //200 * 1024
        //$tamanho = $_FILES['file']['size'];

        // if($tamanho > $limite){
            
        //     return Redirect()->back()->with(['message' => 'Tamanho da imagem não permitido!']);
        // }

        //$upload = $request->image->store('cFoto');

        //
        $foto = $request->file('cFoto')->store('Pessoas');

        $pessoa = Pessoa::create([
            "nome" => $request->input('cNome'),
            "data_nasc" => $request->input('cDataNasc'),
            "email" => $request->input('cEmail'),
            "foto" => "/storage/".$foto
        ]);
        
        return redirect()->route('lista.cadastro')->with('sucess', '<h6>Pessoa cadastrada com sucesso !</h6>');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        return view('editar', ['pessoa' => $pessoa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa, $id)
    {   
        $foto = $request->file('cFoto')->store('Pessoas');
        $pessoa = Pessoa::find($id);

        // $limite = 204800;  //200 * 1024
        // $tamanho = $_FILES['file']['size'];

        // if($tamanho > $limite){
            
        //     return redirect()->back()->with(['message' => 'Tamanho da imagem não permitido!']);
        // }


        // $upload = $request->image->store('cFoto');

        //
        $pessoa->update([
            "nome" => $request->input('cNome'),
            "data_nasc" => $request->input('cDataNasc'),
            "email" => $request->input('cEmail'),
            "foto" => "/storage/".$foto
        ]);

        return redirect()->route('lista.cadastro')->with('success', '<h6>Usuário alterado com sucesso !</h6>');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa->delete();

        return redirect()->route('lista.cadastro')
        ->with('success', '<h6>Usuário deletado com sucesso !</h6>');
    }
}
