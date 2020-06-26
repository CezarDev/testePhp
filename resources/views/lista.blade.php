@extends('Layouts.index')
@section('content')        	
            <div id="listaPessoas">
                <div class="col-11">
                    @if (\Session::has('success'))
                        <div class="alert alert-success" >
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif
                     @if (\Session::has('danger'))
                        <div class="alert alert-danger" >
                            <ul>
                                <li>{!! \Session::get('danger') !!}</li>
                            </ul>
                        </div>
                    @endif
                </div>

            	<h1>Cadastros</h1>		
                
                <table id="tLista" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <th width="5%"><input type="checkbox" /></th>
                        <th width="10%">ID</th>
                        <th class="tL">Nome</th>
                        <th width="20%">Data de Nascimento</th>
                        <th width="10%">Dep</th>
                        <th width="8%">Status</th>
                        <th>Alterar Pessoa</th>
                        <th>Remover Pessoa</th>
                    </tr>
                    @foreach ($pessoas as $pessoa ){
                    <tr>
                    	<td text-align="center" style="border-left:0;"><input type="checkbox" /></td>
                    	<td text-align="center">{{$pessoa['id']}}</td>
                        <td text-align="center">{{$pessoa['nome']}}</td>
                        <td text-align="center">{{$pessoa['data_nasc']}}</td>
                        
                        
                        <td text-align="center"><a href="{{route('dependentes.novo', $pessoa['id'])}}" class="btAdicionar"></a></td>
                        <td text-align="center"><a id="idBtn" onclick="mudaCor()"class="btCinza"></a></td>
                        <td><a href="{{route('form.edit', $pessoa['id'])}}" class="linkUser">Editar</a></td>
                        <td><a href="{{route('deletar', $pessoa['id'])}}:;" onclick="return confirm('Tem certeza que deseja deletar este registro?')"class="btPadraoExcluir">Excluir</a></td>
                    </tr>
                }                    
                    @endforeach
		           
                </table>
            <div id="paginacao">
                <a href="" class="btSeta1"></a> <div id="pags">1 de 10</div> <a href="" class="btSeta2"></a> 
                <select id="paginas">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            
@endsection

<script>
    function mudaCor(){
        let corClasse = document.getElementById('idBtn').className;
        
        if(corClasse == 'btCinza'){
          
            document.getElementById('idBtn').classList.remove('btCinza');
            document.getElementById('idBtn').classList.add('btVerde');
        }else{
            document.getElementById('idBtn').classList.remove('btVerde');
            document.getElementById('idBtn').classList.add('btCinza');
        }
        
    }

</script>