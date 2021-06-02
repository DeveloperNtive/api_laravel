<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Para presentar la informacion
Route::get('clientes', [ClienteController::class, 'index']);
Route::get('productos', [ProductoController::class, 'index']);
Route::get('marcas', [MarcasController::class, 'index']);
Route::get('tipos', [TiposController::class, 'index']);
Route::get('estados', [EstadosController::class, 'index']);
Route::get('venta', [VentasController::class, 'index']);

//Para crear nuevos objetos
Route::post('clientes', [ClienteController::class, 'store']);
Route::post('productos', [ProductoController::class, 'store']);
Route::post('marcas', [MarcasController::class, 'store']);
Route::post('tipos', [TiposController::class, 'store']);
Route::post('venta', [VentasController::class, 'store']);

//Mostrar informacion especifica
Route::get('clientes/{cliente}', [ClienteController::class, 'show']);
Route::get('productos/{producto}', [ProductoController::class, 'show']);
Route::get('marcas/{marca}', [MarcasController::class, 'show']);
Route::get('tipos/{tipo}', [TiposController::class, 'show']);
Route::get('venta/{venta}', [VentasController::class, 'show']);

//Actualizar informacion especifica
Route::put('clientes/{cliente}', [ClienteController::class, 'update']);
Route::put('productos/{producto}', [ProductoController::class, 'update']);
Route::put('marcas/{marca}', [MarcasController::class, 'update']);
Route::put('tipos/{tipo}', [TiposController::class, 'update']);
Route::put('venta/{venta}', [VentasController::class, 'update']);

//Actualizar informacion especifica
Route::delete('clientes/{cliente}', [ClienteController::class, 'destroy']);
Route::delete('productos/{producto}', [ProductoController::class, 'destroy']);
Route::delete('marcas/{marca}', [MarcasController::class, 'destroy']);
Route::delete('tipos/{tipo}', [TiposController::class, 'destroy']);
Route::delete('venta/{venta}', [VentasController::class, 'destroy']);
