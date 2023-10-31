<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Main\ThreadsController;
use App\Http\Controllers\Profile\ProfileController;
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

Route::get('/', function () {
    return redirect()->route('threads.index'); 
});

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

Route::post('/logout',[LogoutController::class,'store'])->name('logout');

Route::get('/Dtherads/home',[ThreadsController::class,'index'])->name('threads.index');

Route::get('/Dtherads/{user:username}/CrearThread',[ThreadsController::class,'create'])->name('threads.create');
Route::post('/Dtherads/CrearThread',[ThreadsController::class,'store'])->name('threads.store');

Route::get('/Dthreads/{user:username}',[ProfileController::class,'index'])->name('profile.index');




