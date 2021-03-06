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
            <input type="text" class="form-control" id="campo1" disabled='true'>
        </div>

        <div class="form-group col-md-3">
                <label class="control-label">Tipo do Imóvel</label>
                    <select class="form-control" name="tipoimovel">
                        <option value="">Selecione</option>
                        <option value="Apartamento">Apartamento</option>
                        <option value="Casa">Casa</option>
                        <option value="Chácara">Chácara</option>
                    </select>
            </div>

            <div class="form-group col-md-3">

                <label class="control-label">Classificação</label>
                    <select class="form-control" name="classificacao">
                        <option value="">Selecione</option>
                        <option value="Residencial">Residencial</option>
                        <option value="Comercial">Comercial</option>
                    </select>
            </div>        

            <div class="form-group col-md-3">
                <label class="control-label">Situação</label>
                    <select class="form-control" name="situacao">
                        <option value="">Selecione</option>
                        <option value="Disponivel">Disponivel</option>
                        <option value="Reservado">Reservado</option>
                        <option value="Vendido">Vendido</option>
                    </select>
            </div>

        <div class="form-group col-md-3">
            <label for="valorimovel">Valor do Imóvel</label>
            <input type="number" max="999999.99" step="0.01" class="form-control" id="valorimovel" name="valorimovel" value="{{old('valorimovel')}}">
        </div>

   
        <div class="form-group col-md-3">
            <label for="valorcondominio">Valor do Condomínio</label>
            <input type="number" max="9999.99" step="0.01" class="form-control" name="valorcondominio" value="{{old('valorcondominio')}}" />
        </div>

        <div class="form-group col-md-3">
            <label for="salaestar">IPTU</label>
            <input type="number"  max="999999.99" step="0.01" class="form-control" name="iptu" value="{{old('iptu')}}"/>
        </div>

        <div class="form-group col-md-3">
                <label for="areatotal">Área Total (em m²)</label>
                <input type="number"max="999999.99" step="0.01" class="form-control" name="areatotal" value="{{old('areatotal')}}"/>
        </div>

        <div class="form-group col-md-2">
            <label for="quarto">Quarto</label>
            <input type="number" class="form-control" name="quarto" value="{{old('quarto')}}"/>
        </div>

        <div class="form-group col-md-2">
                <label for="suite">Suíte</label>
                <input type="number" class="form-control" name="suite" value="{{old('suite')}}"/>
        </div>

        <div class="form-group col-md-2">
            <label for="banheiro">Banheiro</label>
            <input type="number" class="form-control" name="banheiro" value="{{old('banheiro')}}"/>
        </div>
    
        <div class="form-group col-md-2">
            <label for="garagem">Garagem </label>
            <input type="number" class="form-control" name="garagem" value="{{old('garagem')}}"/>
        </div>

        <div class="form-group col-md-2">
            <label for="areaservico">Área de Serviço</label>
            <input type="number" class="form-control" name="areaservico" value="{{old('areaservico')}}"/>
        </div>

        <div class="form-group col-md-2">
            <label for="salajantar">Sala de Jantar</label>
            <input type="number" class="form-control" name="salajantar" value="{{old('salajantar')}}"/>
        </div>

        <div class="form-group col-md-2">
            <label for="salaestar">Sala de Estar</label>
            <input type="number" class="form-control" name="salaestar" value="{{old('salaestar')}}"/>
        </div>    

        <div class="form-group col-md-2">
            <label for="salaestar">Idade do Imóvel</label>
            <input type="number" class="form-control" name="idadeimovel" value="{{old('idadeimovel')}}"/>
        </div>

        <div class="form-group col-md-12">
            <label for="obs">Observações</label>
            <input type="text" class="form-control" name="obs" value="{{old('obs')}}"/>
        </div>
    </div>

</div>

<div class="col-md-12">

    <div style="font-weight:bold">ENDEREÇO DO IMOVEL</div><br>

    <div class="row">
        <div class="form-group col-md-3">
            <label for="cep">Cep:</label>
            <input type="text" class="form-control" name="cep" id="cep" value="{{old('cep')}}" maxlength="9" />
        </div>
    </div>
    
    <div class="row">
        <div class="form-group col-md-6">
            <label for="rua">Rua:</label>
            <input type="text" class="form-control" name="rua" id="rua" value="{{old('rua')}}" />
        </div>
        
        <div class="form-group col-md-6">
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" name="bairro" id="bairro" value="{{old('bairro')}}" />
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" name="cidade" id="cidade" value="{{old('cidade')}}"/>
        </div>

        <div class="form-group col-md-6">
            <label for="uf">Estado:</label>
            <input type="text" class="form-control" name="uf" id="uf" value="{{old('uf')}}" />
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="ibge">IBGE:</label>
            <input type="text" class="form-control" name="ibge" id="ibge" value="{{old('ibge')}}"/>
        </div>
        <div class="form-group col-md-6">
            <label for="lote">LOTE:</label>
            <input type="text" class="form-control" name="lote" id="lote" value="{{old('lote')}}"/>
        </div>
        <div class="form-group col-md-6">
            <label for="quadra">QUADRA:</label>
            <input type="text" class="form-control" name="quadra" id="quadra" value="{{old('quadra')}}"/>
        </div>
        <div class="form-group col-md-6">
            <label for="complemento">COMPLEMENTO:</label>
            <input type="text" class="form-control" name="complemento" id="complemento" value="{{old('complemento')}}"/>
        </div>

    </div>

                        {{-- BOTÕES --}}
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('imovel.buscar') }}" class="btn btn-default">Cancelar</a>
</div>

</div>