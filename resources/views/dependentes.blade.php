
@extends('Layouts.index')
@section('content')
    

        	
            <div id="listaPessoas">
                <h1>Pessoa</h1>
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
                
                <div id="infoDep">

                    <div id="fotoCadastro">
                        <img src="{{$pessoa['foto']}}" width="77" height="77" />
                    </div> 
                    
                    <table id="tListaCad" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="tituloTab">Nome</td>    
                            <td>{{$pessoa['nome']}}</td>    
                        </tr>              
                        <tr bgcolor="#cddeeb">
                            <td class="tituloTab">Data de Nascimento</td>    
                            <td>{{$pessoa['data_nasc']}}</td>    
                        </tr>              
                        <tr>
                            <td class="tituloTab">Email</td>    
                            <td>{{$pessoa['email']}}</td>    
                        </tr>              
                    </table>
                    
                    <form id="frmAdicionaDep" action="{{route('dependentes.salvar', $pessoa['id'])}}" method="POST">
                        @csrf

                        <div class="agrupa mB mR">
                            <label for="cNomeDep">Nome</label><br />
                            <input type="text" name="cNomeDep" id="cNomeDep" />
                        </div>    
                        <div class="agrupa">
                            <label for="cDataNasc">Data de Nascimento</label><br />
                            <input type="date" name="cDataNasc" id="cDataNasc" />
                        </div>                            

                    <button type="submit"class="btPadrao">Adicionar</button>

                    </form>
                    
                    
                    <table id="tLista" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <th width="60%" class="tL">Nome do Dependente</th>
                            <th width="33%">Data de Nascimento</th>
                            <th></th>
                        </tr>    
                        @foreach ($pessoa['dependentes'] as $dependente)
                        <tr>
                            <td> {{$dependente['nome']}}</td>
                            <td text-align="center"> {{$dependente['data_nasc']}}</td>
                            <td text-align="center"><a href=""  class="btRemover"></a></td>
                        </tr>   
                           
                        @endforeach

                        {{-- <tr>
                            <td>Fulano de Tal Silva</td>
                            <td align="center">01/01/1980</td>
                            <td align="center"><a href="" class="btRemover"></a></td>
                        </tr>     --}}
                        
                    
                    
                </div>
                
            </div>    

            @endsection

            