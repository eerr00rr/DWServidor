<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/libros', [ApiController::class, 'getLibros']);
Route::put('/libros/{id}', [ApiController::class, 'updateLibro']);
