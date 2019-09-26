<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

/**
 * @group Passport login
 */
class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['message' => 'Your credentials are incorrect. Please try again.'], 401);
        }

        $user = Auth::user();

        $token =  $user->createToken(config('app.name'))->accessToken;

        return response()->json(['access_token' => $token]);
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            $request->user()->token()->delete();
        }

        return response()->json(['message' => 'User logged out.'], 200);
    }
}
