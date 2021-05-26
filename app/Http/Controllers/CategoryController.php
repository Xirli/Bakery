<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function load(){
        $all_cat = Category::all();
        $page_name = 'Меню';
        return view('container',compact('all_cat', 'page_name'));
    }
}
