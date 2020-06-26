@extends('Layouts.index')
@section('content')

<div id="listaPessoas">

    <h1>Editando o Cadastro</h1>
   
    <form id="formCadastrar" method="post" enctype="multipart/form-data" action="{{route('pessoa.update', $pessoa['id'])}}">
        @csrf
        
        <label for="cNome">Nome</label><br />
    <input id="cNome" name="cNome" value="{{ $pessoa['nome'] }}" /><br />

        <label for="cDataNasc">Data de Nascimento</label><br />
        <input id="cDataNasc" name="cDataNasc" value="{{ $pessoa['data_nasc'] }}"/><br />

        <label for="cEmail">E-Mail</label><br />
        <input id="cEmail" name="cEmail" value="{{ $pessoa['email'] }}"/><br />
		
        <label for="cFoto">Foto</label><br />
        <input id="cFoto" name="cFoto" type="file" value="{{ $pessoa['foto'] }}"/><br />   
        <button type="submit"class="btPadrao">Salvar</button>     
    </form>
    
    

</div>

@endsection
