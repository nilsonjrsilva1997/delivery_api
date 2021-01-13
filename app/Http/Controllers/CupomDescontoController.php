<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CupomDesconto;
use DB;
use App\Http\Services\CupomDescontoValidateService;

class CupomDescontoController extends BaseController
{
   public function create(Request $request)
   {
        $cupons = DB::table("cupom_descontos")
            ->where(["codigo" => $request->codigo, "unidade_id" => $request->unidade_id])
            ->select(DB::raw("COUNT(*) as num_cupons"))
            ->get();

        if($cupons[0]->num_cupons == 1) {
            return response(["message" => "Esse cupom de desconto já está cadastrado"], 422);
        } else {
            $cupomValidate = new CupomDescontoValidateService();
            $validatedData = $request->validate($cupomValidate->getValidateRulesCreate());

            return CupomDesconto::create($validatedData);
        }
   }
}
