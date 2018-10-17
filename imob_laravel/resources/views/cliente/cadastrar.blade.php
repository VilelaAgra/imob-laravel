@extends('home')
@section('conteudo_principal')


    <div>
        <h2>CADASTRAR CLIENTE</h2>
    </div>


    <form action="home.html" method="POST">
        <fieldset id="campo">
            <legend>Dados do Cliente</legend>

            <label for="perfil">Perfil:
                <select name="perfil" id="perfil">
                    <option value="">Selecione</option>
                    <option value="comp">Comprador</option>
                    <option value="prop">Proprietário</option>

                </select>
            </label>
            <br/>

            <label for="nome-cli">Nome do Cliente:
                <input name="nome-cli" type="text" id="nome-cli" size="50" />
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

            <label for="dt-nasc">Data de Nascimento:
                <input name="dt-nasc" type="date" id="dt-nasc" />
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