<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HorarioFuncionamentoDelivery;
use App\Http\Services\HorarioFuncionamentoDeliveryValidateService;

class HorarioFuncionamentoDeliveryController extends BaseController
{
    public function index()
    {
        return HorarioFuncionamentoDelivery::with("periodo")
            ->with("unidade")
            ->with("fuso_horario")
            ->get();
    }

    public function create(Request $request)
    {
        $horarioFuncionamentoValidate = new HorarioFuncionamentoDeliveryValidateService;

        $validatedData = $request->validate($horarioFuncionamentoValidate->getValidateRulesCreate());

        $horarioFuncionamento = HorarioFuncionamentoDelivery::create($validatedData);

        return response(['data' => $horarioFuncionamento, 'message' => 'Dados inseridos com sucesso']);
    }

    public function update(Request $request, $id)
    {
        $horarioFuncionamentoValidate = new HorarioFuncionamentoDeliveryValidateService;

        $validatedData = $request->validate($horarioFuncionamentoValidate->getValidateRulesUpdate());


        $horarioFunctionamento = HorarioFuncionamentoDelivery::find($id);

        if (!empty($horarioFunctionamento)) {
            $horarioFunctionamento->fill($validatedData);
            $horarioFunctionamento->save();
            return response(['data' => $horarioFunctionamento, 'message' => 'Dados atualizados com sucesso']);
        } else {
            return response(['message' => 'Registro não encontrado']);
        }
    }
}
