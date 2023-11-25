<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\site\IndexController;

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

Route::get('/', [IndexController::class, 'openHomePage'])->name('site.home');


Route::get('product/{id}', [IndexController::class, 'openProductDetails'])->name('site.product.detail');

Route::get('cart', [IndexController::class, 'openCartPage'])->name('site.cart');
Route::get('add_to_cart', [IndexController::class, 'addProductIntoCart'])->name('add.to.cart');


Route::get('checkout', [IndexController::class, 'openCheckoutPage'])->name('site.checkout');
Route::get('calculate/cart-items', [IndexController::class, 'calculatecartitems'])->name('calculate.add_to_cart');
