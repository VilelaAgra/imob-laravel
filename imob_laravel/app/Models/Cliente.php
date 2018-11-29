<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        // 9 campos de cliente
        'tipo',
        'nome',
        'cpf',
        'rg',
        'telefone',
        'celular',
        'datanasc',
        'email',
        'status',
        'obs',
        // 6 campos de endereço
        'cep',
        'rua',
        'bairro',
        'cidade',
        'uf',
        'complemento'
        
    ]; 
    // colocar os tipo relacionados a cliente
}