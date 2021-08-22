<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DespesasController;
use App\Http\Controllers\LoginController;
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

Route::post('/registrar', [AuthController::class, 'register']);
Route::post('/logar', [AuthController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']] , function () {
    Route::get('/despesas', [DespesasController::class, 'index']);
    Route::get('/despesas/pesquisar/{id}', [DespesasController::class, 'show']);
    Route::get('/despesas/criar', [DespesasController::class, 'create']);
    Route::post('/despesas/store', [DespesasController::class, 'store']);
    Route::put('/despesas/update/{id}', [DespesasController::class, 'update']);
    Route::delete('/despesas/delete/{id}', [DespesasController::class, 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
});
