<?php

use Illuminate\Support\Facades\Route;
use App\Models\Carousel;
use App\Models\Servicio;
use App\Models\Oferta;
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
    $carousels = Carousel::all();
    $servicios = Servicio::all();
    #$ofertas = Oferta::all();
    return view('inicio.index', compact('carousels','servicios'));
})->name('welcome');

Auth::routes();

Route::livewire('/oferta/{oferta}', 'oferta.show')->name('oferta.ver');
Route::livewire('/checkout', 'checkout')->name('checkout')->middleware('check');

Route::get('/paypal/payment', [App\Http\Controllers\PaymentController::class, 'paypalPaymentRequest'])->name('paypal.payment');
Route::get('/paypal/checkout/{status}', [App\Http\Controllers\PaymentController::class, 'paypalCheckout'])->name('paypal.checkout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/oferta', App\Http\Controllers\OfertaController::class);
Route::resource('/servicio', App\Http\Controllers\ServicioController::class);

Route::post('/carousel/store', [App\Http\Controllers\CarouselController::class, 'store'])->name('carousel.store');
Route::delete('/carousel/{carousel}', [App\Http\Controllers\CarouselController::class, 'destroy'])->name('carousel.destroy');
