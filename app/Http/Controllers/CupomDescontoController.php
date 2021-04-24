<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CupomDesconto;
use DB;
use App\Http\Services\CupomDescontoValidateService;
use Carbon\Carbon;

class CupomDescontoController extends BaseController
{
    public function create(Request $request)
    {
        $cupom = CupomDesconto::where('codigo', $request->codigo)
            ->where('unidade_id', $request->unidade_id)
            ->where('usos', '>', '0')
            ->where('status', 'ATIVADO')
            ->whereDate('validade', '>',  Carbon::now()->toDateString())
            ->first();

        if ($cupom) {
            return response(["message" => "Esse cupom de desconto já está cadastrado"], 422);
        } else {
            $cupomValidate = new CupomDescontoValidateService();
            $validatedData = $request->validate($cupomValidate->getValidateRulesCreate());

            $cupom = CupomDesconto::create($validatedData);

            return $cupom;
        }
    }

    public function showByCode(Request $request)
    {
        $validatedData = $request->validate([
            "codigo" => "string|max:255",
            "unidade_id" => "integer|exists:unidades,id",
        ]);

        $cupom = CupomDesconto::where('codigo', $validatedData['codigo'])
            ->where('unidade_id', $validatedData['unidade_id'])
            ->where('usos', '>', '0')
            ->where('status', 'ATIVADO')
            ->whereDate('validade', '>',  Carbon::now()->toDateString())
            ->first();

        if ($cupom) {
            return $cupom;
        } else {
            return response(['message' => 'Cupom não existente'], 404);
        }
    }
}
