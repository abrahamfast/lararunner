<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User;
use App\Http\Controllers\Api\Auth\Token;
use App\Http\Controllers\Api\Auth\Register;

Route::post('/auth/token', Token::class);
Route::post('/auth/register', Register::class);

Route::middleware('auth:sanctum')->get('/user', User::class);




