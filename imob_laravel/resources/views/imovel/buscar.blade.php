@extends('home')
@section('conteudo_principal')

    <div id="busca">
        <label for="cod-imovel">Código:
            <input type="number" name="cod-imovel" id="cod-imovel" />
        </label>
        <br/>
        <label for="tipo-imovel">Tipo do Imóvel:
            <select name="tipo-imovel" id="tipo-imovel">
                <option value="">Selecione</option>
                <option value="apt">Apartamento</option>
                <option value="cs">Casa</option>
                <option value="cha">Chácara</option>
            </select>
        </label>
        <br/>
        <label for="classificacao">Classificação:
            <select name="classificacao" id="classificacao">
                <option value="">Selecione</option>
                <option value="resid">Residencial</option>
                <option value="comerc">Comercial</option>
            </select>
        </label>
        </label>
        <br/>
        <label for="situacao">Situação:
            <select name="situacao" id="situacao">
                <option value="">Selecione</option>
                <option value="disp">Disponivel</option>
                <option value="reser">Reservado</option>
                <option value="vend">Vendido</option>
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