{{-- COLOCAR OS JAVASCRIPT DO WEBSERVICE --}}
@extends('home')
@section('conteudo_principal')

    <div id="main" class="container-fluid">
        <h2 class="page-header">CADASTRAR CLIENTE</h2>
    </div>

    <form action="{{route('cliente.salvar')}}" enctype="multipart/form-data" method="post" class="form"> 
        @include('forms.cliente.form_cadastrar_cliente') 
        {{-- INSERIR ROTAASSS --}}
    </form>

@endsection