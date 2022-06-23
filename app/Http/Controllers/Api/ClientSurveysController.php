<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Response;
use App\Models\Survey;
use Illuminate\Http\Request;

class ClientSurveysController extends Controller
{
    public function index(Client $client, Survey $survey, Response $response)
    {
        $response = $response->where('client_id', $client->id)->get();
        return response()->json($response);
    }
}
