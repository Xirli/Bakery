<?php

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


Route::get('/login1', function () {
    $all_cat = Category::all();
    $page_name = 'Вхід';
    return view('login', compact('page_name', 'all_cat'));
});


Route::get('/shopping', function () {
    return view('shopping_cart');
});
Route::get('/shopping_cart', function () {
    $page_name = 'Кошик';
    return view('shopping_cart', compact('page_name'));
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'updateUser'])->name('updateUser');

//Route::get('/profile_page', function () {
//    return view('profile_page');
//});

Route::get('/confirm', function () {
    return view('confirm_order');
});
Route::get('/confirm_order', function () {
    return view('confirm_order');
});

Auth::routes();
