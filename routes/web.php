<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\TipopagoController;
use App\Http\Controllers\ColaboradorProyectoController;

use Illuminate\Support\Facades\Route;

// 9- AGREGAR A RELACION MUCHOS A MUCHOS
Route::get('/colaboradorproyecto',[ColaboradorProyectoController::class,'asociar']);
Route::post('/colaboradorproyecto/store',[ColaboradorProyectoController::class,'store'])->name('colaboradorproyecto.store');


//  Acceder a todas las rutas 
Route::resource('cliente',ClienteController::class);
//aceder a show
Route::get('/cliente/{id}/show', [ClienteController::class,'show'])->name('cliente.show');