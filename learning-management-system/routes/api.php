<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Auth functions:
Route::prefix('auth')->group(base_path('routes/api/auth.php'));
