<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UploadFile;

class UploadFileController extends BaseController
{
    public function create(Request $request)
    {
        /* $validateService = new UploadFileValidateService;

        $validatedData = $request->validate($validateService->getValidateRulesCreate());

        $uploadFileService = new UploadFileService;

        $uploadFileService->salvaArquivo($request);

        return $validatedData;
        return false;
        return 'teste';
        $class = $this->getClassNameModel();
        $model = new $class;
        $data = $model->create($validatedData);

        return response(['data' => $data, 'message' => 'Dados inseridos com sucesso']); */
    }
}
