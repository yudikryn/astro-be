<?php

use App\Http\Controllers\Auth\AuthController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('password/reset', [AuthController::class, 'resetPassword']);
Route::get('user/{email}', [AuthController::class, 'getUserByEmail']);
Route::put('user/{email}/update', [AuthController::class, 'updatePhoneAndNameByEmail']);
Route::get('users', [AuthController::class, 'getUsers']);