<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   

    public function login (){
        return view ('login');
    }

    public function logar (Request $request){
        if ($request->cpf == '123' && $request->senha == '123') {
            session(['usuario' => 'Hermyson']);
            return redirect()->route('home');
        }
        return redirect()->route('login')->with('erro', 'Senha ou Login inválido');

    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->route('login'); 
    }
}
