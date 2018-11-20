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
{{-- 
        <!-- TITULO -->
			<div class="page-header">
				<h1>{{$imovel->Classificação}}</h1>
				<span class="label label-primary">{{$imovel->Situação}}</span>
				<span class="label label-default">{{$livro->Tipo}}</span>
			</div>

		</div> --}}
	</div>
    <table class="table table-hover">
        <thead>
            <tr>
            <th>Código</th>    
            <th>Situação</th>
            <th>Classificacao</th>
            <th>Tipo de Imovel</th>
            <th width="10%">Opções</th>
            </tr>
        </thead>
        <!-- DADOS -->
        <tbody>
            @foreach($imovel as $imovel)
            <tr>
                <td>{{$imovel['id']}}</td>
                <td>{{$imovel['situacao']}}</td>
                <td>{{$imovel['classificacao']}}</td>
                <td>{{$imovel['tipoimovel']}}</td>
                <td>
                    <a href="{{route('imovel.visualizar', ['id' => $imovel['id']])}}">Visualizar</a>
                    <a href="{{route('imovel.editar', ['id' => $imovel['id']])}}">Editar</a>
                    <a href="{{route('imovel.excluir', ['id' => $imovel['id']])}}">Excluir</a>
                </td>
            </tr>
            @endforeach	 
        </tbody>
        <!-- DADOS [FIM] -->
    </table>

    {{$paginacao}}
    </div>
@endsection