<?php

use App\Http\Controllers\ConductorController\ConductorController;
use App\Http\Controllers\ConductorController\Propietario;
use App\Http\Controllers\ConductorController\UsuariosController;
use App\Http\Controllers\ConductorController\VehiculoController;
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
Route::get('inicio', function () {
    return view('inicio.Index');
});

// inicio del programa osea en welcome

Route::get('inicio', [ConductorController::class,'index'])->name('inicio.inicio');

//conductores

    Route::get('conductores', [ConductorController::class,'index'])->name('conductores.inicio');
    Route::get('conductores/conductores', [ConductorController::class,'create'])->name('conductores.create');
    Route::post('conductores', [ConductorController::class,'store'])->name('conductores.store');
    Route::get('conductores/{id}', [ConductorController::class,'show'])->name('conductores.show');
    Route::get('conductores/edit/{id}', [ConductorController::class,'edit'])->name('conductores.edit');
    Route::put('conductores/{id}', [ConductorController::class,'update'])->name('conductores.update');
    Route::delete('conductores/{id}', [ConductorController::class,'destroy'])->name('conductores.destroy');

//propietarios

    Route::get('propietarios', [Propietario::class, 'index'])->name('propietarios.inicio');
    Route::get('propietarios/propietarios', [Propietario::class, 'create'])->name('propietarios.create');
    Route::post('propietarios', [Propietario::class, 'store'])->name('propietarios.store');
    Route::get('propietarios/{id}', [Propietario::class, 'show'])->name('propietarios.show');
    Route::get('propietarios/edit/{id}', [Propietario::class, 'edit'])->name('propietarios.edit');
    Route::put('propietarios/{id}', [Propietario::class, 'update'])->name('propietarios.update');
    Route::delete('propietarios/{id}', [Propietario::class, 'destroy'])->name('propietarios.destroy');

//Vehiculos

    Route::get('vehiculos', [VehiculoController::class, 'index'])->name('vehiculos.inicio');
    Route::get('vehiculos/vehiculos', [VehiculoController::class, 'create'])->name('vehiculos.create');
    Route::post('vehiculos', [VehiculoController::class, 'store'])->name('vehiculos.store');
    Route::get('vehiculos/{id}', [VehiculoController::class, 'show'])->name('vehiculos.show');
    Route::get('vehiculos/edit/{id}', [VehiculoController::class, 'edit'])->name('vehiculos.edit');
    Route::put('vehiculos/{id}', [VehiculoController::class, 'update'])->name('vehiculos.update');
    Route::delete('vehiculos/{id}', [VehiculoController::class, 'destroy'])->name('vehiculos.destroy');

//Usuarios

    Route::get('usuarios', [UsuariosController::class, 'index'])->name('usuario.inicio');
    Route::get('usuarios/usuarios', [UsuariosController::class, 'create'])->name('usuario.create');
    Route::post('usuarios', [UsuariosController::class, 'store'])->name('usuario.store');
    Route::get('usuarios/{id}', [UsuariosController::class, 'show'])->name('usuario.show');
    Route::get('usuarios/edit/{id}', [UsuariosController::class, 'edit'])->name('usuario.edit');
    Route::put('usuarios/{id}', [UsuariosController::class, 'update'])->name('usuario.update');
    Route::delete('usuarios/{id}', [UsuariosController::class, 'destroy'])->name('usuario.destroy');

