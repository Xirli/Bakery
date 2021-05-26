<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function load($id)
    {
        $all_cat = Category::all();
        $page_name = News::find($id)->title;
        $news = News::with('newsPhotos')->find($id);
        $some_news = News::where('id', '!=', $id)->get();
        return view('news_item',compact('all_cat','page_name', 'news', 'some_news'));
    }
    public function load_all(){
        $all_cat = Category::all();
        $all_news = News::all();
        return view('news', ['page_name' => 'Новини'], compact('all_cat', 'all_news'));
    }
}
