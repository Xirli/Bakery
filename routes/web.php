<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    $all_cat = Category::all();
    $all_news = News::all();
    $some_cat = $all_cat ->take(6);
    $page_name = 'Bakery';
    return view('landing', compact('page_name', 'all_cat', 'all_news', 'some_cat'));
});
Route::get('/contacts', function () {
    $all_cat = Category::all();
    return view('contacts', ['page_name' => 'Контакти'], compact('all_cat'));
});
Route::get('/about', function () {
    $all_cat = Category::all();
    return view('about', ['page_name' => 'Про нас'], compact('all_cat'));
});
Route::get('/menu', function () {
    $all_cat = Category::all();
    return view('menu', ['page_name' => 'Меню'], compact('all_cat'));
});
Route::get('/news',[App\Http\Controllers\NewsController::class, 'load_all']);
Route::get('/news{id}',[App\Http\Controllers\NewsController::class, 'load']);
Route::get('/products/all', [App\Http\Controllers\ProductController::class, 'load_all']);
Route::get('/products/{id}/product', [App\Http\Controllers\ProductController::class, 'detail'])->name('product');
Route::get('/products/{category_id}', [App\Http\Controllers\ProductController::class, 'load']);
Route::get('/menu', [App\Http\Controllers\CategoryController::class, 'load']);

Route::get('/shopping_cart', [App\Http\Controllers\CartController::class, 'load'])->name('cart');
Route::post('/shopping_cart/{product}', [App\Http\Controllers\CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{product}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy');
Route::patch('/cart/{product}', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'updateUser'])->name('updateUser');

Route::get('/confirm_order', [App\Http\Controllers\OrderController::class, 'load'])->name('order');
Route::post('/confirm_order', [App\Http\Controllers\OrderController::class, 'confirm'])->name('order.confirm');
Route::post('/send', [App\Http\Controllers\HomeController::class, 'send'])->name('send');

Route::post('/products/{id}/product', [ProductController::class, 'addReview'])->name('addReview');
Auth::routes();
