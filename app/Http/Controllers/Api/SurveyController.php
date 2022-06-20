<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use App\Models\User;
use Illuminate\Http\Request;

class SurveyController extends Controller
{

    private $survey;

    public function __construct(Survey $survey)
    {
        $this->survey = $survey;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(User $user)
    // {
    //     return $user->surveys;
    // }

        public function index(User $user, Survey $survey)
        {
            
            $surveys = Survey::where('users_id', $user->id)->get();
            return response()->json($surveys);
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->survey->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Survey $survey)
    {
        return $survey;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Survey $survey)
    {
        return $survey->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Survey $survey)
    {
        return $survey->delete();
    }
}
