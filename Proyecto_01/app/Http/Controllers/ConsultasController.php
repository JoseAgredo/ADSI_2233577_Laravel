<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;
use App\Models\reservation;

class ConsultasController extends Controller
{
    public function consulta(){
        $consulta =client::select('Nombre','Email')
                            ->get();

        return $consulta;
    }
}
