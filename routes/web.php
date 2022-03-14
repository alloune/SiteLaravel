<?php

use App\Http\Controllers\BackofficeProductController;
use App\Http\Controllers\ProductDescriptionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VignetteController;

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
Route::get('/products', [ProductController::class, 'displayProductPage'])->name('products');
Route::get('/products/by_price', [ProductController::class, 'sortProducts'])->name('sortedproducts');
Route::get('/aboutus', [AboutController::class, 'aboutUsPage' ])->name('aboutus');
Route::get('/product/{product}', [ProductDescriptionController::class, 'displayProduct'])->name('product');
Route::get('/backoffice',[BackofficeProductController::class, 'displayBakcOfficeProducts'])->name("backofficeproducts");
Route::get('/backoffice/product/{product}',[BackofficeProductController::class, 'displayBakcOfficeProduct'])->name("backofficeproduct");
