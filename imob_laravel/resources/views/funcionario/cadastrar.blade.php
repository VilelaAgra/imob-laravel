{{-- COLOCAR OS JAVASCRIPT DO WEBSERVICE --}}
@extends('home')
@section('conteudo_principal')

    <div id="main" class="container-fluid">
        <h2 class="page-header">CADASTRAR FUNCIONÁRIO</h2>
    </div>

    <form action="{{route('funcionario.salvar')}}" enctype="multipart/form-data" method="post" class="form"> 
        @include('forms.funcionario.form_cadastrar_funcionario') 
        {{-- INSERIR ROTAASSS --}}
        
    </form>

@endsection