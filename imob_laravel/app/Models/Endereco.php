<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';
    
    protected $fillable = [
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

    public function imoveis() {
        return $this->hasMany (Imovel::class, 'endereco_id');
      }
    
}
