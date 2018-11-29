<!DOCTYPE html>
<html>

<head>

    <title>SisImob - Sistema Imobiliario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href={{asset('css/login.css')}} type="text/css">
    <link rel="stylesheet" href={{asset('css/home.css')}} type="text/css">
    <link rel="stylesheet" href={{asset('css/buscas.css')}} type="text/css">
    {{-- <link rel="stylesheet" href={{asset('css/cadastros.css')}} type="text/css"> --}}
    <link rel="stylesheet" href={{asset('css/app.css')}} type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"> </script>
    <script type="text/javascript" src={{asset('js\cep.js')}}></script>
    <script type="text/javascript" src={{asset('js\cpf.js')}}></script>
    <script>
        function formatar(mascara, documento){
            var i = documento.value.length;
            var saida = mascara.substring(0,1);
            var texto = mascara.substring(i);
            if (texto.substring(0,1) != saida){
                documento.value += texto.substring(0,1);
                }}
    </script>


    
    
</head>

<body>

    <div id="bloco-1">
        <figure id="figura">
            <img src="{{ asset('img/logo.png') }}" />
            <h1 id="h1-estilo">SisImob - Soluções Imobiliárias</h1>
            
            <br>
        </figure>
        <br>
    </div>
<br>
    <nav>
        <ul class="menu">
            <li><a href="{{ route('login') }}">Home</a>
                <ul>
                    <li><a href="{{ route('logout') }}">Sair</a></li>
                </ul>
            </li>
            <li><a href="#">Imóvel</a>
                <ul>
                    <li><a href="{{ route('imovel.cadastrar') }}">Cadastrar Imóvel</a></li>
                    <li><a href="{{ route('imovel.buscar') }}">Listar Imóveis</a></li>
                </ul>
            </li>
            <li><a href="#">Clientes</a>
                <ul>
                    <li><a href="{{ route('cliente.cadastrar') }}">Cadastrar Cliente</a></li>
                    <li><a href="{{ route('cliente.buscar') }}">Listar Clientes</a></li>
>
                </ul>
            </li>
  
            <li><a href="#">Funcionário</a>
                <ul>
                    <li><a href="{{ route('funcionario.cadastrar') }}">Cadastrar Funcionário</a></li>
                    <li><a href="{{ route('funcionario.buscar') }}">Listar Funcionários</a></li>
                </ul>
            </li>

            <li><a href="#">Proposta</a>
                <ul>
                    {{-- <li><a href="{{ route('proposta.buscarImovel') }}">Realizar Proposta Venda</a></li> --}}
                    <li><a href="#">Alterar Status da Proposta Venda</a></li>

                </ul>
            </li>
            <li><a href="#">Venda</a>
                <ul>
                    <li><a href="#">Realizar Venda</a></li>
                    <li><a href="#">Gerar Contrato Final</a></li>
                </ul>
            </li>
             <li>{{session ('usuario')}}</li>
        </ul>
    </nav>
    
    
    


	<div class="container">
            
        <!-- CONTEUDO DIFERENTE -->
          @yield('conteudo_principal')
        <!-- CONTEUDO DIFERENTE [FIM] -->
    </div>
        <br/>

</body>

</html>