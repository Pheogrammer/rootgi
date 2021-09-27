<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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

Route::get('homepage',[HomeController::class, 'homepage'])->name('homepage');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/newPub', [HomeController::class, 'newPub'])->name('newPub');
Route::post('savenewpost',[HomeController::class, 'savenewpost'])->name('savenewpost');

Route::get('allposts', [HomeController::class, 'allposts'])->name('allposts');
Route::get('readpub/{id}',[HomeController::class,'readpub'])->name('readpub');
//
