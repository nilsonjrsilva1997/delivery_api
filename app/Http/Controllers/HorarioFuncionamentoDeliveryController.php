<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HorarioFuncionamentoDelivery;

class HorarioFuncionamentoDeliveryController extends BaseController
{
   public function index()
   {
       return HorarioFuncionamentoDelivery::with("periodo1")
                                    ->with("periodo2")
                                    ->with("unidade")
                                    ->with("fuso_horario")
                                    ->get();
   }
}