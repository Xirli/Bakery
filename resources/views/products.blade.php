@extends('welcome')
@section('content')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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
                    <div class="stars">
                        @for ($i = 0; $i < 5; $i++)
                            @if (floor($product->rating) - $i >= 1)
                                {{--Full Start--}}
                                <i class="fas fa-star text-warning"> </i>
                            @elseif ($product->rating - $i > 0)
                                {{--Half Start--}}
                                <i class="fas fa-star-half-alt text-warning"> </i>
                            @else
                                {{--Empty Start--}}
                                <i class="far fa-star text-warning"> </i>
                            @endif
                        @endfor
                    </div>
                    <form  action="{{ route('cart.store', $product) }}" method="post">
                        {{ csrf_field() }}
                        <input name="count" id="count" class="prod_text" value="1" type="hidden" readonly>
                        <button class="buy"></button>
                    </form>

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
