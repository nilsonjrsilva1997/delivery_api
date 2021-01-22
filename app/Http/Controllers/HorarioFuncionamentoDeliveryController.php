<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HorarioFuncionamentoDelivery;

class HorarioFuncionamentoDeliveryController extends BaseController
{
   public function index()
   {
       return HorarioFuncionamentoDelivery::with("periodo")
                                    ->with("unidade")
                                    ->with("fuso_horario")
                                    ->get();
   }
}
