<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class Register extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'name' => 'required',
            'device_name' => 'required'
        ]);

        $user = User::create($request->all());

        return [
            'token' => $user->createToken($request->device_name)->plainTextToken
        ];
    } 
}
