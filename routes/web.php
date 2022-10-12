<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\AboutController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/arsip', [ArsipController::class, 'index'])->name('arsip');
Route::get('/arsip/detail/{ID_arsip}', [ArsipController::class, 'detail']);
Route::get('/arsip/add', [ArsipController::class, 'add']);//
Route::post('/arsip/insert', [ArsipController::class, 'insert']);//
Route::get('/arsip/delete/{ID_arsip}', [ArsipController::class, 'delete']);
Route::get('/about', [AboutController::class, 'index']);
