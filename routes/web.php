<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
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

// Public Routing
Route::get('/', [PublicController::class, 'index']);
Route::get('/{page}', [PublicController::class, 'routes']);
Route::get('/article/{id}', [PublicController::class, 'article']);
Route::get('/chaco/{id}', [PublicController::class, 'chaco']);


// Admin Routing
Route::get('/admin/login', [AdminController::class, 'loginPage']);
Route::get('/admin/{page}', [AdminController::class, 'routes']);
Route::post('/logout', [AdminController::class, 'logout']);
Route::get('/admin/{page}/delete/{id}', [AdminController::class, 'delete']);
Route::get('/admin/{page}/getdata/{id}', [AdminController::class, 'getById']);
Route::get('/admin/{page}/getAll', [AdminController::class, 'getAll']);
Route::post('/admin/{page}/insert', [AdminController::class, 'insert']);
Route::post('/admin/{page}/edit/{id}', [AdminController::class, 'edit']);
Route::post('/login', [AdminController::class, 'login']);