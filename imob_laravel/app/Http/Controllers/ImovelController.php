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
        
    
    return redirect()->route('imovel.cadastrar')->with('msg', 'Dados salvo com sucesso');    
}

// Abre a tela com a view buscar imovel

public function buscar() {
    return view('imovel.buscar');
}

}
