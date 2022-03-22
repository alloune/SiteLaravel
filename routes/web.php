<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackofficeOrderController;
use App\Http\Controllers\BackofficeProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDescriptionController;
use App\Http\Controllers\VignetteController;
use App\Http\Controllers\UniversitiesLogoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Order_ProductController;
use App\Http\Controllers\AdminController;


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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [VignetteController::class, 'displayCertif'])->name('home');
Route::get('/products', [UserController::class, 'index'])->name('products');
Route::get('/product/{id}', [UserController::class, 'displayProduct'])->name('product');
Route::get('/aboutus', [AboutController::class, 'aboutUsPage'])->name('aboutus');
Route::resource('/backoffice/orders', OrderController::class)->middleware(['auth']);
Route::resource('/backoffice/customers',CustomerController::class)->middleware(['auth']);
Route::resource('/backoffice', ProductController::class)->middleware(['auth']);
Route::resource('/cart',Order_ProductController::class );
Route::get('/search/', [ProductController::class, 'search'])->name('search');


require __DIR__.'/auth.php';
