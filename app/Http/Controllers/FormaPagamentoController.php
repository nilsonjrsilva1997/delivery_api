<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormaPagamento;

class FormaPagamentoController extends Controller
{
    public function index()
    {
        $forma_pagamento = FormaPagamento::all();
        return response(['data' => $forma_pagamento, 'message' => 'Formas de pagamento listadas com sucesso']);
    }

    public function show($id)
    {
        $forma_pagamento = FormaPagamento::find($id);

        if (!empty($forma_pagamento)) {

            return response(['data' => $forma_pagamento, 'message' => 'Formas de pagamento listadas com sucesso']);
        } else {
            return response(['message' => 'Forma de pagamento não encontrada']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $fileNameToStore = '';

        if ($request->hasFile('icone')) {
            $filenameWithExt = $request->file('icone')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('icone')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('icone')->storeAs('public/images', $fileNameToStore);
        }

        $validatedData['icone'] = $fileNameToStore;

        $forma_pagamento = FormaPagamento::create($validatedData);

        return response(['data' => $forma_pagamento, 'message' => 'Formas de pagamento criada com sucesso']);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'string|max:255',
        ]);

        $forma_pagamento = FormaPagamento::find($id);

        if (!empty($forma_pagamento)) {

            $fileNameToStore = '';

            if ($request->hasFile('icone')) {
                $filenameWithExt = $request->file('icone')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('icone')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $path = $request->file('icone')->storeAs('public/images', $fileNameToStore);
            }

            if ($fileNameToStore !== '') {
                $validatedData['icone'] = $fileNameToStore;
            }

            $forma_pagamento->fill($validatedData);
            $forma_pagamento->save();

            return response(['data' => $forma_pagamento, 'message' => 'Forma de pagamento atualizada com sucesso']);
        } else {
            return response(['message' => 'Forma de pagamento  não encontrado']);
        }
    }

    public function destroy($id)
    {
        $formaPagamento = FormaPagamento::find($id);

        if (!empty($formaPagamento)) {
            unlink(storage_path('app/public/images/' . $formaPagamento->icone));
            FormaPagamento::find($id)->delete();
        } else {
            return response(['message' => 'Forma de pagamento  não encontrado']);
        }
    }
}
