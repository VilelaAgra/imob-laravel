{{-- COLOCAR OS JAVASCRIPT DO WEBSERVICE --}}
@extends('home')
@section('conteudo_principal')

    <div>
        <h2>CADASTRAR IMÓVEL</h2>
    </div>

    <form action="{{route('imovel.salvar')}}" enctype="multipart/form-data" method="post" class="form">
    {{ csrf_field() }}

        @if ($errors->any())
            <div class="alert alert-danger" style="color: firebrick">
                <strong>Erro!</strong>
                    @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
            </div>
        @endif




        <div class="section"> <h3>Dados do Imóvel</h3>      

            <div class="control-group">
                <label class="control-label">Tipo do Imóvel</label>
                    <select class="control-menor" name="tipoimovel">
                        <option value="">Selecione</option>
                        <option value="Apartamento">Apartamento</option>
                        <option value="Casa">Casa</option>
                        <option value="Chácara">Chácara</option>
                    </select>
            </div>

            <div class="control-group">
                <label class="control-label">Classificação</label>
                    <select class="control-menor" name="classificacao">
                        <option value="">Selecione</option>
                        <option value="Residencial">Residencial</option>
                        <option value="Comercial">Comercial</option>
                    </select>
            </div>        

            <div class="control-group">
                <label class="control-label">Situação</label>
                    <select class="control-menor" name="situacao">
                        <option value="">Selecione</option>
                        <option value="Disponivel" >Disponivel</option>
                        <option value="Reservado" >Reservado</option>
                        <option value="Vendido" >Vendido</option>
                    </select>
            </div>

            {{-- <h4>Informações sobre o imóvel (QUANTIDADES)</h4> --}}

            <div class="control-group">
                <label class="control-label">Área Total (em m²)</label>
                <input class="control-menormenor" name="areatotal" type="number"/>
            </div>

            <div class="control-group">
                <label class="control-label">Valor do Imóvel</label>
                <input class="control-menormenor" name="valorimovel" type="number"/>
            </div>

            <div class="control-group">
                <label class="control-label">Valor do Condomínio</label>
                <input class="control-menormenor" name="valorcondominio" type="number"/>
            </div>

            <div class="control-group">
                <label class="control-label">Sala</label>
                <input class="control-menormenor" type="number" name="sala"/>
            </div>

            <div class="control-group">
                <label class="control-label">Quarto</label>
                <input class="control-menormenor" type="number" name="quarto"/>
            </div>

            <div class="control-group">
                <label class="control-label">Banheiro</label>
                <input class="control-menormenor" type="number" name="banheiro"/>
            </div>
        </div>

        <div class="section">
            <br><br>
            <div class="control-group">
                <label class="control-label">Garagem </label>
                <input class="control-menormenor" type="number" name="garagem"/>
            </div>

            <div class="control-group">
                <label class="control-label">Área de Serviço</label>
                <input class="control-menormenor" type="number" name="areaservico"/>
            </div>

            <div class="control-group">
                <label class="control-label">Sala de Jantar</label>
                <input class="control-menormenor" type="number" name="salajantar"/>
            </div>

            <div class="control-group">
                <label class="control-label">Sala de Estar</label>
                <input class="control-menormenor" type="number" name="salaestar"/>
            </div>

            <div class="control-group">
                <label class="control-label">Idade do Imóvel</label>
                <input class="control-menormenor" type="number" name="idadeimovel"/>
            </div>

            <div class="control-group">
                <label class="control-label">IPTU</label>
                <input class="control-menormenor" type="number" name="iptu"/>
            </div>

            <div class="control-group">
                <label class="control-label">Observações</label>
                <input class="control" type="text" name="obs"/>
            </div>

            <br>

            <div id="btn-salvar">
                <input id="botao-salvar" type="submit" value="Salvar">
            </div>

        </div>

        <div class="section"> <h3>Endereço do Imóvel</h3>    
            
            <div class="control-group">
                <label class="control-label">Cep:</label>
                <input class="control-menor" name="cep" type="text" id="cep" value="" maxlength="9" />
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