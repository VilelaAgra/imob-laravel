<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{

    protected $fillable = [
        'tipoimovel',
        'classificacao',
        'situacao',
        'valorimovel',
        'iptu'
    ];



}

