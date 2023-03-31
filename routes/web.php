<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('/siswa', SiswaController::class);
    Route::resource('/letter', LetterController::class);
});

