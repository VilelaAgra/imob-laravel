<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function cadastrar() {
        return view('cliente.cadastrar');   
    }
    
    public function salvar(Request $request) {

        
        $request->validate([
            'tipo'              => 'required',
            'nome'              => 'required',
            'cpf'               => 'required',
            'rg'                => 'required',
            'telefone'          => 'required',
            'celular'           => 'required',
            'datanasc'          => 'required',
            'email'             => 'required|email',
            'status'            => 'required',
            'obs'               => 'required',

            'cep'               => 'required',
            'rua'               => 'required',
            'bairro'            => 'required',
            'cidade'            => 'required',
            'uf'                => 'required',
            'complemento'       => 'nullable'
        ]);
        
        Cliente::create($request->all());
            
        
        return redirect()->route('cliente.buscar')->with('msg', 'Dados salvo com sucesso');    
    }
    
    // Abre a tela com a view buscar imovel
    
    public function editar($id) {
        
        $dados = ['cliente' => Cliente::find($id)];
        return view('cliente.editar', $dados);
    }

    public function excluir($id) {
        $request->validate([
            'status'              => 'required'
        ]);
    
        Cliente::where('id', $id)->update($request->except(['_token']));
    
        return redirect()->route('cliente.buscar');
    }
    
    public function atualizar(Request $request, $id) {
        $request->validate([
            'tipo'              => 'required',
            'nome'              => 'required',
            'cpf'               => 'required',
            'rg'                => 'required',
            'telefone'          => 'required',
            'celular'           => 'required',
            'datanasc'          => 'required',
            'email'             => 'required|email',
            'obs'               => 'nullable',
            'status'            => 'required',
            'cep'               => 'required',
            'rua'               => 'required',
            'bairro'            => 'required',
            'cidade'            => 'required',
            'uf'                => 'required',
        ]);
    
        Cliente::where('id', $id)->update($request->except(['_token']));
    
        return redirect()->route('cliente.buscar');
    }
    
    public function buscar(Request $request) {
    
        //Paginação
        $exibirPorPagina = 3;
        $offset = ($exibirPorPagina * ($request->query('page', 1)-1));
        $paginacao = Cliente::paginate($exibirPorPagina); //Exibe 5 elementos por página
    
        $cliente = Cliente::limit($exibirPorPagina) //Quantos valores devem ser exibido 
                        ->offset($offset) //Começa a exibir a apartir de qual valor
                        ->get();
        
        $dados = [
            'submenu'   => 'listar',
            'cliente'    => $cliente,
            'paginacao' => $paginacao
        ];
        return view('cliente.buscar', $dados);
    }
    
    }
    