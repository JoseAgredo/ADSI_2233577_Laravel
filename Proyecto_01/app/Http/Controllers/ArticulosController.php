<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    //
    public function lista_articulos(){
        return view('articulos');
    }
}
