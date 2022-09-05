<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
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

// Route::get('payment-razorpay', 'PaymentController@create')->name('paywithrazorpay');
// Route::post('payment', 'PaymentController@payment')->name('payment');
// Route::get('payment-razorpay', ['App\Http\Controllers\PaymentController::class','create'])->name('paywithrazorpay');

Route::get('payment-razorpay', ['PaymentController@create'])->name('paywithrazorpay');
