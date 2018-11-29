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
            <input type="text" class="form-control" id="id" disabled='true'>
        </div>
     
        <div class="form-group col-md-9">
            <label for="nomecliente">Nome</label>
            <input class="form-control" name="nome" type="text" value="{{old('nome')}}"/>
        </div>
    </div>
    
    <div class="row">

        <div class="form-group col-md-4">
            <label class="control-label">Tipo</label>
                <select class="form-control" name="tipo" required="true">
                    <option value="">Selecione</option>
                    <option value="Comprador">Comprador</option>
                    <option value="Proprietário">Proprietário</option>
                </select>
        </div>

        <div class="form-group col-md-4">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{old('cpf')}}" onkeypress="formatar('###.###.###-##', this);">
        </div>

        <div class="form-group col-md-4">
            <label for="rg">RG/UF</label>
            <input type="text" class="form-control" id="rg" name="rg" value="{{old('rg')}}">
        </div>
    </div>
    
    <div class="row">

        <div class="form-group col-md-4">
            <label for="datanasc">Data de Nascimento</label>
            <input type="date" class="form-control" id="datanasc" name="datanasc" value="{{old('datanasc')}}">
        </div>

        <div class="form-group col-md-4">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" value="{{old('telefone')}}">
        </div>

        <div class="form-group col-md-4">
            <label for="celular">Celular</label>
            <input type="tel" class="form-control" id="celular" name="celular" value="{{old('celular')}}">
        </div>

        <div class="form-group col-md-8">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
        </div>
        <div class="form-group col-md-4">
            <label class="control-label">Status</label>
                <select class="form-control" name="status" required="true">
                    <option value="">Selecione</option>
                    <option value="Ativo" >Ativo</option>
                    <option value="Não Ativo">Não Ativo</option>
                </select>
        </div>
        <div class="form-group col-md-8">
            <label for="obs">Observação</label>
            <input type="text" class="form-control" id="obs" name="obs" value="{{old('obs')}}">
        </div>


    </div>

</div>

<div class="col-md-12">

    <div style="font-weight:bold">ENDEREÇO DO CLIENTE</div><br>

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
            <label for="complemento">COMPLEMENTO:</label>
            <input type="text" class="form-control" name="complemento" id="complemento" value="{{old('complemento')}}"/>
        </div>
        <div class="form-group col-md-6">
            <label for="ibge"></label>
            <input type="text" class="form-control" name="ibge" id="ibge" value="{{old('ibge')}}" hidden="true"/>
        </div>

    </div>

                        {{-- BOTÕES --}}
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('cliente.buscar') }}" class="btn btn-default">Cancelar</a>
</div>

</div>