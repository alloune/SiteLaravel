<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackofficeController;

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
    return view('welcome');
});
Route::get('/products', [ProductController::class, 'displayProductPage'])->name('products');
Route::get('/aboutus', [AboutController::class, 'aboutUsPage' ])->name('aboutus');
Route::get('/product/{id}', [ProductController::class, 'displayProductDetailPage'])->name('displayProductDetailPage');
Route::get('/products/alpha', [ProductController::class, 'alphabetiqueProducts']);
Route::get('/products/num', [ProductController::class, 'numOrderProducts']);
Route::get ('/backoffice', [BackofficeController::class, 'index'])->name('backoffice');
Route::get ('/backoffice/product/{id}/edit', [BackofficeController::class, 'edit'])->name('edit');
Route::post ('/backoffice/product/{id}/update', [BackofficeController::class, 'update'])->name('update');
Route::delete ('/backoffice/product/{id}/delete', [BackofficeController::class, 'delete'])->name('delete');
Route::get ('/backoffice/product/add', [BackofficeController::class, 'add'])->name('add');
Route::post ('/backoffice', [BackofficeController::class, 'creat'])->name('creat');
