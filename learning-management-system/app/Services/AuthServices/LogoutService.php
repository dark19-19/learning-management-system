<?php

namespace App\Services\AuthServices;

use App\Services\Service;
use Illuminate\Http\Request;

class LogoutService extends Service
{
    public static function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();
    }
}
