<?php

use App\Http\Controllers\CheckoutController;
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
    return view('welcome');
});

Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/refund', function () {
    return view('refund');
});
Route::get('/terms', function () {
    return view('term');
});

Route::post('subscribe', function () {
    return redirect('/#footer')->with('success', 'Subscribe success');
})->name('subscribe');

Route::post('contact', function () {
    return redirect('/#contact')->with('success', 'Your message has been sent. Thank you!');
})->name('contact');


Route::get('/checkoutDetails/{price}',[CheckoutController::class , 'checkoutDeils']);

Route::controller(CheckoutController::class)->group(function(){
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

Route::match(['get','post'] , '/checkout/{price}' , [CheckoutController::class , 'checkoutSimple'] );

Route::match(['get','post'],'/checkoutView',[CheckoutController::class , 'checkoutView'])->name('checkoutView');
