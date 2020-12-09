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
    return view('welcome');
    });
Route::get('inicio', function () {
    return view('index.Index');
});

//conductores

    Route::get('conductores', [ConductorController::class, 'index'])->name('conductores.index');
    Route::get('conductores/conductores', [ConductorController::class, 'create'])->name('conductores.create');
    Route::post('conductores', [ConductorController::class, 'store'])->name('conductores.store');
    Route::get('conductores/{id}', [ConductorController::class, 'show'])->name('conductores.show');
    Route::get('conductores/edit/{id}', [ConductorController::class, 'edit'])->name('conductores.edit');
    Route::put('conductores/{id}', [ConductorController::class, 'update'])->name('conductores.update');
    Route::delete('conductores/{id}', [ConductorController::class, 'destroy'])->name('conductores.destroy');

//propietarios

    Route::get('propietarios', [PropietarioController::class, 'index'])->name('propietarios.index');
    Route::get('propietarios/propietarios', [PropietarioController::class, 'create'])->name('propietarios.create');
    Route::post('propietarios', [PropietarioController::class, 'store'])->name('propietarios.store');
    Route::get('propietarios/{id}', [PropietarioController::class, 'show'])->name('propietarios.show');
    Route::get('propietarios/edit/{id}', [PropietarioController::class, 'edit'])->name('propietarios.edit');
    Route::put('propietarios/{id}', [PropietarioController::class, 'update'])->name('propietarios.update');
    Route::delete('propietarios/{id}', [PropietarioController::class, 'destroy'])->name('propietarios.destroy');

//Vehiculos

    Route::get('vehiculos', [VehiculoController::class, 'index'])->name('vehiculos.index');
    Route::get('vehiculos/vehiculos', [VehiculoController::class, 'create'])->name('vehiculos.create');
    Route::post('vehiculos', [VehiculoController::class, 'store'])->name('vehiculos.store');
    Route::get('vehiculos/{id}', [VehiculoController::class, 'show'])->name('vehiculos.show');
    Route::get('vehiculos/edit/{id}', [VehiculoController::class, 'edit'])->name('vehiculos.edit');
    Route::put('vehiculos/{id}', [VehiculoController::class, 'update'])->name('vehiculos.update');
    Route::delete('vehiculos/{id}', [VehiculoController::class, 'destroy'])->name('vehiculos.destroy');

//Usuarios

    Route::get('usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
    Route::get('usuarios/usuarios', [UsuariosController::class, 'create'])->name('usuarios.create');
    Route::post('usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');
    Route::get('usuarios/{id}', [UsuariosController::class, 'show'])->name('usuarios.show');
    Route::get('usuarios/edit/{id}', [UsuariosController::class, 'edit'])->name('usuarios.edit');
    Route::put('usuarios/{id}', [UsuariosController::class, 'update'])->name('usuarios.update');
    Route::delete('usuarios/{id}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');

