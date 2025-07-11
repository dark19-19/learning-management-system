<?php

namespace App\Services\AuthServices;

use App\Http\Requests\AuthRequests\LoginRequest;
use App\Models\User;
use App\Services\Service;
use Illuminate\Support\Facades\Auth;

class LoginService extends Service
{
    public static function login(LoginRequest $request) {
        $validatedData = $request->validated();
        if (!Auth::attempt($validatedData)) {
            throw new \Exception('Invalid password or email!', 403);
        }
        $user = User::where('email', $validatedData['email'])->firstOrFail();
        return $user->createToken('authToken')->plainTextToken;
    }
}
