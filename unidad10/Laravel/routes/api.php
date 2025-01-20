<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/libros', [ApiController::class, 'getLibros']);
Route::get('/libro/{id}', [ApiController::class, 'getLibro']);
Route::post('/libro', [ApiController::class, 'newLibro']);
Route::put('/libro/{id}', [ApiController::class, 'updateLibro']);
Route::delete('/libro/{id}', [ApiController::class, 'deleteLibro']);


Route::get('/autores', [ApiController::class, 'getAutores']);
Route::get('/autor/{id}', [ApiController::class, 'getAutor']);
Route::post('/autor', [ApiController::class, 'newAutor']);
Route::put('/autor/{id}', [ApiController::class, 'updateAutor']);
Route::delete('/autor/{id}', [ApiController::class, 'deleteAutor']);
