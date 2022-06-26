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

    public static function readResponseSurvey($client_id) {
        return Response::orderBy('responses.updated_at', 'desc')
        ->join('clients', 'clients.id', '=', 'responses.client_id')
        ->join('surveys', 'surveys.id', '=', 'responses.survey_id')
        ->select(
                'clients.id as id_client',
                'clients.name as name_client', 
                'surveys.id as id_survey', 
                'surveys.title as title_survey',
                'surveys.description as description_survey', 
                'responses.id as id_response',
                'responses.value')
        ->where('responses.client_id', $client_id)
        ->get();
    }

    public static function NoreadResponseSurveys($client_id) {
        
            return Response::orderBy('responses.updated_at', 'desc')
            ->join('clients', 'clients.id', '=', 'responses.client_id')
            ->join('surveys', 'surveys.id', '=', 'responses.survey_id')
            ->select( 
                    'surveys.id as id_survey', 
                    'surveys.title as title_survey', 
                    'surveys.description as description_survey'
                    )
            ->whereNotin('responses.client_id', [$client_id])
            //->orWhere('surveys.id', '=', '26')
            ->get();

            
        }
}
