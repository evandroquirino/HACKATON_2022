<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request, User $user)
    {
        
        $userData = $request->only('name', 'email', 'password');
        $userData['password'] = bcrypt($userData['password']);

        if(!$user = $user->create($userData)) abort(500, 'Error creating user');

        $token = $user->createToken("auth_token");

        return response()->json([
            'data' => [
                'user' => $user,
                'token' => $token->plainTextToken,
            ]
            ]);
    }
}
