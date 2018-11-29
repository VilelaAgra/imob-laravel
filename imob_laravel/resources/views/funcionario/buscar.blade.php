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
            <th>Código</th>    
            <th>Nome</th>
            <th>Função</th>
            <th width="10%">Opções</th>
            </tr>
        </thead>
        <!-- DADOS -->
        <tbody>
            @foreach($funcionario as $funcionario)
            <tr>
                <td>{{$funcionario['id']}}</td>
                <td>{{$funcionario['nome']}}</td>
                <td>{{$funcionario['funcao']}}</td>

                <td>
                    <a href="{{route('funcionario.editar', ['id' => $funcionario['id']])}}">Editar</a>
                    <a href="{{route('funcionario.excluir', ['id' => $funcionario['id']])}}">Status</a>
                </td>
            </tr>
            @endforeach	 
        </tbody>
        <!-- DADOS [FIM] -->
    </table>

    {{$paginacao}}
    </div>
@endsection