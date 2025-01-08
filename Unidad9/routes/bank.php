<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\ClienteController;
/*
Route::get('/', function () {
return view('welcome');
});
*/

Route::get('/', [DefaultController::class, 'home'])->name('home');

//// CUENTAS
Route::get('/cuenta/list', [CuentaController::class, 'list'])->name('cuenta_list');
//// NEW
Route::match(['get', 'post'], '/cuenta/new', [
    CuentaController::class,
    'new'
])->middleware('auth')->name('cuenta_new');
//// DELETE
Route::get('/cuenta/delete/{id}', [
    CuentaController::class,
    'delete'
])->middleware('auth')->name('cuenta_delete');
//// EDIT
Route::match(['get', 'post'], '/cuenta/edit/{id}', [
    CuentaController::class,
    'edit'
])->middleware('auth')->name('cuenta_edit');

//// CLIENTES
Route::get('/cliente/list', [ClienteController::class, 'list'])->name('cliente_list');
//// NEW
Route::match(['get', 'post'], '/cliente/new', [
    ClienteController::class,
    'new'
])->middleware('auth')->name('cliente_new');
//// DELETE
Route::get('/cliente/delete/{id}', [
    ClienteController::class,
    'delete'
])->middleware('auth')->name('cliente_delete');
//// EDIT
Route::match(['get', 'post'], '/cliente/edit/{id}', [
    ClienteController::class,
    'edit'
])->middleware('auth')->name('cliente_edit');
