<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;

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
    return view('index');
})->name('index');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/logout',[UserController::class, 'logout']);

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

//socialite login
Route::get('sign-in-gooogle', [UserController::class, 'google'])->name('user.login.google');
Route::get('/auth/google/callback',  [UserController::class, 'handleProviderCallback'])->name('user.login.google.callback');


Route::get('/success_checkout', function () {
    return view('success_checkout');
})->name('success_checkout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
