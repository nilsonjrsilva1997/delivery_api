<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HorarioFuncionamento;

class HorarioFuncionamentoController extends Controller
{
    public function index()
    {
        return HorarioFuncionamento::all();
    }

    public function show($id)
    {
        $horarioFuncionamento = HorarioFuncionamento::find($id);
        if(!empty($horarioFuncionamento)) {
            return $horarioFuncionamento;
        } else {
            return response(['message' => 'Horário  não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'abertura' => 'required|date_format:H:i',
            'fechamento' => 'required|date_format:H:i',
            'restaurante_id' => 'required|integer|exists:restaurantes,id',
        ]);
        
        return HorarioFuncionamento::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'abertura' => 'date_format:H:i',
            'fechamento' => 'date_format:H:i',
            'restaurante_id' => 'integer|exists:restaurantes,id',
        ]);

        $horarioFuncionamento = HorarioFuncionamento::find($id);

        if(!empty($horarioFuncionamento)) {
            $horarioFuncionamento->fill($validatedData);
            $horarioFuncionamento->save();
            return $horarioFuncionamento;
        } else {
            return response(['message' => 'Horário  não encontrado']);
        }
    }

    public function destroy($id)
    {
        $horarioFuncionamento = HorarioFuncionamento::find($id);

        if(!empty($horarioFuncionamento)) {
            HorarioFuncionamento::find($id)->delete();
        } else {
            return response(['message' => 'Horário  não encontrado']);
        }
    }
}
