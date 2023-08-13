<?php

use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\SingUpController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Controller;
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
    return view('home',);

});
/*------------Регистрация---------------*/
//Route::get('/homeRegister', 'HomeController@postReg')->name('/');
//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('/');

//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postReg');

/*---------------------------------------*/

Route::get('/services', [ServicesController::class, 'services']);
Route::get('/price', [PriceController::class, 'price']);
Route::get('/singUp', [SingUpController::class, 'singUp']);
//Route::get('/review', [ReviewController::class, 'review']);
//Route::post('/review/check', [ReviewController::class, 'review_check']);
//Route::post('/review/check', [ReviewController::class, 'review'])->name('review_check');
Route::get('/review', [ReviewController::class, 'review'])->name('review');
Route::post('/review/check', [ReviewController::class, 'review_check'])->name('review_check');


Auth::routes();

Route::get('/homeRegister', [App\Http\Controllers\HomeController::class, 'register'])->name('/homeRegister');
