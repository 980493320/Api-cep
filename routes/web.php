<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\buscarCepController;


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

Route::get('/buscarcep', [buscarCepController::class, 'index']);
Route::get('/adicionar', [buscarCepController::class, 'index']);

Route::get('/buscar', [buscarCepController::class, 'buscar'])->name('buscar');
