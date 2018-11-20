<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Imovel;

class ImovelController extends Controller
{

   
// Abre a view com a tela de cadastro
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
        'banheiro'          => 'required|integer',
        'garagem'           => 'required|integer',
        'areaservico'       => 'required|integer',
        'salajantar'        => 'required|integer',
        'salaestar'         => 'required|integer',
        'idadeimovel'       => 'required|integer',
        'iptu'              => 'required|numeric',
        'obs'               => 'required'

    ]);
    
    //Cadastra e recupera o imovel cadastrado
    $imovel = Imovel::create($request->all());
        
    
    return redirect()->route('imovel.buscar')->with('msg', 'Dados salvo com sucesso');    
}

// Abre a tela com a view buscar imovel

public function editar($id) {
    $dados = ['imovel' => Imovel::find($id)];
    return view('imovel.editar', $dados);
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
        'banheiro'          => 'required|integer',
        'garagem'           => 'required|integer',
        'areaservico'       => 'required|integer',
        'salajantar'        => 'required|integer',
        'salaestar'         => 'required|integer',
        'idadeimovel'       => 'required|integer',
        'iptu'              => 'required|numeric',
        'obs'               => 'required'

    ]);

    Imovel::where('id', $id)->update($request->except(['_token']));

    return redirect()->route('imovel.buscar');
}

public function buscar(Request $request) {

    //Paginação
    $exibirPorPagina = 5;
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
    return view('imovel.buscar', $dados);
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
