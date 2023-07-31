<?php

use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\SingUpController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/price', [PriceController::class, 'index']);
Route::get('/singUp', [SingUpController::class, 'index']);

