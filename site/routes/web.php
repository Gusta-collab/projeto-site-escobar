<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ClienteController;
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


Route::get('/clientes', function () {
    return view('clientes.index');
});

Route::get('/clientes',[ClienteController::class,'index']);
  Route::post('/clientes',
    [ClienteController::class, 'recebeDados']) ->name ('cliente.novo');