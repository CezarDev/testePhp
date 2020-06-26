<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link  href="{{asset('css/principal.css')}}" rel="stylesheet">
<img src="{{asset('images/topo_geral.png')}}">
<img src="{{asset('images/topo_geral.png')}}">
<img src="{{asset('images/topo_direita.png')}}">
<img src="{{asset('images/imgTopoMenu.png')}}">
<img src="{{asset('images/imgFundoMenu.png')}}">

<title>Cadastro de Pessoas</title>
</head>

<body>
    <div id="conteudoGeral">
        <div id="topoGeral">
            <div id="logoTopo" onclick="location.href='index.php'" style="cursor:pointer;"></div>
            <div id="dirTopo"></div>
        </div>
    
        <div id="baixoGeral">
            <div id="menuEsq">
                <div id="titMenu">Menu de Opções</div>
                <a href="{{route('index.inicio')}}">Início</a> 
                <a href="{{route('lista.cadastro')}}">Listar Cadastros</a>
                <a href="{{route('form.novo')}}">Incluir Novo</a>
            </div>
            
            <div id="conteudoDir">
                @yield('content')
            </div>
        </div>
    
    </div>
    

    @includeIf('Layouts.rodape')
</body>

</html>
