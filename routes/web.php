<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackofficeOrderController;
use App\Http\Controllers\BackofficeProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDescriptionController;
use App\Http\Controllers\VignetteController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [VignetteController::class, 'displayCertif'])->name('home');
Route::get('/products', [ProductController::class, 'displayProductPage'])->name('products');
Route::get('/products/by_price', [ProductController::class, 'sortProducts'])->name('sortedproducts');
Route::get('/aboutus', [AboutController::class, 'aboutUsPage' ])->name('aboutus');
Route::get('/product/{product}', [ProductDescriptionController::class, 'displayProduct'])->name('product');
Route::get('/backoffice',[BackofficeProductController::class, 'displayBakcOfficeProducts'])->middleware(['auth'])->name("backofficeproducts");
Route::delete('/backoffice/{product}',[BackofficeProductController::class, 'deleteBackOfficeProduct'])->middleware(['auth'])->name("backofficeproductsdelete");
Route::get('/backoffice/product/create',[BackofficeProductController::class, 'showAddBackOfficeProduct'])->middleware(['auth'])->name("backofficeproductadd");
Route::post('/backoffice/product/create',[BackofficeProductController::class, 'addBackOfficeProduct'])->middleware(['auth'])->name("backofficeproductadd");
Route::get('/backoffice/product/{product}',[BackofficeProductController::class, 'displayBakcOfficeProduct'])->middleware(['auth'])->name("backofficeproduct");
Route::get('/backoffice/product/edit/{product}',[BackofficeProductController::class, 'editBakcOfficeProduct'])->middleware(['auth'])->name("backofficeproductedit");
Route::put('/backoffice/product/edit/{product}',[BackofficeProductController::class, 'updateBackOfficeProduct'])->middleware(['auth'])->name("backofficeproductupdate");
Route::prefix('backoffice')->group(function () {
    Route::resource('/order', BackofficeOrderController::class)->middleware(['auth']);
});
Route::get('/search/', [ProductController::class, 'search'])->name('search');
