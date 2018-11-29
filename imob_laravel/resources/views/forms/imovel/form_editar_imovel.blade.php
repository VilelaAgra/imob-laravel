{{ csrf_field() }}
@if ($errors->any())
<div class="alert alert-danger" style="color: firebrick">
    <strong>Erro!</strong>
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
</div>
@endif

<!-- area de campos do form -->
<hr />
<div id="actions" class="row">

<div class="col-md-12">
    
    <br><div style="font-weight:bold"> DADOS DO IMOVEL</div><br>

    <div class="row">
        <div class="form-group col-md-3">
            <label for="campo1">Código Imóvel</label>
            <input type="text" class="form-control" id="campo1" disabled='true'  value="{{$imovel->id}}">
        </div>

        <div class="form-group col-md-3">
                <label class="control-label">Tipo do Imóvel</label>
                    <select class="form-control" name="tipoimovel">
                        <option value="">Selecione</option>
                        <option value="Apartamento" @if(old('tipoimovel', $imovel['tipoimovel']) == 'Apartameto') selected="selected" @endif>Apartamento</option>
                        <option value= "Casa" @if(old('tipoimovel', $imovel['tipoimovel']) == 'Casa') selected="selected" @endif>Casa</option>
                        <option value="Chácara" @if(old('tipoimovel', $imovel['tipoimovel']) == 'Chácara') selected="selected" @endif>Chácara</option>
                    </select>
            </div>

            <div class="form-group col-md-3">

                <label class="control-label">Classificação</label>
                    <select class="form-control" name="classificacao">
                        <option value="">Selecione</option>
                        <option value="Residencial" @if(old('classificacao', $imovel['classificacao']) == 'Residencial') selected="selected" @endif>Residencial</option>
                        <option value="Comercial" @if(old('classificacao', $imovel['classificacao']) == 'Comercial') selected="selected" @endif>Comercial</option>
                    </select>
            </div>        

            <div class="form-group col-md-3">
                <label class="control-label">Situação</label>
                    <select class="form-control" name="situacao">
                        <option value="">Selecione</option>
                        <option value="Disponivel" @if(old('situacao', $imovel['situacao']) == 'Disponivel') selected="selected" @endif>Disponivel</option>
                        <option value="Reservado" @if(old('situacao', $imovel['situacao']) == 'Reservado') selected="selected" @endif>Reservado</option>
                        <option value="Vendido" @if(old('situacao', $imovel['situacao']) == 'Vendido') selected="selected" @endif>Vendido</option>
                    </select>
            </div>

        <div class="form-group col-md-3">
            <label for="valorimovel">Valor do Imóvel</label>
            <input type="number" max="999999.99" step="0.01" class="form-control" id="valorimovel" name="valorimovel" value="{{$imovel->valorimovel}}">
        </div>

   
        <div class="form-group col-md-3">
            <label for="valorcondominio">Valor do Condomínio</label>
            <input type="number" max="9999.99" step="0.01" class="form-control" id="valorcondominio" name="valorcondominio" value="{{$imovel->valorcondominio}}"/>
        
        </div>

        <div class="form-group col-md-3">
            <label for="salaestar">IPTU</label>
            <input type="number"  max="999999.99" step="0.01" class="form-control" name="iptu" value="{{$imovel->iptu}}"/>
        </div>

        <div class="form-group col-md-3">
                <label for="areatotal">Área Total (em m²)</label>
                <input type="number"max="999999.99" step="0.01" class="form-control" name="areatotal" value="{{$imovel->areatotal}}"/>
        </div>

        <div class="form-group col-md-2">
            <label for="sala">Sala</label>
            <input type="number" class="form-control" name="sala" value="{{$imovel->sala}}"/>
        </div>

        <div class="form-group col-md-2">
            <label for="quarto">Quarto</label>
            <input type="number" class="form-control" name="quarto" value="{{$imovel->quarto}}"/>
        </div>

        <div class="form-group col-md-2">
                <label for="suite">Suíte</label>
                <input type="number" class="form-control" name="suite" value="{{$imovel->suite}}"/>
        </div>

        <div class="form-group col-md-2">
            <label for="banheiro">Banheiro</label>
            <input type="number" class="form-control" name="banheiro" value="{{$imovel->banheiro}}"/>
        </div>
    
        <div class="form-group col-md-2">
            <label for="garagem">Garagem </label>
            <input type="number" class="form-control" name="garagem" value="{{$imovel->garagem}}"/>
        </div>

        <div class="form-group col-md-2">
            <label for="areaservico">Área de Serviço</label>
            <input type="number" class="form-control" name="areaservico" value="{{$imovel->areaservico}}"/>
        </div>

        <div class="form-group col-md-2">
            <label for="salajantar">Sala de Jantar</label>
            <input type="number" class="form-control" name="salajantar" value="{{$imovel->salajantar}}"/>
        </div>

        <div class="form-group col-md-2">
            <label for="salaestar">Sala de Estar</label>
            <input type="number" class="form-control" name="salaestar" value="{{$imovel->salaestar}}"/>
        </div>    

        <div class="form-group col-md-3">
            <label for="salaestar">Idade do Imóvel</label>
            <input type="number" class="form-control" name="idadeimovel" value="{{$imovel->idadeimovel}}"/>
        </div>

        <div class="form-group col-md-12">
            <label for="obs">Observações</label>
            <input type="text" class="form-control" name="obs" value="{{$imovel->obs}}"/>
        </div>
    </div>

</div>

<div class="col-md-12">

    <div style="font-weight:bold">ENDEREÇO DO IMOVEL</div><br>

    <div class="row">
        <div class="form-group col-md-3">
            <label for="cep">Cep:</label>
            <input type="text" class="form-control" name="cep" id="cep" value="" maxlength="9" />
        </div>
    </div>
    
    <div class="row">
        <div class="form-group col-md-6">
            <label for="rua">Rua:</label>
            <input type="text" class="form-control" name="rua" id="rua" disabled="true" />
        </div>
        
        <div class="form-group col-md-6">
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" name="bairro" id="bairro" disabled="true" />
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" name="cidade" id="cidade" disabled="true" />
        </div>

        <div class="form-group col-md-6">
            <label for="uf">Estado:</label>
            <input type="text" class="form-control" name="uf" id="uf" disabled="true" />
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="ibge">IBGE:</label>
            <input type="text" class="form-control" name="ibge" id="ibge" disabled="true"/>
        </div>

    </div>

                        {{-- BOTÕES --}}
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('imovel.buscar') }}" class="btn btn-default">Cancelar</a>
</div>

</div>