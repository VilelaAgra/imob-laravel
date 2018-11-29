{{-- COLOCAR OS JAVASCRIPT DO WEBSERVICE --}}
@extends('home')
@section('conteudo_principal')

    <div id="main" class="container-fluid">
        <h2 class="page-header">CADASTRAR IMÓVEL</h2>
    </div>

    <form action="{{route('imovel.salvar')}}" enctype="multipart/form-data" method="post" class="form">
        @include('forms.imovel.form_cadastrar_imovel')
    </form>

@endsection