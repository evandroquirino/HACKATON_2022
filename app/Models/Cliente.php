<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome', 
        'email', 
        'telefone', 
        'cpf', 
        'cidade', 
        'endereco', 
        'bairro', 
        'numero'
    ];
    use HasFactory;
}
