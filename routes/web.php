<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('homepage',[App\Http\Controllers\HomeController::class, 'homepage'])->name('homepage');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/newPub', [App\Http\Controllers\HomeController::class, 'newPub'])->name('newPub');
Route::post('savenewpost',[App\Http\Controllers\HomeController::class, 'savenewpost'])->name('savenewpost');
