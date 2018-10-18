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
        'Tipo do Imóvel'    => 'required',
        'Classificação' => 'required',
        'Situação'      => 'required',
        'Valor do Imóvel'   => 'required|numeric',
        'iptu'          => 'required|numeric'


    ]);


    return redirect()->route('imovel.cadastrar')->with('msg', 'Dados salvo com sucesso');    
}

// Abre a tela com a view buscar imovel

public function buscar() {
    return view('imovel.buscar');
}

}
