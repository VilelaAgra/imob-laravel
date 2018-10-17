@extends('home')
@section('conteudo_principal')

    <div id="busca">
        <label for="perfil">Perfil:
            <select name="perfil" id="perfil">
                <option value="">Selecione</option>
                <option value="comp">Comprador</option>
                <option value="prop">Proprietário</option>
            </select>
        </label>
        <br/>

        <label for="nome-cli">Nome do Cliente:
            <input name="nome-cli" type="text" id="nome-cli" size="50" />
        </label>
        <br/>

        <label for="cpf">CPF:
            <input name="cpf" type="text" id="cpf" size="14" />
        </label>
        <br/>

        <button type="submit" title="Procurar" >Procurar</button>

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