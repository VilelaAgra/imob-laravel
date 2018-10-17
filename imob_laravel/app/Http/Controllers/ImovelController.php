<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImovelController extends Controller
{

   
// Abre a view com a tela de cadastro

public function cadastrar() {
    return view('imovel.cadastrar');
}

// Abre a tela com a view editar imovel

public function buscar() {
    return view('imovel.buscar');
}

}
