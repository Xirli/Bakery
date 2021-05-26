<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllPagesController extends Controller
{
    public function load_contacts($name){
        return view('contacts', ['page_name' => 'Контакти']);
//
    }
}
