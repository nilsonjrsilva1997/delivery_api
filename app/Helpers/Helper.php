<?php

namespace App\Helpers;

class Helper
{
    public static function checkIsAdmin($userId)
    {
        return \App\User::where(['id' => $userId])->with('permissao')->get();
    }
}