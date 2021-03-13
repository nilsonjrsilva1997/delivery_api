<?php

namespace App\Helpers;

class Helper
{
    public static function getPermissoes($userId, $unidadeId)
    {
         $permissao = \App\Permissao::where(['user_id' => $userId, 'unidade_id' => $unidadeId])->first();

         if(!empty($permissao)) {
            return $permissao['tipo'];
         } else {
             return null;
         }
    }
}