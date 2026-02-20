<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Método login()
     * Responsavel por verificar se o email e senha consiste no banco
     */
    public function login(Request $request)
    {
        // Valida os dados vindos do usuário
        $attr = $request->validate([
            'email' => 'required|string|email|',
            'password' => 'required|string|min:6'
        ]);

        // Verifica se o login e senha são validos
        if (!Auth::attempt($attr)) {
            return response()->json(['message' => 'ERROR: Usuário ou Senha Invados.'], 401); // se não for validos
        }

        // Retornar uma mensagens de Sucesso
        return response()->json([
            'message' => 'Login Realizado com Sucesso.', 
            'user' => auth()->user(),
            'token' => auth()->user()->createToken($request['device'].$request['email'])->plainTextToken,
        ],201);
        
    }

    /**
     * Método de logout()
     * Resposnavel por efeturar o logout do usuário
     */
    public function logout()
    {
        // Remove o token do banco
        auth()->user()->tokens()->delete();

        // Retornar uma mensagens de Sucesso
        return [
            'message' => 'Deslogado com Susseso'
        ];
    }

}
