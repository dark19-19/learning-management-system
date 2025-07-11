<?php

namespace App\Services\AuthServices;

use App\Http\Requests\AuthRequests\RegisterRequest;
use App\Models\Log;
use App\Models\User;
use App\Services\Service;
use Illuminate\Support\Facades\Hash;

class RegisterService extends Service
{
    public static function register(RegisterRequest $request) {
        $validatedData = $request->validated();
        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = User::create($validatedData);

        Log::register('register', $user->id);
    }
}
