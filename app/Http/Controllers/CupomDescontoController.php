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
            ->whereDate('validade', '>',  Carbon::now()->toDateString())
            ->first();

        if ($cupom) {
            return response(["message" => "Esse cupom de desconto já está cadastrado"], 422);
        } else {
            $cupomValidate = new CupomDescontoValidateService();
            $validatedData = $request->validate($cupomValidate->getValidateRulesCreate());

            return CupomDesconto::create($validatedData);
        }
    }
}
