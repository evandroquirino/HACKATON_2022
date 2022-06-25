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

    public static function readRespostaPesquisa($client_id) {
        return Response::orderBy('responses.updated_at', 'desc')
        ->join('clients', 'clients.id', '=', 'responses.client_id')
        ->join('surveys', 'surveys.id', '=', 'responses.survey_id')
        ->select('responses.id as id_response', 'clients.name as name_client', 'clients.id as id_client', 'surveys.title as title_survey', 'surveys.id as id_survey', 'responses.value')
        ->where('responses.client_id', $client_id)
        ->get();
    }

    public static function NoreadRespostaPesquisa($client_id) {
        return Response::orderBy('responses.updated_at', 'desc')
        ->join('clients', 'clients.id', '=', 'responses.client_id')
        ->join('surveys', 'surveys.id', '=', 'responses.survey_id')
        ->select('responses.id as id_response', 'clients.name as name_client', 'clients.id as id_client', 'surveys.title as title_survey', 'surveys.id as id_survey', 'responses.value')
        ->whereNotin('responses.client_id', [$client_id])
        ->get();
    }
}
