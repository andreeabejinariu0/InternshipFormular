<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/forms2', [App\Http\Controllers\TestController::class, 'index']);
Route::get('/forms', [App\Http\Controllers\FormController::class, 'index']);
Route::post('/forms', [App\Http\Controllers\FormController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});
