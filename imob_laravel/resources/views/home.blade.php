<!DOCTYPE html>
<html>

<head>

    <title>SisImob - Sistema Imobiliario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo asset('css/home.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/buscas.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/cadastros.css')?>" type="text/css">
</head>

<body>

    <div id="bloco-1">
        <figure id="figura">
            <img src="img/logo.jpg" alt="">
        </figure>
        <h1 id="h1-estilo">SisImob - Soluções Imobiliárias</h1>
    </div>

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
                    <li><a href="{{ route('imovel.buscar') }}">Buscar Imóvel</a></li>
                    <li><a href="#">Editar Imóvel</a></li>
                </ul>
            </li>
            <li><a href="#">Clientes</a>
                <ul>
                    <li><a href="{{ route('cliente.cadastrar') }}">Cadastrar Cliente</a></li>
                    <li><a href="{{ route('cliente.buscar') }}">Buscar Cliente</a></li>
                    <li><a href="#">Editar Cliente</a></li>
                </ul>
            </li>
            <li><a href="#">Funcionário</a>
                <ul>
                    <li><a href="{{ route('funcionario.cadastrar') }}">Cadastrar Funcionário</a></li>
                    <li><a href="{{ route('funcionario.buscar') }}">Buscar Funcinonário</a></li>
                    <li><a href="#">Editar Funcinonário</a></li>
                </ul>
            </li>
            <li><a href="#">Venda</a>
                <ul>
                    <li><a href="#">Realizar Proposta Venda</a></li>
                    <li><a href="#">Relatórios de Propostas Venda</a></li>
                </ul>
            </li>
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