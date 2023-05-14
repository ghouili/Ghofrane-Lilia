<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\RDVController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {

    Route::resource('rdv', RDVController::class);
    Route::post('/auth/logout', [AuthController::class, 'Logout']);
    Route::get('users', [AuthController::class, 'Index']);
});

Route::post('/auth/register', [AuthController::class, 'Register']);
Route::post('/auth/login', [AuthController::class, 'Login']);

Route::post('/auth/verify', [AuthController::class, 'Validate_Mail']);
Route::post('/auth/update_pass', [AuthController::class, 'Update_forgoten_password']);
