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
    public function index($client_id)
    {
        $surveys = Response::readRespostaPesquisa($client_id);

        return response()->json($surveys);
        ///////
        // SELECT responses.id as id_response, clients.name as name_client, clients.id as id_client, surveys.title as title_survey, surveys.id as id_survey, responses.value 
        // FROM responses 
        // JOIN clients ON clients.id = responses.client_id 
        // JOIN surveys ON surveys.id = responses.survey_id 
        // WHERE responses.client_id = 6
    }
}