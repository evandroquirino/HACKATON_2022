<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Response;


class ClientNoSurveysController extends Controller
{
    public function index($client_id)
    {
        $surveys = Response::NoreadResponseSurveys($client_id); 
        
        return response()->json($surveys);
 
    }
}
