<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EsemenyController;
use App\Http\Controllers\KategoriaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/kategoriak', [KategoriaController::class, 'index']);
Route::get('/esemenyek', [EsemenyController::class, 'index']);
Route::put('/esemeny/{id}', [EsemenyController::class, 'update']);
Route::delete('/esemeny/{id}', [EsemenyController::class, 'destroy']);

Route::get('/esemenyKategoriaval/{id}', [EsemenyController::class, 'esemenyKategoriaval']);

