<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionarios';

    protected $fillable = [
        'nome',
        'funcao',
        'dataadm',
        'datanasc',
        'rg',
        'cpf',
        'telefone',
        'celular',
        'status',
        'email',
        'senha',
        'cep',
        'rua',
        'bairro',
        'cidade',
        'uf',
        'status',
        'complemento'

    ]; 
    // colocar os tipo relacionados a cliente
}