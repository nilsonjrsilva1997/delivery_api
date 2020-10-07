<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormaPagamento;

class FormaPagamentoController extends Controller
{
    public function index()
    {
        return FormaPagamento::all();
    }

    public function show($id)
    {
        $formaPagamento = FormaPagamento::find($id);
        if(!empty($formaPagamento)) {
            return $formaPagamento;
        } else {
            return response(['message' => 'Forma de pagamento  não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
        ]);
        
        return FormaPagamento::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'string|max:255',
        ]);

        $formaPagamento = FormaPagamento::find($id);

        if(!empty($formaPagamento)) {
            $formaPagamento->fill($validatedData);
            $formaPagamento->save();
            return $formaPagamento;
        } else {
            return response(['message' => 'Forma de pagamento  não encontrado']);
        }
    }

    public function destroy($id)
    {
        $formaPagamento = FormaPagamento::find($id);

        if(!empty($formaPagamento)) {
            FormaPagamento::find($id)->delete();
        } else {
            return response(['message' => 'Forma de pagamento  não encontrado']);
        }
    }
}
