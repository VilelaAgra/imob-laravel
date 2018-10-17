<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function cadastrar() {
        return view('funcionario.cadastrar');
    }
    
    // Abre a tela com a view editar imovel
    
    public function buscar() {
        return view('funcionario.buscar');
    }
}
