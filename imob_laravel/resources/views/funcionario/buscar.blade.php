@extends('home')
@section('conteudo_principal')

    <div id="busca">

        <label for="nome-func">Nome do Funcionário:
            <input name="nome-func" type="text" id="nome-func" size="50" />
        </label>

        <br/>
        <label for="funcao">Função:
            <select name="funcao" id="funcao">
                <option value="">Selecione</option>
                <option value="adm">Administrador</option>
                <option value="ger">Gerente</option>
                <option value="cor">Corretor</option>
            </select>
        </label>
        <br/>


        <button type="submit" title="Procurar">Procurar</button>

    </div>

    <div id="resultado-busca">

        <p>Resultados ficarão aqui</p>
        <p>Resultados ficarão aqui</p>
        <p>Resultados ficarão aqui</p>
        <p>Resultados ficarão aqui</p>
        <p>Resultados ficarão aqui</p>
        <p>Resultados ficarão aqui</p>
        <p>Resultados ficarão aqui</p>
        <p>Resultados ficarão aqui</p>
        <p>Resultados ficarão aqui</p>
        <p>Resultados ficarão aqui</p>

    </div>
@endsection