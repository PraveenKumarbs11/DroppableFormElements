<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\valueController;

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
Route::get('dragDrop', [valueController::class, 'dragDrop']);
Route::post('leaveForm', [valueController::class, 'leaveForm']);
Route::post('appForm', [valueController::class, 'appForm']);
Route::post('empForm', [valueController::class, 'empForm']);
Route::post('perForm', [valueController::class, 'perForm']);
Route::get('dropForm', [valueController::class, 'dropForm']);
Route::post('resultForm', [valueController::class, 'formData']);
Route::get('createForm', [valueController::class, 'createForm']);
Route::post('finalForm', [valueController::class, 'finalForm']);