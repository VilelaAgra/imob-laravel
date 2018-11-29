<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{

    protected $table = 'imovels';

    protected $fillable = [
        'tipoimovel',
        'classificacao',
        'situacao',
        'areatotal',
        'valorimovel',
        'valorcondominio',
        'suite',
        'quarto',
        'banheiro',
        'garagem',
        'areaservico',
        'salajantar',
        'salaestar',
        'idadeimovel',
        'iptu',
        'obs',
        'cep',
        'rua',
        'bairro',
        'cidade',
        'uf',
        'ibge',
        'lote',
        'quadra',
        'complemento'
    ];

}



