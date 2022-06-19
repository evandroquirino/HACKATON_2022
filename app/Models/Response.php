<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $fillable = [
        'survey_id',
        'client_id',
        'value'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
