<?php

use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ConsultasController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/articulos', [ArticulosController::class, 'lista_articulos']);

Route::get('/clientes',[ClientesController::class, 'lista_clientes']);

Route::get('/consulta',[ConsultasController::class, 'consulta'])->name('consulta');

Route::resource('/students', 'App\Http\Controllers\StudentsController');


