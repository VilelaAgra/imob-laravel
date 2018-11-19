<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{

    protected $fillable = [
        'tipoimovel',
        'classificacao',
        'situacao',
        'areatotal',
        'valorimovel',
        'valorcondominio',
        'sala',
        'quarto',
        'banheiro',
        'garagem',
        'areaservico',
        'salajantar',
        'salaestar',
        'idadeimovel',
        'iptu',
        'obs'
    ];



}

