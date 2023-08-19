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
    return view('inicio');
});


Route::get('/index',[ProyectoController::class, 'index']);

// crud de proyectos

Route::post('paypal/payment',[PaypalController::class,'payment'])->name('paypal');
Route::get('paypal/succes',[PaypalController::class, 'succes'])->name('paypal_succes');
Route::get('paypal/cancel',[PaypalController::class, 'cancel'])->name('paypal_cancel');


Route::get('/inicio', [App\Http\Controllers\ProyectoController::class, 'inicio'])->name('inicio');
Route::get('/servicios', [App\Http\Controllers\ProyectoController::class, 'servicios'])->name('servicios');
Route::get('/programas', [App\Http\Controllers\ProyectoController::class, 'programas'])->name('programas');
Route::get('/contacto', [App\Http\Controllers\ProyectoController::class, 'contacto'])->name('contacto');





Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
