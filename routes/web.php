<?php

use App\Http\Controllers\UserController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
// User Module

Route::get('users/{view?}', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('users-view', [UserController::class, 'filterUserView'])->name('filter.user.view')->middleware(['auth', 'XSS']);
Route::get('checkuserexists', [UserController::class, 'checkUserExists'])->name('user.exists')->middleware(['auth', 'XSS']);
Route::get('profile', [UserController::class, 'profile'])->name('profile')->middleware(['auth', 'XSS']);
Route::post('/profile', [UserController::class, 'updateProfile'])->name('update.profile')->middleware(['auth', 'XSS']);
Route::get('user/info/{id}', [UserController::class, 'userInfo'])->name('users.info')->middleware(['auth', 'XSS']);
Route::get('user/{id}/info/{type}', [UserController::class, 'getProjectTask'])->name('user.info.popup')->middleware(['auth', 'XSS']);
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('user.destroy')->middleware(['auth', 'XSS']);
// End User Module
// Orders

    Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('order.index');
    Route::get('/stripe/{code}', [App\Http\Controllers\OrderController::class, 'stripe'])->name('stripe');
    Route::post('/stripe', [App\Http\Controllers\OrderController::class, 'stripePost'])->name('stripe.post');


Route::get('/apply-coupon', [CouponController::class, 'applyCoupon'])->name('apply.coupon')->middleware(['auth', 'XSS', 'revalidate']);

// Nfts
Route::get('/nfts', [App\Http\Controllers\NftController::class, 'index'])->name('nft.index');
