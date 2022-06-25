<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        //'users_id',
        'title',
        'description'
        
    ];

    public function responses()
    {
        return $this->hasMany(Response::class);
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

}
