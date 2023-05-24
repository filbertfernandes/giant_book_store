<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/', [BookController::class, 'index']);
Route::get('/category', [BookController::class, 'category']);
Route::get('/detail/{book}', [BookController::class, 'detail']);
Route::get('/publishers', [BookController::class, 'publishers']);
Route::get('/publisher/{publisher}', [BookController::class, 'publisher']);
Route::get('/contact', [BookController::class, 'contact']);

// FILBERT FERNANDES LIENARDY
// 2502041451
// PPTI 13