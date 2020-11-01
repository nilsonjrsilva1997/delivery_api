<?php

namespace App\Http\Services;

class UploadFileService
{
    public function salvaArquivo($file)
    {
        $filenameWithExt = $file->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $path = $file->storeAs('public/images', $fileNameToStore);

        return $fileNameToStore;
    }

    public function atualizaArquivo()
    {

    }

    public function deletaArquivo()
    {

    }
}

