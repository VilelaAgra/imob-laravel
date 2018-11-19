<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    protected $fillable = ['isbn', 'titulo', 'autor', 'resumo', 'categoria']; 
    // colocar os tipo relacionados a cliente
}
