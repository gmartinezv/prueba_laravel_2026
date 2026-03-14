<?php

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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

*/

Route::get('/cursos', [App\Http\Controllers\CursosController::class, 'index']);


Route::get('/cursos/{id}',[App\Http\Controllers\CursosController::class, 'mostrar']);

Route::post('/cursos', [App\Http\Controllers\CursosController::class, 'guardar']);

Route::put('/cursos/{id}', [App\Http\Controllers\CursosController::class, 'actualizar']);

Route::delete('/cursos/{id}', [App\Http\Controllers\CursosController::class, 'eliminar']);





