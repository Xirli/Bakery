@extends('welcome')
@section('content')
    <link rel="stylesheet" href=" {{ asset('public/css/products.css') }}">
    <div class="container">
        <div class="page_name">
            <h1 class="name_head">Хліб класичний</h1>
            <hr class="name_line">
        </div>
    </div>
    <div class="wrap_divs">
        <div class="product">
            <a href="/Bakery/product">
                <div class="prod_img">
                    <img  src="public/images/prod_1.png">
                </div>
            </a>
            <div class="prod_1">
                <div class="prod_name"><a href="/Bakery/product">Хліб білий</a></div>
                <div class="prod_price">20₴</div>
            </div>
            <div class="prod_2">
                <div class="stars"></div>
                <button class="buy"></button>
            </div>
        </div>
        <div class="product">
            <div class="prod_img">
                <img  src="public/images/prod_2.png">
            </div>
            <div class="prod_1">
                <div class="prod_name">Цеглинка біла</div>
                <div class="prod_price">18₴</div>
            </div>
            <div class="prod_2">
                <div class="stars"></div>
                <button class="buy"></button>
            </div>
        </div>
        <div class="product">
            <div class="prod_img">
                <img  src="public/images/prod_3.png">
            </div>
            <div class="prod_1">
                <div class="prod_name">Багет звичайний</div>
                <div class="prod_price">18₴</div>
            </div>
            <div class="prod_2">
                <div class="stars"></div>
                <button class="buy"></button>
            </div>
        </div>
        <div class="product">
            <div class="prod_img">
                <img  src="public/images/prod_4.png">
            </div>
            <div class="prod_1">
                <div class="prod_name">Хліб гарбузовий</div>
                <div class="prod_price">18₴</div>
            </div>
            <div class="prod_2">
                <div class="stars"></div>
                <button class="buy"></button>
            </div>
        </div>
        <div class="product">
            <div class="prod_img">
                <img  src="public/images/prod_5.png">
            </div>
            <div class="prod_1">
                <div class="prod_name">Хліб цільнозерновий</div>
                <div class="prod_price">18₴</div>
            </div>
            <div class="prod_2">
                <div class="stars"></div>
                <button class="buy"></button>
            </div>
        </div>
        <div class="product">
            <div class="prod_img">
                <img  src="public/images/prod_6.png">
            </div>
            <div class="prod_1">
                <div class="prod_name">Чіабатта</div>
                <div class="prod_price">18₴</div>
            </div>
            <div class="prod_2">
                <div class="stars"></div>
                <button class="buy"></button>
            </div>
        </div>
    </div>
    <div class="see_more_button_div">
        <button class="see_more_button">
            Показати більше
        </button>
    </div>
@endsection
