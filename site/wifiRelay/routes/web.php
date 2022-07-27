<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\page;
use App\Http\Controllers\moduleController;
use App\Http\Controllers\StatController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [page::class, 'main']);
Route::get('/module', [page::class, 'module']);
Route::get('/stat', [page::class, 'stat']);

// TODO:
// страница настройки модуля
Route::get('/module/{id}/edit', [moduleController::class, 'edit']);
// странгица добавления модуля
Route::get('/module/create', [moduleController::class, 'create']);
