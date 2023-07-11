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
Route::get("/create", [ProyectoController::class,'create']);


Route::get('/hacemos',[ProyectoController::class, 'hacemos']);
   

Route:: get("/conocenos",[ProyectoController::class, 'conocenos']);

Route:: get("/block",[ProyectoController::class, 'block']);

Route::post('paypal/payment',[PaypalController::class,'payment'])->name('paypal');
Route::get('paypal/succes',[PaypalController::class, 'succes'])->name('paypal_succes');
Route::get('paypal/cancel',[PaypalController::class, 'cancel'])->name('paypal_cancel');

Route::get('/fondos', [App\Http\Controllers\ProyectoController::class, 'index'])->name('inicio');
Route::get('/fondos', [App\Http\Controllers\ProyectoController::class, 'fondos'])->name('fondos');

Route::get('/inicio', [App\Http\Controllers\ProyectoController::class, 'inicio'])->name('inicio');
Route::get('/programas', [App\Http\Controllers\ProyectoController::class, 'inicio'])->name('inicio');
Route::get('/servicios', [App\Http\Controllers\ProyectoController::class, 'servicios'])->name('servicios');
Route::get('/contactos', [App\Http\Controllers\ProyectoController::class, 'contactos'])->name('contactos');


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
