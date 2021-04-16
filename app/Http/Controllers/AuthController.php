<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            "nome_completo" => "required|string|max:255",
            "email" => "required|email|unique:users,email",
            "password" => "required|confirmed",
            "tp_user" => "in:ADM,CLIENTE",
            'celular' => ['required', 'regex:/(\(\d{2}\)\s)(\d{4,5}\-\d{4})/'],
            "aniversario" => "required|date",
        ]);

        $validatedData['password'] = bcrypt($request->password);
        $user = User::create($validatedData);
        $accessToken = $user->createToken('authToken')->accessToken;

        return response(['user' => $user, 'access_token' => $accessToken]);
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            "email" => "email|required",
            "password" => "required",
        ]);

        if (!auth()->attempt($loginData)) {
            return response(['message' => 'Dados inválidos']);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response(['user' => auth()->user(), 'access_token' => $accessToken]);
    }
}
