<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempoEsperaEntrega;

class TempoEsperaEntregaController extends Controller
{
    public function index()
    {
        return TempoEsperaEntrega::all();
    }

    public function show($id)
    {
        $tempoEspera = TempoEsperaEntrega::find($id);
        if (!empty($tempoEspera)) {
            return $tempoEspera;
        } else {
            return response(['message' => 'Tempo de espera da entrega não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'tempo_minimo' => 'required|date_format:H:i',
            'tempo_maximo' => 'required|date_format:H:i',
            'restauranteId' => 'required|integer|exists:restaurantes,id',
        ]);

        return TempoEsperaEntrega::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tempo_minimo' => 'date_format:H:i',
            'tempo_maximo' => 'date_format:H:i',
            'restauranteId' => 'integer|exists:restaurantes,id',
        ]);

        $tempoEspera = TempoEsperaEntrega::find($id);

        if (!empty($tempoEspera)) {
            $tempoEspera->fill($validatedData);
            $tempoEspera->save();
            return $tempoEspera;
        } else {
            return response(['message' => 'Tempo de espera da entrega não encontrado']);
        }
    }

    public function destroy($id)
    {
        $tempoEspera = TempoEsperaEntrega::find($id);

        if (!empty($tempoEspera)) {
            TempoEsperaEntrega::find($id)->delete();
        } else {
            return response(['message' => 'Tempo de espera da entrega não encontrado']);
        }
    }
}
