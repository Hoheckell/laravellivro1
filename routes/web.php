<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class, 'index']);

Route::get('/contatos',[ContatoController::class, 'index']);
Route::get('/contatos/{id}',[ContatoController::class, 'show']);
Route::post('/contatos',[ContatoController::class, 'store']);
Route::put('/contatos/{id}',[ContatoController::class, 'update']);
Route::patch('/contatos/{id}',[ContatoController::class, 'update']);
Route::delete('/contatos/{id}',[ContatoController::class, 'destroy']);
