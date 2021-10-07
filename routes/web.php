<?php

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/videos', [EventController::class, 'videos']);
Route::get('/web', [EventController::class, 'web']);
Route::get('/jogos', [EventController::class, 'jogos']);
Route::get('/blog', [EventController::class, 'blog']);
Route::get('/textos', [EventController::class, 'textos']);
Route::get('/algiz', [EventController::class, 'algiz']);
Route::get('/sobre', [EventController::class, 'sobre']);
Route::get('/contato', [EventController::class, 'contato']);