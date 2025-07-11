<?php

namespace App\Http\Controllers\AuthControllers;

use App\Http\Controllers\Controller;
use App\Services\AuthServices\LogoutService;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request) {
        LogoutService::logout($request);
        return response()->json([
            'message' => 'You have been logged out.'
        ],200);
    }
}
