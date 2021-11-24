<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //
    public function lista_clientes(){
        return view('clientes');
    }
}
