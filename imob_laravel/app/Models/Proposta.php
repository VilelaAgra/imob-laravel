<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    protected $fillable = [
        'numProposta',
        'data',
        'prazo',
        'valorProposta',
        'valorEntrada',
        'obs',
        'status'
    ]; 
    // colocar os tipo relacionados a cliente
}

// inserir aqui os relacionamentos: CLIENTE, FUNCIONARIO, CLIENTE 2 (OU VENDEDOR) e IMOVEL