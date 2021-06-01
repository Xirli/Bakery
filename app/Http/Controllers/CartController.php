<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Darryldecode\Cart\Validators\Validator;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function load(){
        $page_name = 'Кошик';
        $all_cat = Category::all();
        return view('shopping_cart', compact('page_name', 'all_cat'));
    }
    public function store(Product $product, Request $r){
        $row = null;
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($product) {
            $row = $rowId;
            return $cartItem->id === $product->id;
        });

        if ($duplicates->isNotEmpty()) {
            Cart::search(function ($cartItem, $rowId) use ($product, $r) {
                Cart::update($rowId, $cartItem->qty + $r->count)->associate('App\Models\Product');
                return $cartItem->id === $product->id;
            });
            return redirect()->route('cart')->with('success_message', 'Item is already in your cart!');
        }

        Cart::add($product->id, $product->name, $r->count, $product->value)->associate('App\Models\Product');

        return redirect()->route('cart')->with('success_message', 'Item was added to your cart!');
    }
    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success_message', 'Item has been removed!');
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'count' => 'between:1,10'
        ]);

        if ($validator->fails()) {
            session()->flash('errors', collect(['Quantity must be between 1 and 10.']));
            return response()->json(['success' => false], 400);
        }

        Cart::update($id, $request->count);
        session()->flash('success_message', 'Quantity was updated successfully!');
        return redirect()->route('cart');
    }
}
