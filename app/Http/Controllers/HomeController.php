<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use App\Models\Order;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_cat = Category::all();
        $user_details = User::find(Auth::id());
        $page_name = 'Профіль';
        $orders = Order::with('Cart_items')->where('user_id','=',Auth::id())->get();
        return view('profile_page', compact('page_name', 'all_cat', 'user_details', 'orders'));
    }
    public function updateUser(Request $request)
    {
        $user = Auth::user();
        $id = Auth::id();
        // Validate the data submitted by user
        $validator = Validator::make($request::all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'father_name' => ['required', 'string', 'max:255'],
            'email' => ['required','string','email','max:255', Rule::unique('users')->ignore($id)],
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
        $user->fill([
            'first_name' => Request::input('first_name'),
            'last_name' => Request::input('last_name'),
            'father_name' => Request::input('father_name'),
            'email' => Request::input('email'),
            'phone' => Request::input('phone'),
            'address' => Request::input('address'),

        ]);


        $user->save();

        return redirect()->route('home');
    }
}
