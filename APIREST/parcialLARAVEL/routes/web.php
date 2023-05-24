<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\AutoresController;
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



Route::get('/listar', [AutoresController::class, 'listar'])->name('libro.listar');

Route::get('/libro-{id}', [AutoresController::class, 'libro']);

Route::get('/agregar', [AutoresController::class, 'agregar'])->name('libro.add');

Route::POST('/agregar', [AutoresController::class, 'store'])->name('libro.store');

Route::get('/librov-{id}', [AutoresController::class, 'view'])->name('libro.view');

Route::get('/listar/borrar/{id}', [AutoresController::class, 'delete'])->name('libro.borrar');

Route::POST('/modificar', [AutoresController::class, 'update'])->name('libro.update');;