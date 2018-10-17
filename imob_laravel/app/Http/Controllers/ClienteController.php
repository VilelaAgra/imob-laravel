<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function cadastrar() {
        return view('cliente.cadastrar');
    }
    
    // Abre a tela com a view editar imovel
    
    public function buscar() {
        return view('cliente.buscar');
    }
}
