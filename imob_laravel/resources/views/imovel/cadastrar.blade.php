{{-- COLOCAR OS JAVASCRIPT DO WEBSERVICE --}}
@extends('home')
@section('conteudo_principal')

    <div>
        <h2>CADASTRAR IMÓVEL</h2>
    </div>

    <form action="{{route('imovel.salvar')}}" enctype="multipart/form-data" method="post" class="form">
    {{ csrf_field() }}

        @if ($errors->any())
            <div class="alert alert-danger" style="color: firebrick">
                <strong>Erro!</strong>
                    @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
            </div>
        @endif




        <div class="section">

        <h3 id="h3-estilo">Dados do Imóvel</h3>

        <div class="control-group">
            <label class="control-label">Tipo do Imóvel</label>
                <select class="control-menor">
                    <option value="">Selecione</option>
                    <option value="1">Apartamento</option>
                    <option value="2">Casa</option>
                    <option value="3">Chácara</option>
                </select>
        </div>

        <div class="control-group">
            <label class="control-label">Classificação</label>
                <select class="control-menor">
                    <option value="">Selecione</option>
                    <option value="1">Residencial</option>
                    <option value="2">Comercial</option>
                </select>
        </div>        

        <div class="control-group">
            <label class="control-label">Situação</label>
                <select class="control-menor">
                    <option value="">Selecione</option>
                    <option value="1" >Disponivel</option>
                    <option value="2" >Reservado</option>
                    <option value="3" >Vendido</option>
                </select>
        </div>

        {{-- <h4>Informações sobre o imóvel (QUANTIDADES)</h4> --}}

        <div class="control-group">
            <label class="control-label">Área Total (em m²)</label>
            <input class="control-menor" name="nome-cli" type="number"/>
        </div>

        <div class="control-group">
            <label class="control-label">Sala</label>
            <input class="control-menor" type="number"/>
        </div>

        <div class="control-group">
            <label class="control-label">Quarto</label>
            <input class="control-menor" type="number"/>
        </div>

        <div class="control-group">
            <label class="control-label">Banheiro</label>
            <input class="control-menor" type="number"/>
        </div>

        <div class="control-group">
            <label class="control-label">Garagem </label>
            <input class="control-menor" type="number"/>
        </div>
        {{-- SE APARTAMENTO ESSA OPÇÃO ABAIXO --}}
        <div class="control-group">
            <label class="control-label">Vagas na Garagem </label>
            <input class="control-menor" type="number"/>
        </div>

        <div class="control-group">
            <label class="control-label">Área de Serviço</label>
            <input class="control-menor" type="number"/>
        </div>

        <div class="control-group">
            <label class="control-label">Sala de Jantar</label>
            <input class="control-menor" type="number"/>
        </div>

        <div class="control-group">
            <label class="control-label">Sala de Estar</label>
            <input class="control-menor" type="number"/>
        </div>

        <div class="control-group">
            <label class="control-label">Idade do Imóvel</label>
            <input class="control-menor" type="number"/>
        </div>

        <div class="control-group">
            <label class="control-label">IPTU</label>
            <input class="control-menor" type="number"/>
        </div>

        <div class="control-group">
            <label class="control-label">Observações</label>
            <input class="control" type="text"/>
        </div>

        <br>

        <div id="btn-salvar">
            <input id="botao-salvar" type="submit" value="Salvar">
        </div>

        </div>

        <div class="section">

        <h3 id="h3-estilo">Endereço do Imóvel</h3>

        <div class="control-group">
            <label class="control-label">Cep:</label>
            <input class="control-menor" name="cep" type="text" id="cep" value="" maxlength="9" onblur="pesquisacep(this.value);" />
        </div>

        <div class="control-group">
            <label class="control-label">Rua:</label>
            <input class="control" name="rua" type="text" id="rua" />
        </div>

        <div class="control-group">
            <label class="control-label">Bairro:</label>
            <input class="control-medio" name="bairro" type="text" id="bairro" />
        </div>

        <div class="control-group">
            <label class="control-label">Cidade:</label>
            <input class="control-medio" name="cidade" type="text" id="cidade" />
        </div>

        <div class="control-group">
            <label class="control-label">Estado:</label>
            <input class="control-menor" name="uf" type="text" id="uf" />
        </div>

        <div class="control-group">
            <label class="control-label">IBGE:</label>
            <input class="control-menor" name="ibge" type="text" id="ibge" />
        </div>


        </div>
    </form>

@endsection


<!-- Código
Tipo de Imóvel
Finalidade
Disponibilidade
Situação
Sala
Suíte
Garagem
Sala de Estar
Idade do imovel
Valor do Condominio
Area total
quarto 
banheiro
Area de Servio
Sala de Janar
Valor do Imovel
PITU
Observações
-->