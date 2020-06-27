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
        <input  type="date" id="cDataNasc" onblur="validaData()"name="cDataNasc" /><br />

        <label for="cEmail">E-Mail</label><br />
        <input type="email" id="cEmail" name="cEmail" size="30" required/><br />
		
        <label for="cFoto">Foto</label><br />
        <input id="cFoto" name="cFoto" type="file"/><br />
        <button type="submit" class="btPadrao">Salvar</button>        
    </form>
    
   

</div>
 
@endsection

<script>
function validaData(){
    let data = document.getElementById("cDataNasc").value
    let dt = new Date();
    let anoAtual = dt.getFullYear();
    //let anoNasc = 
    console.log(ano);
    alert(data);

//     var hoje = new Date();
//    var nasc  = new Date(data);
//    var idade = hoje.getFullYear() - nasc.getFullYear();
//    var m = hoje.getMonth() - nasc.getMonth();
//    if (m < 0 || (m === 0 && hoje.getDate() < nasc.getDate())) idade--;
}


</script>

{{-- @extends('rodape') --}}
