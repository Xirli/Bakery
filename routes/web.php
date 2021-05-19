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
