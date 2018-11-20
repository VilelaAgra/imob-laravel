{{-- COLOCAR OS JAVASCRIPT DO WEBSERVICE --}}
@extends('home')
@section('conteudo_principal')

    <div>
        <h2>EDITAR IMÓVEL</h2>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger" style="color: firebrick">
        <strong>Erro!</strong>
            @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
    </div>
    @endif

    <form action="{{route('imovel.atualizar', ['id' => $imovel['id']])}}" enctype="multipart/form-data" method="post" class="form">

    {{ csrf_field() }}

        <div class="section"> <h3>Dados do Imóvel</h3>      

            <div class="control-group">
                <label class="control-label">Tipo do Imóvel</label>
                    <select class="control-menor" name="tipoimovel">
                        <option value="">Selecione</option>
                        <option value="Apartamento" @if(old('tipoimovel', $imovel['tipoimovel']) == 'Apartameto') selected="selected" @endif>Apartamento</option>
                        <option value= "Casa" @if(old('tipoimovel', $imovel['tipoimovel']) == 'Casa') selected="selected" @endif>>Casa</option>
                        <option value="Chácara" @if(old('tipoimovel', $imovel['tipoimovel']) == 'Chácara') selected="selected" @endif>>Chácara</option>
                    </select>
            </div>

            <div class="control-group">
                <label class="control-label">Classificação</label>
                    <select class="control-menor" name="classificacao">
                        <option value="">Selecione</option>
                        <option value="Residencial" @if(old('classificacao', $imovel['classificacao']) == 'Residencial') selected="selected" @endif>Residencial</option>
                        <option value="Comercial" @if(old('classificacao', $imovel['classificacao']) == 'Comercial') selected="selected" @endif>Comercial</option>
                    </select>
            </div>        

            <div class="control-group">
                <label class="control-label">Situação</label>
                    <select class="control-menor" name="situacao">
                        <option value="">Selecione</option>
                        <option value="Disponivel" @if(old('situacao', $imovel['situacao']) == 'Disponivel') selected="selected" @endif>>Disponivel</option>
                        <option value="Reservado" @if(old('situacao', $imovel['situacao']) == 'Reservado') selected="selected" @endif>>Reservado</option>
                        <option value="Vendido" @if(old('situacao', $imovel['situacao']) == 'Vendido') selected="selected" @endif>>Vendido</option>
                    </select>
            </div>

            {{-- <h4>Informações sobre o imóvel (QUANTIDADES)</h4> --}}

            <div class="control-group">
                <label class="control-label">Área Total (em m²)</label>
                <input class="control-menormenor" name="areatotal" type="number" value="{{$imovel->areatotal}}"/>
            </div>

            <div class="control-group">
                <label class="control-label">Valor do Imóvel</label>
                <input class="control-menormenor" name="valorimovel" type="number" value="{{$imovel->valorimovel}}"/>
            </div>

            <div class="control-group">
                <label class="control-label">Valor do Condomínio</label>
                <input class="control-menormenor" name="valorcondominio" type="number" value="{{$imovel->valorcondominio}}"/>
            </div>

            <div class="control-group">
                <label class="control-label">Sala</label>
                <input class="control-menormenor" type="number" name="sala" value="{{$imovel->sala}}"/>
            </div>

            <div class="control-group">
                <label class="control-label">Quarto</label>
                <input class="control-menormenor" type="number" name="quarto" value="{{$imovel->quarto}}"/>
            </div>

            <div class="control-group">
                <label class="control-label">Banheiro</label>
                <input class="control-menormenor" type="number" name="banheiro" value="{{$imovel->banheiro}}"/>
            </div>
        </div>

        <div class="section">
            <br><br>
            <div class="control-group">
                <label class="control-label">Garagem </label>
                <input class="control-menormenor" type="number" name="garagem" value="{{$imovel->garagem}}"/>
            </div>

            <div class="control-group">
                <label class="control-label">Área de Serviço</label>
                <input class="control-menormenor" type="number" name="areaservico" value="{{$imovel->areaservico}}"/>
            </div>

            <div class="control-group">
                <label class="control-label">Sala de Jantar</label>
                <input class="control-menormenor" type="number" name="salajantar" value="{{$imovel->salajantar}}"/>
            </div>

            <div class="control-group">
                <label class="control-label">Sala de Estar</label>
                <input class="control-menormenor" type="number" name="salaestar" value="{{$imovel->salaestar}}"/>
            </div>

            <div class="control-group">
                <label class="control-label">Idade do Imóvel</label>
                <input class="control-menormenor" type="number" name="idadeimovel" value="{{$imovel->idadeimovel}}"/>
            </div>

            <div class="control-group">
                <label class="control-label">IPTU</label>
                <input class="control-menormenor" type="number" name="iptu" value="{{$imovel->iptu}}"/>
            </div>

            <div class="control-group">
                <label class="control-label">Observações</label>
                <input class="control" type="text" name="obs" value="{{$imovel->obs}}"/>
            </div>

            <br>

            <div id="btn-salvar">
                <input id="botao-salvar" type="submit" value="Salvar">
            </div>

        </div>

        <div class="section"> <h3>Endereço do Imóvel</h3>    
            
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