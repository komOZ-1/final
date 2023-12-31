<?php

use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\SingUpController;
use App\Http\Controllers\ReviewController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'execute'])->name('home');

Auth::routes();

Route::get('/homeRegister', [App\Http\Controllers\HomeController::class, 'register'])
    ->middleware(['auth'])
    ->name('homeRegister');

/*---------------------------------------*/

Route::get('/services', [ServicesController::class, 'services']);
Route::get('/price', [PriceController::class, 'price']);
Route::get('/singUp', [SingUpController::class, 'singUp']);
Route::get('/review', [ReviewController::class, 'review'])->name('review');
Route::post('/review/check', [ReviewController::class, 'review_check'])->name('review_check');



