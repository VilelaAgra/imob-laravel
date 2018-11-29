<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;
use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Proposta;

class PropostaController extends Controller
{
    public function cadastrar() {
        return view('imovel.cadastrar');   
}

public function salvar(Request $request) {
   
    $request->validate([
        'tipoimovel'        => 'required',
        'classificacao'     => 'required',
        'situacao'          => 'required',
        'areatotal'         => 'required|numeric',
        'valorimovel'       => 'required|numeric',
        'valorcondominio'   => 'required|numeric',
        'sala'              => 'required|integer',
        'quarto'            => 'required|integer',
        'suite'             => 'required|integer',
        'banheiro'          => 'required|integer',
        'garagem'           => 'required|integer',
        'areaservico'       => 'required|integer',
        'salajantar'        => 'required|integer',
        'salaestar'         => 'required|integer',
        'idadeimovel'       => 'required|integer',
        'iptu'              => 'required|numeric',
        'obs'               => 'required',
        'cep'               => 'required',    
        'rua'               => 'required',
        'bairro'            => 'required',
        'cidade'            => 'required',
        'uf'                => 'required'
    ]);
    
    Imovel::create($request->all());
        
    
    return redirect()->route('imovel.buscar')->with('msg', 'Dados salvo com sucesso');    
}

// Abre a tela com a view buscar imovel

public function buscarImovel($id) {
    
    $dados = ['imovel' => Imovel::find($id)];
    return view('proposta.selecionarFunc', $dados);
}

public function atualizar(Request $request, $id) {
    $request->validate([
        'tipoimovel'        => 'required',
        'classificacao'     => 'required',
        'situacao'          => 'required',
        'areatotal'         => 'required|numeric',
        'valorimovel'       => 'required|numeric',
        'valorcondominio'   => 'required|numeric',
        'sala'              => 'required|integer',
        'quarto'            => 'required|integer',
        'suite'            => 'required|integer',
        'banheiro'          => 'required|integer',
        'garagem'           => 'required|integer',
        'areaservico'       => 'required|integer',
        'salajantar'        => 'required|integer',
        'salaestar'         => 'required|integer',
        'idadeimovel'       => 'required|integer',
        'iptu'              => 'required|numeric',
        'obs'               => 'required',
        'cep'               => 'required',    
        'rua'               => 'required',
        'bairro'            => 'required',
        'cidade'            => 'required',
        'uf'                => 'required'

    ]);

    Imovel::where('id', $id)->update($request->except(['_token']));

    return redirect()->route('imovel.buscar');
}

public function buscarImovel(Request $request) {

    //Paginação
    $exibirPorPagina = 3;
    $offset = ($exibirPorPagina * ($request->query('page', 1)-1));
    $paginacao = Imovel::paginate($exibirPorPagina); //Exibe 5 elementos por página

    $imovel = Imovel::limit($exibirPorPagina) //Quantos valores devem ser exibido 
                    ->offset($offset) //Começa a exibir a apartir de qual valor
                    ->get();
    
    $dados = [
        'submenu'   => 'listar',
        'imovel'    => $imovel,
        'paginacao' => $paginacao
    ];
    return view('proposta.buscarImovel', $dados);
}

/** Abre a view com os dados do livro selecionado */
public function visualizar(int $id) {
    $dados['imovel'] = Imovel::find($id);
    
    return view('visualizar-imovel', $dados);
}

public function excluir($id) {
    Imovel::destroy($id);
    return redirect()->route('imovel.buscar');
}

}
