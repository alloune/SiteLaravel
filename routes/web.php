<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VignetteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderProductController;


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



Route::get('/', [VignetteController::class, 'displayCertif'])->name('home');

Route::get('/products', [UserController::class, 'index'])->name('products');
Route::get('/product/{id}', [UserController::class, 'displayProduct'])->name('product');

Route::get('/about-us', [AboutController::class, 'aboutUsPage'])->name('aboutus');


//voir les groupes
Route::resource('/backoffice/orders', OrderController::class)->middleware(['auth', 'checkRole']);
Route::resource('/backoffice/customers',CustomerController::class)->middleware(['auth', 'checkRole']);
Route::resource('/backoffice', ProductController::class)->middleware(['auth', 'checkRole']);

Route::resource('/cart',OrderProductController::class );

Route::get('/search/', [ProductController::class, 'search'])->name('search');
route::get('/hack', [UserController::class, 'hackLoris'])->name('hackLoris');

require __DIR__.'/auth.php';
