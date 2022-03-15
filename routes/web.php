<?php

use App\Http\Controllers\BackofficeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
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
Route::get('/products', [ProductController::class, 'displayProductPage']);
Route::get('/aboutus', [AboutController::class, 'aboutUsPage' ]);
Route::get('/product/{id}', [ProductController::class, 'displayProductDetailPage'])->name('displayProductDetailPage');
Route::get('/products/alpha', [ProductController::class, 'alphabetiqueProducts']);
Route::get('/products/num', [ProductController::class, 'numOrderProducts']);
Route::get ('/backoffice', [BackofficeController::class, 'index']);
