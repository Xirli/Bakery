@extends('welcome')
@section('content')
    <link href="{{ asset ('public/css/profile_page.css') }}" rel="stylesheet"/>
    <h1 style="font-size: 50px; text-align:center; margin-top:100px;margin-bottom: 50px; font-family: Caveat">Дякуємо за замовлення!</h1>
    <div class="my-order-inner-block">
        <div class="my-orders-order-number">
            ЗАМОВЛЕННЯ № {{$ord->id}}
            <div class="my-orders-order-number-line"></div>
        </div>
        <div class="my-orders-products">
            <table class="top_table">
                @foreach($ord->cart_items as $item)
                    <tr>
                        <td>{{\App\Models\Product::find($item->product_id)->name}}</td>
                        <td>{{\App\Models\Product::find($item->product_id)->value}} ₴</td>
                        <td>{{$item->quantity}} шт.</td>
                    </tr>
                @endforeach
                <tr>
                    <td>СУМА</td>
                    <td>{{$ord->price}} ₴</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="my-orders-order-number-line"></div>
        <div class="my-orders-products">
            <table class="bottom_table">
                <tr>
                    <td>{{$ord->first_name}}</td>
                    <td></td>
                    <td>{{$ord->email}}</td>
                </tr>
                <tr>
                    <td>{{$ord->last_name}}</td>
                    <td></td>
                    <td>{{$ord->phone}}</td>
                </tr>
                <tr>
                    <td>{{$ord->father_name}}</td>
                    <td></td>
                    <td>{{$ord->address}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
