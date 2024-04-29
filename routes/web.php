<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/boletas', [App\Http\Controllers\BoletaController::class, 'pdf']);
Route::get('/boletas/create', [App\Http\Controllers\BoletaController::class, 'create']);
Route::post('/home', [App\Http\Controllers\BoletaController::class, 'sendData']);

Route::get('/boletas/filtrar', [App\Http\Controllers\BoletaController::class, 'mostrarBoletas'])->name('boletas.filtrar');

Route::get('/boletas/pdf', [App\Http\Controllers\BoletaController::class, 'pdf'])->name('boletas.pdf');

