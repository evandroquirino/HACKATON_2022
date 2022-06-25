<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Response;
use Illuminate\Http\Request;

class ClientNoSurveysController extends Controller
{
    public function index($client_id)
    {
        $surveys = Response::NoreadRespostaPesquisa($client_id);

        return response()->json($surveys);
 
    }
}
