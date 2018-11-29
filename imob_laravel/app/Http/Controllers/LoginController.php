<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class LoginController extends Controller
{
   

    public function login (){
        return view ('login');
    }

    public function logar (Request $request){
        $dados = Funcionario::Where('cpf', $request->cpf)->first();
        
        if ($request->cpf ==  $dados->cpf && $request->senha == $dados->senha) {
                $isADM = $dados->funcao;
                if($isADM = "Administrador"){
                    session(['usuario' => 'Administrador']);
                }
            return redirect()->route('home');
        }
        return redirect()->route('login')->with('erro', 'Senha ou Login inválido');

    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->route('login'); 
    }
}

