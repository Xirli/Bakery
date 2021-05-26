@extends('welcome')
@section('content')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href=" {{ asset('public/css/products.css') }}">
    <div class="container">
        <div class="page_name">
            <h1 class="name_head">{{$page_name}}</h1>
            <hr class="name_line">
        </div>
    </div>
    <div id="myList" class="wrap_divs">
        @foreach($products as $product)
            <div class="product">
                <a href="/Bakery/products/{{$product->id}}/product">
                    <div class="prod_img">
                        <img src="{{asset($product->main_photo)}}">
                    </div>
                </a>
                <div class="prod_1">
                    <div class="prod_name"><a href="/Bakery/products/{{$product->id}}/product">{{$product->name}}</a></div>
                    <div class="prod_price">{{$product->value}}₴</div>
                </div>
                <div class="prod_2">
                    <div class="stars"></div>
                    <button class="buy"></button>
                </div>
            </div>
        @endforeach
    </div>
    <div class="see_more_button_div">
        <button id="loadMore" class="see_more_button">
            Показати більше
        </button>
    </div>
    <script>
        $(document).ready(function () {
            size_li = $('.product').length;
            x=3;
            $('#myList .product:lt('+x+')').show(1000);
            $('#loadMore').click(function () {
                x= (x+5 <= size_li) ? x+5 : size_li;
                $('#myList .product:lt('+x+')').show(1000);
            });
        });
    </script>
@endsection
