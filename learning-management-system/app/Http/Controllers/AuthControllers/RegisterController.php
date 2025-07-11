<?php

namespace App\Http\Controllers\AuthControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequests\RegisterRequest;
use App\Services\AuthServices\RegisterService;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request) {
        RegisterService::register($request);
        return response()->json([
            'message' => 'Register done succefully'
        ],201);
    }
}
