<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            "nome_completo" => "required|string|max:255",
            "email" => "required|email|unique:users,email",
            "cpf" => 'required|string|unique:users,cpf',
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

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            "nome_completo" => "string|max:255",
            "email" => "email|unique:users,email",
            "cpf" => 'string|unique:users,cpf',
            'celular' => ['regex:/(\(\d{2}\)\s)(\d{4,5}\-\d{4})/'],
        ]);

        $user = Auth::user();

        $user->fill($validatedData);
        $user->save();

        return response(['user' => $user]);
    }

    public function meusPedidos()
    {
        $user_id = Auth::id();

        $pedido = Pedido::with("produto_pedido")
            ->with('unidade')
            ->with("produto_pedido.produto")
            ->with("produto_pedido.pedido_adicional")
            ->with("produto_pedido.pedido_adicional.pedido_adicional_opcao")
            ->with("enderecos_entrega")
            ->with("cupom_desconto")
            ->where("user_id", $user_id)
            ->get();

        return response(['data' => $pedido, 'message' => 'Pedidos listados com sucesso']);
    }

    public function novaSenha(Request $request)
    {

        $request->validate([
            "password" => "required|string|max:255",
            "confirm_password" => "required|string|max:255",
            "new_password" => "required|string|max:255",
        ]);

        if ($request->password !== $request->confirm_password) {
            return response(['message' => 'Senhas diferentes'], 422);
        }

        $user = Auth::user();

        $authenticated = Auth::guard('web')->attempt([
            'email' => $user->email,
            'password' => $request->password,
        ]);

        if (!$authenticated) {
            return response(['data' => null, 'message' => 'Senha incorreta'], 422);
        }

        $passwordHash = bcrypt($request->new_password);

        $user->fill(['password' => $passwordHash]);
        $user->save();

        return response(['data' => $user, 'message' => 'Senha atualizada com sucesso']);
    }

    public function desativarConta()
    {
        $user = Auth::user();

        $user->delete();

        return response(['data' => null, 'message' => 'Usuário desativado com sucesso']);
    }
}
