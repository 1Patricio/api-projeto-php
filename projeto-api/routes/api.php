<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cliente', [ClienteController::class, 'listar']); //Rota , nome da minha classe, nome do método
Route::post('/cliente', [ClienteController::class, 'salvar']); //Rota , nome da minha classe, nome do método
Route::put('/cliente/{id}', [ClienteController::class, 'editar']); //Rota , {id banco de dados}, nome da minha classe, nome do método
Route::delete('/cliente/{id}', [ClienteController::class, 'excluir']); //Rota , {id banco de dados} ,nome da minha classe, nome do método
Route::get('/cliente/{id}',[ClienteController::class, 'listarPeloId']);