<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('welcome');
});
//compra
Route::get('/', [CompraController::class, 'inicio'])->name('RelojesPrincipal');
Route::get('/Relojes/compra', [CompraController::class, 'iniciocompra'])->name('RelojesCompra');
Route::get('/Relojes/create', [CompraController::class,'create'])->name('RelojesCreate');
Route::get('/Relojes/index', [CompraController::class, 'index'])->name('RelojesIndex');
Route::post('/Relojes', [CompraController::class, 'store'])->name('RelojesStore');

//soporte
Route::get('/Soporte/index', [ContactoController::class, 'index'])->name('RegistroIndex');
Route::get('/Relojes/soporte/mostrar', [ContactoController::class, 'soporte'])->name('Principal');
Route::get('/Relojes/soporte', [ContactoController::class, 'create'])->name('SoporteCreate');
Route::post('/Soporte', [ContactoController::class, 'store'])->name('SoporteStore');

