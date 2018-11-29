@extends('home')
@section('conteudo_principal')

    <div id="resultado-busca">

        {{ $data }}

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
                    <a href="{{route('imovel.selecionarImovel', ['id' => $imovel['id']])}}">selecionar Imovel</a>
                </td>
            </tr>
            @endforeach	 
        </tbody>
        <!-- DADOS [FIM] -->
    </table>

    {{$paginacao}}
    </div>
@endsection