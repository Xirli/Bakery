<?php

namespace App\Http\Controllers;

use App\Models\Cart_item;
use App\Models\Category;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
//    public function thanks(){
//        $all_cat = Category::all();
//
//        return view('thanks', ['page_name' => 'Дякуємо'], compact('all_cat'));
//    }
    public function load(){
        if(Cart::count() == 0){
            return redirect()->route('cart');
        }
        $all_cat = Category::all();
        $user_details = Auth::user();
        return view('confirm_order', ['page_name' => 'Замовлення'], compact('all_cat', 'user_details'));
    }
    public function confirm(Request $request){
        $user = Auth::id();

        $order = new Order;

        $validator = Validator::make($request::all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'father_name' => ['required', 'string', 'max:255'],
            'email' => ['required','string','email','max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
        ]);

        // if fails redirects back with errors
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Fill user model
        $order->fill([
            'user_id' => $user,
            'first_name' => Request::input('first_name'),
            'last_name' => Request::input('last_name'),
            'father_name' => Request::input('father_name'),
            'email' => Request::input('email'),
            'phone' => Request::input('phone'),
            'address' => Request::input('address'),
            'price' => Request::input('sum'),
            'pay' => Request::input('pay')
        ]);
        $order->save();
        foreach (Cart::content() as $item){
            $cart_item = new Cart_item;
            $cart_item->order_id = $order->id;
            $cart_item->product_id = $item->id;
            $cart_item->quantity = $item->qty;
            $cart_item->save();
        }
        Cart::destroy();
        $all_cat = Category::all();
        $ord = Order::with('Cart_items')->where('id', '=', $order->id)->first();
        return view('thanks', ['page_name' => 'Дякуємо'], compact('all_cat', 'ord'));
    }
}
