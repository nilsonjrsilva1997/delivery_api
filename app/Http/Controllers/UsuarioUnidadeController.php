<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioUnidadeController extends Controller
{
    public function associar(Request $request)
    {
        $validatedData = $request->validate([
            'unidade_id' => 'required|integer|exists:unidades,id',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        return \App\UsuarioUnidade::create($validatedData);
    }

    public function desassociar($usuario_id, $unidade_id)
    {
        $usuarioUnidade = \App\UsuarioUnidade::where(['user_id' => $usuario_id, 'unidade_id' => $unidade_id]);

        if(!empty($usuarioUnidade)) {
            if($usuarioUnidade->delete()) {
                return response(['message' => 'Usuario desassociado a unidade com sucesso'], 200);
            } else {
                return response(['message' => 'Erro ao desassociar usuario da unidade'], 422);
            }
        } else {
            return response(['message' => 'Usuario/unidade não encontrados'], 422);
        }
    }
}
