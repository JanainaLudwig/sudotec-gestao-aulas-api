<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @group Passport login
 */
class AuthController extends Controller
{
    /**
     * Login
     *
     * @bodyParam username string required Email of the user
     * @bodyParam password string required Password of the user
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Psr\Http\Message\StreamInterface
     */
    public function login(Request $request)
    {
        $http = new Client([
            'base_uri' => config('app.url')
        ]);

        try {
            $response = $http->post('/oauth/token', [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => config('passport.grant.client_id'),
                    'client_secret' => config('passport.grant.client_secret'),
                    'username' => $request->username,
                    'password' => $request->password,
                ]
            ]);
        } catch (\GuzzleHttp\Exception\BadResponseException $e) {
            if ($e->getCode() === 400) {
                return response()->json(['message' => 'Invalid Request. Please enter a username and a password.', $e->getMessage()], $e->getCode());
            } else if ($e->getCode() === 401) {
                return response()->json(['message' => 'Your credentials are incorrect. Please try again.', $e->getMessage()], $e->getCode());
            }
            return response()->json(['message' => 'Something went wrong on the server.', $e->getMessage()], $e->getCode());
        }

        return $response->getBody();
    }

    /**
     * Logout
     */
    public function logout() {
        $user = Auth::user()->token();
        $user->revoke();

        return response()->json([
            'message' => 'Unauthenticated',
        ], 200);
    }
}
