{{-- COLOCAR OS JAVASCRIPT DO WEBSERVICE --}}
@extends('home')
@section('conteudo_principal')
    
    <div>
        <h2>CADASTRAR IMÓVEL</h2>
    </div>


    
    <form action="{{route('imovel.salvar')}}" enctype="multipart/form-data" method="post">
     {{ csrf_field() }}
        
        @if ($errors->any())
        <div class="alert alert-danger" style="color: firebrick">
            <strong>Erro!</strong>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif
       
        @if (session('msg'))
        <!-- LOGIN ou SENHA INCORRETA -->
            <div class="alert alert-danger" style="color: green">
                <strong></strong> {{session('msg')}}  
            </div>
        <!-- FIM [LOGIN OU SENHA INCORRETA] -->
        @endif 

        <fieldset id="campo">
            <legend>Dados do Imóvel</legend>

            {{-- <label for="cod-imovel">Código:
                <input type="number" name="id_imovel" id="cod-imovel" value="" />
            </label>
            <br/> --}}

            <label for="tipo-imovel">Tipo do Imóvel:
                <select name="tipoimovel" id="tipo-imovel">
                    <option value="">Selecione</option>
                    <option value="1">Apartamento</option>
                    <option value="2">Casa</option>
                    <option value="3">Chácara</option>
                </select>
            </label>
            
            <br/>
            
            <label for="classificacao">Classificação:
                <select name="classificacao" id="classificacao">
                    <option value="">Selecione</option>
                    <option value="1">Residencial</option>
                    <option value="2">Comercial</option>
                </select>
            </label>

            <br/>

            <label for="situacao">Situação:
                <select name="situacao" id="situacao">
                    <option value="">Selecione</option>
                    <option value="1" >Disponivel</option>
                    <option value="2" >Reservado</option>
                    <option value="3" >Vendido</option>
                </select>
            </label>

            <br/>

            <label for="valor-imovel">Valor do Imóvel:
                <input name="valorimovel" type="text" id="valor-imovel" />
            </label>

            <br/>

            <label for="iptu">IPTU:
                <input name="iptu" type="text" id="iptu" />
            </label>

            <br/>

            {{-- <label for="obs">Observações:
                <textarea name="obs" id="obs"></textarea>
            </label> --}}

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
Sala de Janar
Valor do Imovel
PITU
Observações
 -->