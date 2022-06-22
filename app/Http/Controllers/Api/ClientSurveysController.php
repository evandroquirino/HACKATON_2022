<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Response;
use App\Models\Survey;
use Illuminate\Http\Request;

class ClientSurveysController extends Controller
{
    // public function index(Client $client, Survey $survey, Response $response)
    // {
    //     $surveysResponses = Survey::where('client_id', $client->id)->get();
    //     return response()->json($surveysResponses);
    // } 
    public function index(Client $client,Survey $survey, Response $response)
    {
        // $surveysResponses = Response::where('client_id', $client->id)->get();
        // return response()->json($surveysResponses);
        $surveysResponses = Response::where('client_id', $client->id)->get();
        return response()->json($surveysResponses);
    }  
}
