<?php

use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ShopController;
use App\Http\Livewire\Shop\Cart\IndexComponent as CartIndexComponent;
use App\Http\Livewire\Shop\CheckoutComponent;
use App\Http\Livewire\Shop\IndexComponent;
use App\Http\Livewire\Shop\SingleProduct;
use App\Http\Livewire\Shop\RegisterComponent;
use App\Models\Product;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', IndexComponent::class)->name('shop-index');

Route::get('/', function () {
    return view('front.index');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/products', [ShopController::class, 'allProducts'])->name('all.products');
Route::get('/{product}', SingleProduct::class)->name('single-product');

Route::get('/cart', CartIndexComponent::class)->name('cart');
Route::get('/checkout', CheckoutComponent::class)->name('checkout');

Route::get('/paypal/checkout/{order}', [PaypalController::class, 'getExpressCheckout'])->name('paypal-checkout');
Route::get('/paypal-success/{order}', [PaypalController::class, 'getExpressCheckoutSuccess'])->name('paypal-success');
Route::get('/paypal-cancel', [PaypalController::class, 'cancelPage'])->name('paypal-cancel');

Route::get('/register-shop', RegisterComponent::class)->name('registershop');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



