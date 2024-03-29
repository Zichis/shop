<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Customer\CartController;
use App\Http\Controllers\Customer\OrderController;
use App\Http\Controllers\Customer\PaymentController;
use App\Http\Controllers\Customer\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
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

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/fitness', [PageController::class, 'fitness'])->name('fitness');
Route::resource('products', ProductController::class);

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/orders/{order}/confirm', [AdminOrderController::class, 'confirm'])->name('orders.confirm');
    Route::get('/orders/{order}/reject', [AdminOrderController::class, 'reject'])->name('orders.reject');
    Route::resource('fitness/plans', PlanController::class);
    Route::resource('products', AdminProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('orders', AdminOrderController::class);
    Route::resource('users', UserController::class);
    Route::resource('information', InformationController::class);
});

Route::middleware(['auth','customer'])->name('customer.')->prefix('customer')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    //Route::get('/cart/confirm', [CartController::class, 'confirm'])->name('cart.confirm');
    Route::post('/pay', [PaymentController::class, 'pay'])->name('pay');
    Route::get('/payment-callback', [PaymentController::class, 'handleGatewayCallback'])->name('payment.callback');
    Route::get('/orders/{order}/confirm', [OrderController::class, 'confirm'])->name('orders.confirm');
    Route::resource('orders', OrderController::class);
    Route::resource('profile', ProfileController::class);
});

require __DIR__.'/auth.php';
