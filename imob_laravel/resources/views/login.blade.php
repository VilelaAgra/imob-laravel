<!DOCTYPE html>
<html>

<head>

    <title>SisImob - Sistema Imobiliario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">
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
        </figure>
    </div>

    <form action="{{route('logar')}}" method="post">
        {{ csrf_field() }}
        
        <div id="lgn">
            <div id="lgn-int">
                
                <div id="lgn-txt">LOGIN</div>
                
                <div class="campos_input" #id="usuario_input"> 
                    <input type="text" name='cpf' id="cpf" placeholder="CPF" maxlength="14" onkeypress="formatar('###.###.###-##', this);"/>
                </div>
                
                <div class="campos_input" #id="senha_input">
                    <input type="password" name='senha' id="senha" placeholder="Senha"/>
                </div>
                
                <div id="buttons">
                    <div>
                        <input id="botao" type="submit" value="Entrar">
                    </div>
                
                @if (session('erro'))
                    <!-- LOGIN ou SENHA INCORRETA -->
                        <div class="alert alert-danger">
                            <strong>Erro!</strong> {{session('erro')}}  
                        </div>
                        <!-- FIM [LOGIN OU SENHA INCORRETA] -->
                @endif    
                </div>
            </div>
        </div>
    </form>
</body>

</html>