<?php

namespace App\Http\Controllers\AuthControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequests\LoginRequest;
use App\Services\AuthServices\LoginService;

class LoginController extends Controller
{
    public function login(LoginRequest $request) {
        $token = LoginService::login($request);
        return response()->json([
            'message' => 'Login has been done successfully',
            'token' => $token
        ], 200);
    }
}
