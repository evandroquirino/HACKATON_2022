<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 
        'email', 
        'phone', 
        'cpf', 
        'city', 
        'adress', 
        'district', 
        'house_number'
    ];
    use HasFactory;

    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
