<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request, User $user)
    {
        $credentials = $request->only('email', 'password');

        if(!auth()->attempt($credentials)) abort(401, 'Invalid credentials');

        $token = $user->createToken($request->email);

        return response()->json([
            'data' => [
                'token' => $token->plainTextToken,
            ]
            ]);
    }

    public function logout()
    {
        auth()->logout();

        return response()->json([
            'data' => [
                'message' => 'Logged out successfully',
            ]
            ]);
    }
}
