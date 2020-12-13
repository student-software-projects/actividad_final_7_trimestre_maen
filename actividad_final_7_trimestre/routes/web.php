<?php

use App\Http\Controllers\ConductorController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VehiculoController;
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
    return view('index.Index');
});

//conductores

    Route::get('conductores', [ConductorController::class,'index'])->name('conductores.index');
    Route::get('conductores/conductores', [ConductorController::class,'create'])->name('conductores.create');
    Route::post('conductores', [ConductorController::class,'store'])->name('conductores.store');
    Route::get('conductores/{id}', [ConductorController::class,'show'])->name('conductores.show');
    Route::get('conductores/edit/{id}', [ConductorController::class,'edit'])->name('conductores.edit');
    Route::put('conductores/{id}', [ConductorController::class,'update'])->name('conductores.update');
    Route::delete('conductores/{id}', [ConductorController::class,'destroy'])->name('conductores.destroy');

//propietarios

    Route::get('propietarios', [PropietarioController::class, 'index'])->name('propietarios.index');
    Route::get('propietarios/propietarios', [PropietarioController::class, 'create'])->name('propietarios.create');
    Route::post('propietarios', [PropietarioController::class, 'store'])->name('propietarios.store');
    Route::get('propietarios/{id}', [PropietarioController::class, 'show'])->name('propietarios.show');
    Route::get('propietarios/edit/{id}', [PropietarioController::class, 'edit'])->name('propietarios.edit');
    Route::put('propietarios/{id}', [PropietarioController::class, 'update'])->name('propietarios.update');
    Route::delete('propietarios/{id}', [PropietarioController::class, 'destroy'])->name('propietarios.destroy');

//Vehiculos

    Route::get('vehiculos', [VehiculoController::class, 'index'])->name('vehiculo.index');
    Route::get('vehiculos/vehiculos', [VehiculoController::class, 'create'])->name('vehiculo.create');
    Route::post('vehiculos', [VehiculoController::class, 'store'])->name('vehiculo.store');
    Route::get('vehiculos/{id}', [VehiculoController::class, 'show'])->name('vehiculo.show');
    Route::get('vehiculos/edit/{id}', [VehiculoController::class, 'edit'])->name('vehiculo.edit');
    Route::put('vehiculos/{id}', [VehiculoController::class, 'update'])->name('vehiculo.update');
    Route::delete('vehiculos/{id}', [VehiculoController::class, 'destroy'])->name('vehiculo.destroy');

//Usuarios

    Route::get('usuarios', [UsuariosController::class, 'index'])->name('usuario.index');
    Route::get('usuarios/usuarios', [UsuariosController::class, 'create'])->name('usuario.create');
    Route::post('usuarios', [UsuariosController::class, 'store'])->name('usuario.store');
    Route::get('usuarios/{id}', [UsuariosController::class, 'show'])->name('usuario.show');
    Route::get('usuarios/edit/{id}', [UsuariosController::class, 'edit'])->name('usuario.edit');
    Route::put('usuarios/{id}', [UsuariosController::class, 'update'])->name('usuario.update');
    Route::delete('usuarios/{id}', [UsuariosController::class, 'destroy'])->name('usuario.destroy');

