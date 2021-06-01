<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function load_all(){
        $page_name = 'Все меню';
        $all_cat = Category::all();
        $products = Product::with('productPhotos')->get();
        return view('products', ['products' => $products], compact('page_name', 'all_cat'));
    }
    public function load($id)
    {
        $all_cat = Category::all();
        $page_name = Category::find($id)->category_name;
        $products = Product::with('productPhotos')->where('category_id', '=', $id)->get();
        return view('products',compact('all_cat','page_name', 'products' ));
    }

    function detail($id){
        $product = Product::with('productPhotos')->find($id);
        $page_name = $product->name;
        $all_cat = Category::all();
        $some_products = Product::where([['id', '!=', $id ], ['category_id', '=', $product->category_id]])->get();
        return view('product', compact('product', 'page_name', 'some_products', 'all_cat'));
    }
    function addReview(Request $request, $id){
        $product = Product::find($id);
        $user = auth()->user();
        if($request->input('star') == null){
            return redirect()->back()->with('message', 'Введіть рейтинг від 1 зірки!');
        }
        $product->makeReview($user,$request->input('star'),$request->input('review'));
        return redirect()->back();
    }
    function showReview($id){
        $product = Product::find($id);
        return $product->reviews();
    }
}
