<?php

use App\Http\Controllers\SCWebsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SCWebsController::class,'index']);
Route::get('/nueva-web', [SCWebsController::class,'create']);
Route::post('/guardar-web', [SCWebsController::class,'store']);
Route::get('/editar-web/{id}', [SCWebsController::class,'edit']);
Route::put('/actualizar-web/{id}', [SCWebsController::class,'update']);
Route::post('/borrar-web/{id}', [SCWebsController::class,'delete']);