@extends('home')
@section('conteudo_principal')


<div>
    <h2>CADASTRAR FUNCIONÁRIO</h2>
</div>


<form action="home.html" method="POST" class="form">
    
    <div class="section">
        
    <h3 id="h3-estilo">Dados do Cliente</h3>

        <div class="control-group">
            <label class="control-label">Função</label>
                <select class="control-menor">
                    <option value="">Selecione</option>
                    <option value="adm">Administrador</option>
                    <option value="ger">Gerente</option>
                    <option value="cor">Corretor</option>
                </select>
        </div>

        <div class="control-group">
            <label class="control-label">Nome</label>
            <input class="control" name="nome-cli" type="text"/>
        </div>

        <div class="control-group">
            <label class="control-label">Senha</label>
            <input class="control-medio" name="cpf" type="text"/>
        </div>

        <div class="control-group">
            <label class="control-label">CPF</label>
            <input class="control-medio" name="cpf" type="text" />
        </div>

        <div class="control-group">
            <label class="control-label">RG/UF</label>
            <input class="control-medio" name="rg-uf" type="text" />
        </div>
       
        <div class="control-group">
            <label class="control-label">Data de Nascimento</label>
            <input class="control-menor" name="datanascimento" type="date" />
        </div>

        <div class="control-group">
            <label class="control-label">Data de Admissão</label>
            <input class="control-menor" name="dataadmissao" type="date" />
        </div>

        <div class="control-group">
            <label class="control-label">Telefone</label>
            <input class="control-medio" name="cpf" type="text" id="rg_uf" />
        </div>

        <div class="control-group">
            <label class="control-label">Celular</label>
            <input class="control-medio" name="cpf" type="text" id="rg_uf" />
        </div>

        <div class="control-group">
            <label class="control-label">E-mail</label>
            <input class="control" name="cpf" type="text" id="rg_uf" />
        </div>

        <div class="control-group">
            <label class="control-label">Observações</label>
            <input class="control" name="obs" type="text" id="rg_uf" />
        </div>
        <br>
        <div id="btn-salvar">
            <input id="botao-salvar" type="submit" value="Salvar">
        </div>

    </div>

    <div class="section">
        
        <h3 id="h3-estilo">Endereço do Cliente</h3>

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