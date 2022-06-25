<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Response;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientSurveysController extends Controller
{
    public function index(Client $client, Survey $survey, Response $response)
    {
        return Response::orderBy('responses.id', 'desc')
        ->join('clients', 'clients.id', '=', 'responses.client_id')
        ->join('surveys', 'surveys.id', '=', 'responses.survey_id')
        ->select('responses.id as response_id', 'clients.name as name_client', 'clients.id as client_id', 'surveys.title as title_survey', 'surveys.id as id_survey', 'responses.value')
        ->where('responses.client_id', $client->id)
        ->get();
    }
}