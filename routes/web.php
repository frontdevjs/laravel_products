<?php

use App\Http\Controllers\IndexController;
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




Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/all-categories', [IndexController::class, 'categories'])->name('index.categories');
Route::get('/all-categories/category/{cat}', [IndexController::class, 'category'])->name('index.category');
Route::get('/all-products', [IndexController::class, 'products'])->name('index.products');
Route::get('/all-products/product/{id}', [IndexController::class, 'showProduct'])->name('index.product');
Route::get('/faqs', [IndexController::class, 'faq'])->name('index.faqs');
Route::get('/about', [IndexController::class, 'about'])->name('index.about');
Route::get('/cart', [IndexController::class, 'cart'])->name('index.cart');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
