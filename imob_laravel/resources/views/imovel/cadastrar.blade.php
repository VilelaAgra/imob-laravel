{{-- COLOCAR OS JAVASCRIPT DO WEBSERVICE --}}

@extends('home')
@section('conteudo_principal')
    <div>
        <h2>CADASTRAR IMÓVEL</h2>
    </div>


    <form action="home.html" method="POST">
        <fieldset id="campo">
            <legend>Dados do Imóvel</legend>

            <label for="cod-imovel">Código:
                <input type="number" name="cod-imovel" id="cod-imovel" />
            </label>
            <br/>
            <label for="tipo-imovel">Tipo do Imóvel:
                <select name="tipo-imovel" id="tipo-imovel">
                    <option value="">Selecione</option>
                    <option value="apt">Apartamento</option>
                    <option value="cs">Casa</option>
                    <option value="cha">Chácara</option>
                </select>
            </label>
            <br/>
            <label for="classificacao">Classificação:
                <select name="classificacao" id="classificacao">
                    <option value="">Selecione</option>
                    <option value="resid">Residencial</option>
                    <option value="comerc">Comercial</option>
                </select>
            </label>
            </label>
            <br/>
            <label for="situacao">Situação:
                <select name="situacao" id="situacao">
                    <option value="">Selecione</option>
                    <option value="disp">Disponivel</option>
                    <option value="reser">Reservado</option>
                    <option value="vend">Vendido</option>
                </select>
            </label>
            <br/>
            <label for="valor-imovel">Valor do Imóvel:
                <input name="valor-imovel" type="text" id="valor-imovel" size="10" />
            </label>
            <br/>
            <label for="iptu">IPTU:
                <input name="iptu" type="text" id="iptu" size="10" />
            </label>
            <br/>
            <label for="obs">Observações:
                <textarea name="obs" id="obs" cols="30" rows="1"></textarea>
            </label>
        </fieldset>

        <fieldset id="campo2">
            <legend>Endereço</legend>
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
Salad e Janar
Valor do Imovel
PITU
Observações
 -->