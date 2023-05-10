<?php

namespace App\Http\Controllers\Api\Login;

use App\Http\Controllers\Controller;
use http\Client\Curl\User;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    /**
     * Function to log in a HTTP user
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|Response|\Illuminate\Http\Response
     */
    public function login(Request $request)
    {

        if (!Auth::attempt($request->only('username', 'password'))) {
            return response('Your username or password are wrong', 401);
        }

        $user = User::where('username', $request['username'])->first();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response([
            "message" => "User Verified",
            "token_type" => "Bearer",
            "token" => $token,
        ], 200);

    }
}
