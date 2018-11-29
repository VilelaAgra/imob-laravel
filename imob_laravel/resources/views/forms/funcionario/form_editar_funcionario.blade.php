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
    
    <br><div style="font-weight:bold"> DADOS DO FUNCIONÁRIO</div><br>

    <div class="row">
        <div class="form-group col-md-3">
            <label for="codfuncionario">Código Funcionário</label>
            <input type="text" class="form-control" id="codfuncionario" disabled='true' value="{{$funcionario->nome}}">
        </div>

        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input class="form-control" name="nome" type="text" value="{{$funcionario->nome}}"/>
        </div>
    </div>
    
    <div class="row">
        <div class="form-group col-md-3">
            <label class="control-label">Função</label>
                <select class="form-control" name="funcao">
                    <option value="">Selecione</option>
                    <option value="administrador"  @if(old('funcao', $funcionario['funcao']) == 'administrador') selected="selected" @endif>Administrador</option>
                    <option value="gerente"  @if(old('funcao', $funcionario['funcao']) == 'gerente') selected="selected" @endif>Gerente</option>
                    <option value="corretor"  @if(old('funcao', $funcionario['funcao']) == 'corretor') selected="selected" @endif>Corretor</option>
                </select>
        </div>
        <div class="form-group col-md-3">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{$funcionario->cpf}}" onkeypress="formatar('###.###.###-##', this);">
        </div>
        <div class="form-group col-md-3">
            <label for="rg">RG</label>
            <input type="text" class="form-control" id="rg" name="rg" value="{{$funcionario->rg}}">
        </div>
        
        <div class="form-group col-md-3">
            <label for="senha">Senha</label>
            <input class="form-control" name="senha" id="senha" type="password" value="{{$funcionario->senha}}"/>
        </div>

    </div>
      
    <div class="row"> 

        <div class="form-group col-md-3">
            <label for="dataadm">Data de Admissão</label>
            <input type="date" class="form-control" id="dataadm" name="dataadm" value="{{$funcionario->dataadm}}">
        </div>

        <div class="form-group col-md-3">
            <label for="datanasc">Data de Nascimento</label>
            <input type="date" class="form-control" id="datanasc" name="datanasc" value="{{$funcionario->datanasc}}">
        </div>

        <div class="form-group col-md-3">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="{{$funcionario->telefone}}">
        </div>

        <div class="form-group col-md-3">
            <label for="celular">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" value="{{$funcionario->celular}}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$funcionario->email}}">
        </div>

        <div class="form-group col-md-6">
            <label for="obs">Observações</label>
            <input type="text" class="form-control" id="obs" name="obs" value="{{$funcionario->obs}}">
        </div>

        <div class="form-group col-md-4">
            <label class="control-label">Status</label>
                <select class="form-control" name="status">
                    <option value="">Selecione</option>
                    <option value="ativo"@if(old('status', $funcionario['status']) == 'ativo') selected="selected" @endif>Ativo</option>
                    <option value="desativo"@if(old('status', $funcionario['status']) == 'desativo') selected="selected" @endif>Desativo</option>
                </select>
        </div>
    </div>

</div>

<div class="col-md-12">

    <div style="font-weight:bold">ENDEREÇO DO FUNCIONÁRIO</div><br>

    <div class="row">
        <div class="form-group col-md-3">
            <label for="cep">Cep:</label>
            <input type="text" class="form-control" name="cep" id="cep" value="{{$funcionario->cep}}" maxlength="9" />
        </div>
    </div>
    
    <div class="row">
        <div class="form-group col-md-6">
            <label for="rua">Rua:</label>
            <input type="text" class="form-control" name="rua" id="rua" value="{{$funcionario->rua}}" />
        </div>
        
        <div class="form-group col-md-6">
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" name="bairro" id="bairro" value="{{$funcionario->bairro}}" />
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" name="cidade" id="cidade" value="{{$funcionario->cidade}}"/>
        </div>

        <div class="form-group col-md-6">
            <label for="uf">Estado:</label>
            <input type="text" class="form-control" name="uf" id="uf" value="{{$funcionario->uf}}" />
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="ibge">IBGE:</label>
            <input type="text" class="form-control" name="ibge" id="ibge" value="{{$funcionario->ibge}}"/>
        </div>
        <div class="form-group col-md-6">
            <label for="complemento">COMPLEMENTO:</label>
            <input type="text" class="form-control" name="complemento" id="complemento" value="{{$funcionario->complemento}}"/>
        </div>

    </div>

                        {{-- BOTÕES --}}
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('funcionario.buscar') }}" class="btn btn-default">Cancelar</a>
</div>

</div>