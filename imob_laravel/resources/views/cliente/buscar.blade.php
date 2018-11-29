@extends('home')
@section('conteudo_principal')

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
            <th>CódigoCliente</th>    
            <th>Tipo</th>
            <th width="10%">Opções</th>
            </tr>
        </thead>
        <!-- DADOS -->
        <tbody>
            @foreach($cliente as $cliente)
            <tr>
                <td>{{$cliente['id']}}</td>
                <td>{{$cliente['situacao']}}</td>
                <td>
                    <a href="{{route('cliente.visualizar', ['id' => $cliente['id']])}}">Visualizar</a>
                    <a href="{{route('cliente.editar', ['id' => $cliente['id']])}}">Editar</a>
                    <a href="{{route('cliente.excluir', ['id' => $cliente['id']])}}">Excluir</a>
                </td>
            </tr>
            @endforeach	 
        </tbody>
        <!-- DADOS [FIM] -->
    </table>

    {{$paginacao}}
    </div>
@endsection