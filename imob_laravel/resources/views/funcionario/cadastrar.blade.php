@extends('home')
@section('conteudo_principal')

    <div>
        <h2>CADASTRAR FUNCIONÁRIO</h2>
    </div>


    <form action="home.html" method="POST">
        <fieldset id="campo">
            <legend>Dados do Funcionário</legend>

            <label for="funcao">Função:
                <select name="funcao" id="funcao">
                    <option value="">Selecione</option>
                    <option value="adm">Administrador</option>
                    <option value="ger">Gerente</option>
                    <option value="cor">Corretor</option>
                </select>
            </label>
            <br/>

            <label for="nome-func">Nome do Funcionário:
                <input name="nome-func" type="text" id="nome-func" size="50" />
            </label>
            <br/>

            <label for="senha">Senha:
                <input name="senha" type="password" id="senha" size="8" maxlength="8" />
            </label>
            <br/>

            <label for="cpf">CPF:
                <input name="cpf" type="text" id="cpf" size="14" />
            </label>
            <br/>

            <label for="rg">RG:
                <input name="rg" type="text" id="rg" size="20" />
            </label>
            <br/>

            <label for="cnh">CNH:
                <input name="cnh" type="text" id="cnh" size="14" />
            </label>
            <br/>

            <label for="email">E-mail:
                <input name="email" type="email" id="email" />
            </label>
            <br/>

            <label for="celular">Telefone/Celular:
                <input name="celular" type="text" id="celular" size="14" />
            </label>
            <br/>
        </fieldset>

        <fieldset id="campo2">
            <legend>Endereço do Funcionário</legend>
            <label>Cep:
                <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" />
            </label>
            <br />
            <label>Rua:
                <input name="rua" type="text" id="rua" size="60" />
            </label>
            <br/>
            <label>Bairro:
                <input name="bairro" type="text" id="bairro" size="40" />
            </label>
            <br/>
            <label>Cidade:
                <input name="cidade" type="text" id="cidade" size="40" />
            </label>
            <br/>
            <label>Estado:
                <input name="uf" type="text" id="uf" size="2" />
            </label><br />
            <label>IBGE:
                <input name="ibge" type="text" id="ibge" size="8" />
            </label>
            <br/>

        </fieldset>
        <br/>
        <div id="btn-salvar">
            <input id="botao-salvar" type="submit" value="Salvar">
        </div>
    </form>

@endsection