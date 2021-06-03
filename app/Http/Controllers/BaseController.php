<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{

    protected $validateService;

    public function __construct()
    {
        $class = $this->getClassNameValidateService();
        $this->validateService = new $class;
    }

    public function index()
    {
        $class = $this->getClassNameModel();
        $model = new $class;
        $data = $model->all();
        return response(['data' => $data, 'message' => 'Registros retornados com sucesso']);
    }

    public function show($id)
    {
        $class = $this->getClassNameModel();
        $model = new $class;
        $data = $model->find($id);
        if (!empty($data)) {
            return response(['data' => $data, 'message' => 'Registro retornado com sucesso']);
        } else {
            return response(['message' => 'Registro não encontrado'], 400);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate($this->validateService->getValidateRulesCreate());
        $class = $this->getClassNameModel();
        $model = new $class;
        $data = $model->create($validatedData);

        return response(['data' => $data, 'message' => 'Dados inseridos com sucesso']);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate($this->validateService->getValidateRulesUpdate());
        $class = $this->getClassNameModel();
        $model = new $class;
        $data = $model->find($id);

        if (!empty($data)) {
            $data->fill($validatedData);
            $data->save();
            return response(['data' => $data, 'message' => 'Dados atualizados com sucesso']);
        } else {
            return response(['message' => 'Registro não encontrado']);
        }
    }

    public function destroy($id)
    {
        $class = $this->getClassNameModel();
        $model = new $class;
        $data = $model->find($id);

        if (!empty($data)) {
            $data->delete();
            return response(['message' => 'Registro removido com sucesso']);
        } else {
            return response(['message' => 'Registro não encontrado'], 400);
        }
    }

    private function getClassNameModel()
    {
        return str_replace('Controller', '', str_replace('App\\Http\\Controllers\\', '', get_class($this)));
    }

    private function getClassNameValidateService()
    {
        return $this->getClassNameModel() . 'ValidateService';
    }
}
