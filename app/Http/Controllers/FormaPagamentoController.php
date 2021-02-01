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

        $fileNameToStore = '';

        if($request->hasFile('icone')) {
            $filenameWithExt = $request->file('icone')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('icone')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('icone')->storeAs('public/images', $fileNameToStore);
        } else {
            return response(['icone' => 'A imagem é obrigatória']);
        }

        $validatedData['icone'] = $fileNameToStore;

        return FormaPagamento::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'string|max:255',
        ]);

        $formaPagamento = FormaPagamento::find($id);

        if(!empty($formaPagamento)) {
            if($request->hasFile('icone')) {
                unlink(storage_path('app/public/images/'. $formaPagamento->icone));
            }

            $fileNameToStore = '';
            $filenameWithExt = $request->file('icone')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('icone')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('icone')->storeAs('public/images', $fileNameToStore);

            $validatedData['icone'] = $fileNameToStore;

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
            unlink(storage_path('app/public/images/'. $formaPagamento->icone));
            FormaPagamento::find($id)->delete();
        } else {
            return response(['message' => 'Forma de pagamento  não encontrado']);
        }
    }
}
