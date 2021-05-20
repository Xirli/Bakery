<?php

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

Route::get('/', function () {
    $page_name = 'Bakery';
    return view('landing', compact('page_name'));
});
Route::get('/contacts', function () {
    $page_name = 'Контакти';
    return view('contacts', compact('page_name'));
});
Route::get('/about', function () {
    $page_name = 'Про нас';
    return view('about', compact('page_name'));
});
Route::get('/menu', function () {
    $page_name = 'Меню';
    return view('container', compact('page_name'));
});
Route::get('/news', function () {
    $page_name = 'Новини';
    return view('news', compact('page_name'));
});
Route::get('/products', function () {
    $page_name = 'Хліб білий';
    return view('products', compact('page_name'));
});
Route::get('/product', function () {
    $page_name = 'Хліб класичний';
    return view('product', compact('page_name'));
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/shopping', function () {
    return view('shopping_cart');
});
Route::get('/shopping_cart', function () {
    return view('shopping_cart');
});

Route::get('/profile', function () {
    return view('profile_page');
});
Route::get('/profile_page', function () {
    return view('profile_page');
});

Route::get('/confirm', function () {
    return view('confirm_order');
});
Route::get('/confirm_order', function () {
    return view('confirm_order');
});
