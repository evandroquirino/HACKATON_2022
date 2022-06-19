<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Response;
use App\Models\Survey;
use App\Models\User;
use Illuminate\Http\Request;

class UserSurveysResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user, Survey $survey, Response $response)
    {
        return $user->surveys()->with('responses')->get();
    }

    public function show(User $user, Survey $survey, Response $response)
    {
        return $response;
    }
}
