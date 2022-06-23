<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request, User $user)
    {
        $credentials = $request->only('name', 'email', 'password');

        if(!auth()->attempt($credentials)) abort(401, 'Invalid credentials');

        //$user->save();
        $token = $user->createToken('auth_token');

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
