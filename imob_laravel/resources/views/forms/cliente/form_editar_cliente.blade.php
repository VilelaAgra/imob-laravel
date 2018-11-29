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
    
    <br><div style="font-weight:bold"> DADOS DO CLIENTE</div><br>

    <div class="row">
        <div class="form-group col-md-3">
            <label for="codcliente">Código Cliente</label>
            <input type="text" class="form-control" id="id" disabled='true' value="{{$cliente->id}}">
        </div>
     
        <div class="form-group col-md-9">
            <label for="nomecliente">Nome</label>
            <input class="form-control" name="nome" type="text" value="{{$cliente->nome}}"/>
        </div>
    </div>
    
    <div class="row">

        <div class="form-group col-md-4">
            <label class="control-label">Tipo</label>
                <select class="form-control" name="tipo">
                    <option value="">Selecione</option>
                    <option value="Comprador" @if(old('tipo', $cliente['tipo']) == 'Comprador') selected="selected" @endif >Comprador</option>
                    <option value="Proprietário" @if(old('tipo', $cliente['tipo']) == 'Proprietário') selected="selected" @endif>Proprietário</option>
                </select>
        </div>

        <div class="form-group col-md-4">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{$cliente->cpf}}">
        </div>

        <div class="form-group col-md-4">
            <label for="rg">RG/UF</label>
            <input type="text" class="form-control" id="rg" name="rg" value="{{$cliente->rg}}">
        </div>
    </div>
    
    <div class="row">

        <div class="form-group col-md-4">
            <label for="datanasc">Data de Nascimento</label>
            <input type="date" class="form-control" id="datanasc" name="datanasc" value="{{$cliente->datanasc}}">
        </div>

        <div class="form-group col-md-4">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="{{$cliente->telefone}}">
        </div>

        <div class="form-group col-md-4">
            <label for="celular">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" value="{{$cliente->celular}}">
        </div>

        <div class="form-group col-md-8">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$cliente->email}}">
        </div>

        <div class="form-group col-md-4">
            <label class="control-label">Status</label>
                <select class="form-control" name="status">
                    <option value="">Selecione</option>
                    <option value="Ativo" @if(old('status', $cliente['status']) == 'Ativo') selected="selected" @endif>Ativo</option>
                    <option value="Não Ativo" @if(old('status', $cliente['status']) == 'Não Ativo') selected="selected" @endif>Não Ativo</option>
                </select>
        </div>
    </div>

</div>

<div class="col-md-12">

    <div style="font-weight:bold">ENDEREÇO DO CLIENTE</div><br>

    <div class="row">
        <div class="form-group col-md-3">
            <label for="cep">Cep:</label>
            <input type="text" class="form-control" name="cep" id="cep" value="{{$cliente->cep}}" maxlength="9" />
        </div>
    </div>
    
    <div class="row">
        <div class="form-group col-md-6">
            <label for="rua">Rua:</label>
            <input type="text" class="form-control" name="rua" id="rua" value="{{$cliente->rua}}" />
        </div>
        
        <div class="form-group col-md-6">
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" name="bairro" id="bairro" value="{{$cliente->bairro}}" />
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" name="cidade" id="cidade" value="{{$cliente->cidade}}"/>
        </div>

        <div class="form-group col-md-6">
            <label for="uf">Estado:</label>
            <input type="text" class="form-control" name="uf" id="uf" value="{{$cliente->uf}}" />
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="complemento">COMPLEMENTO:</label>
            <input type="text" class="form-control" name="complemento" id="complemento" value="{{$cliente->complemento}}"/>
        </div>
        <div class="form-group col-md-6">
            <label for="ibge"></label>
            <input type="text" class="form-control" name="ibge" id="ibge" value="{{$cliente->ibge}}" hidden="true"/>
        </div>

    </div>

                        {{-- BOTÕES --}}
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('cliente.buscar') }}" class="btn btn-default">Cancelar</a>
</div>

</div>