<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function cadastrar() {
        return view('funcionario.cadastrar');   
    }
    
    public function salvar(Request $request) {
        
        $request->validate([
            'nome'              => 'required',
            'funcao'            => 'required',
            'dataadm'           => 'required',
            'datanasc'          => 'required',
            'cpf'               => 'required',
            'rg'                => 'required',
            'senha'             => 'required',
            'telefone'          => 'required',
            'celular'           => 'required',
            'email'             => 'required',
            'obs'               => 'required',
            'status'            => 'required',
            'cep'               => 'required',
            'rua'               => 'required',
            'bairro'            => 'required',
            'cidade'            => 'required',
            'uf'                => 'required',
            'complemento'       => 'required'

        ]);
        

        Funcionario::create($request->all());
            
        
        return redirect()->route('funcionario.buscar')->with('msg', 'Dados salvo com sucesso');    
    }
    
    // Abre a tela com a view buscar imovel
    
    public function editar($id) {
        
        $dados = ['funcionario' => Funcionario::find($id)];
        return view('funcionario.editar', $dados);
    }

    public function excluir($id) {
        $request->validate([
            'status'              => 'required'
        ]);
    
        Funcionario::where('id', $id)->update($request->except(['_token']));
    
        return redirect()->route('funcionario.buscar');
    }
    
    public function atualizar(Request $request, $id) {
        $request->validate([
            //'required|unique:posts|max:255'
            'nome'              => 'required',
            'funcao'            => 'required',
            'dataadm'           => 'required',
            'datanasc'          => 'required',
            'cpf'               => 'required',
            'rg'                => 'required',
            'senha'             => 'required',
            'telefone'          => 'required',
            'celular'           => 'required',
            'email'             => 'required',
            'obs'               => 'required',
            'status'            => 'required',

            'cep'               => 'required',
            'rua'               => 'required',
            'bairro'            => 'required',
            'cidade'            => 'required',
            'uf'                => 'required',
            'complemento'       => 'required'

        ]);
    
        Funcionario::where('id', $id)->update($request->except(['_token']));
    
        return redirect()->route('funcionario.buscar');
    }
    
    public function buscar(Request $request) {
    
        //Paginação
        $exibirPorPagina = 3;
        $offset = ($exibirPorPagina * ($request->query('page', 1)-1));
        $paginacao = Funcionario::paginate($exibirPorPagina); //Exibe 5 elementos por página
    
        $funcionario = Funcionario::limit($exibirPorPagina) //Quantos valores devem ser exibido 
                        ->offset($offset) //Começa a exibir a apartir de qual valor
                        ->get();
        
        $dados = [
            'submenu'       => 'listar',
            'funcionario'    => $funcionario,
            'paginacao'     => $paginacao
        ];
        return view('funcionario.buscar', $dados);
    }

    }
    
