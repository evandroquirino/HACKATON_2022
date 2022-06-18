<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Response;
use App\Models\Survey;
use App\Models\User;
use Illuminate\Http\Request;

class UserSurveysResponseController extends Controller
{
    private $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function index(User $user, Survey $survey, Request $request)
    {
        return $user->surveys()->with('responses')->get();
    }
}
