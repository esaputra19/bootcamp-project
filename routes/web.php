<?php

use App\Http\Controllers\User\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;
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
    return view('index');
})->name('index');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/logout',[UserController::class, 'logout']);

// Route::get('checkout/{camps:slug}', function () {
//     return view('checkout');
// })->name('checkout');
//socialite login
Route::get('sign-in-gooogle', [UserController::class, 'google'])->name('user.login.google');
Route::get('/auth/google/callback',  [UserController::class, 'handleProviderCallback'])->name('user.login.google.callback');


Route::get('/success_checkout', function () {
    return view('success_checkout');
})->name('success_checkout');


Route::middleware(['auth'])->group(function () {
    //dasboard routes
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    // checkout routes
    Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
    Route::get('checkout/{camps:slug}', [CheckoutController::class, 'create'])->name('checkout.create');
    Route::post('checkout/{camps}', [CheckoutController::class, 'store'])->name('checkout.store');

});

require __DIR__.'/auth.php';
