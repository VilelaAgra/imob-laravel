{{-- COLOCAR OS JAVASCRIPT DO WEBSERVICE --}}
@extends('home')
@section('conteudo_principal')

    <div>
        <h2>EDITAR CLIENTE</h2>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger" style="color: firebrick">
        <strong>Erro!</strong>
            @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
    </div>
    @endif

    <form action="{{route('cliente.atualizar', ['id' => $cliente['id']])}}" enctype="multipart/form-data" method="post" class="form">
        @include('forms.cliente.form_editar_cliente')
    </form>

@endsection