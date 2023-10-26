<?php

use App\Http\Controllers\API\PedidoController;
use App\Http\Controllers\API\ProductoController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





//---------------------------rutas Login mobile---------------------MATIAS--------------------------//
Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);
//---------------------------rutas Login mobile---------------------MATIAS--------------------------//


//---------------------------rutas Productos mobile---------------------MATIAS--------------------------//
Route::get('productos',[ProductoController::class,'productos']);
//---------------------------rutas Productos mobile---------------------MATIAS--------------------------//


//---------------------------rutas Pedidos mobile---------------------MATIAS--------------------------//
Route::post('pedido',[PedidoController::class,'pedido']);
//---------------------------rutas Pedidos mobile---------------------MATIAS--------------------------//

//---------------------------rutas Compras mobile---------------------MATIAS--------------------------//
Route::get('compras',[PedidoController::class,'compras']);
//---------------------------rutas Compras mobile---------------------MATIAS--------------------------//