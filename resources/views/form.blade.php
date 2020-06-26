@extends('Layouts.index')
@section('content')

{{-- @if (Session::has('message'))
<div class="alert alert-error>{{Session::get('message')}}"></div>
 @endif --}}
 
<div id="listaPessoas">

    <h1>Incluindo um Novo Cadastro</h1>
   
    <form id="formCadastrar" method="post" enctype="multipart/form-data" action="{{route('pessoa.salvar')}}">
        @csrf
        <label for="cNome">Nome</label><br />
        <input id="cNome" name="cNome" /><br />

        <label for="cDataNasc">Data de Nascimento</label><br />
        <input  type="date" id="cDataNasc" name="cDataNasc" /><br />

        <label for="cEmail">E-Mail</label><br />
        <input type="email"  id="cEmail" name="cEmail" size="30" required/><br />
		
        <label for="cFoto">Foto</label><br />
        <input id="cFoto" name="cFoto" type="file"/><br />
        <button type="submit" class="btPadrao">Salvar</button>        
    </form>
    
   

</div>
 
@endsection

{{-- @extends('rodape') --}}
