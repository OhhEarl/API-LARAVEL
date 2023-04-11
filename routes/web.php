<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;


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

Route::get('/', [authController::class, 'index'])->name('login');
Route::post('/logmein', [authController::class, 'logmein'])->name('logmein');
Route::get('/signup', [authController::class, 'signup'])->name('signup');
Route::post('/register', [authController::class, 'register'])->name('register');

Route::get('/home', [homeController::class, 'index'])->name('home');
Route::get('/insertPost/{text}', [homeController::class, 'insertPost']);
// Route::get('/insertPost/{text}', [homeController::class, 'insertPost']);


