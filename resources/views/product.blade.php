@extends('welcome')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/js/slider.js') }}"></script>
    <link rel="stylesheet" href=" {{ asset('public/css/product.css') }}">
    <div class="container">
        <div class="page_name">
            <h1 class="name_head">{{$product->name}}</h1>
            <hr class="name_line">
        </div>
    </div>
    <div class="prod_wrap">
        <div class="wrap_carousel">
            <div id="sync1" class="owl-carousel owl-theme">
                @foreach($product->productPhotos as $ph)
                <div class="item">
                    <img src="{{asset($ph->photo)}}">
                </div>
                @endforeach
            </div>
            <div id="sync2" class="owl-carousel owl-theme">
                @foreach($product->productPhotos as $ph)
                    <div class="item">
                        <img src="{{asset($ph->photo)}}">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="prod_1-info">
            <div class="prod_text">Ціна: {{$product->value}}₴</div>
            <div class="rating">
                <span class="prod_text">Рейтинг:</span>
                <div class="stars"></div>
            </div>
            <div id="smaller_carousel" class="owl-carousel">
                @foreach($product->productPhotos as $ph)
                    <div class="item">
                        <img src="{{asset($ph->photo)}}">
                    </div>
                @endforeach
            </div>
            <div class="wrap_things">
                <p class="prod_text_1">{{$product->description}}</p>
                <div class="add_to_cart">
                    <button class="add">Додати ди кошику</button>
                    <div class="add_count">
                        <button class="plus">+</button>
                        <span class="prod_text">2 шт.</span>
                        <button class="minus">-</button>
                    </div>
                </div>
            </div>

            <h1 class="more_head">Також перегляньте</h1>
            <div id="more_products" class="owl-carousel">
                @foreach($some_products as $some)
                    <div class="product">
                        <a href="/Bakery/products/{{$some->id}}/product">
                        <div class="prod_img">
                            <img  src="{{asset($some->main_photo)}}">
                        </div>
                        </a>
                        <div class="prod_1">
                            <div class="prod_name"><a href="/Bakery/products/{{$some->id}}/product">{{$some->name}}</a></div>
                            <div class="prod_price">{{$some->value}}₴</div>
                        </div>
                        <div class="prod_2">
                            <div class="stars"></div>
                            <button class="buy"></button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="page_name">
            <h1 class="name_head">Відгуки</h1>
            <hr class="name_line">
        </div>
        <div class="wrap_reviews">
            <div class="review">
                <div class="all-t-wrap">
                    <div class="name_n_time">
                        <div class="name">Олексій Гончарук</div>
                        <div class="time">2020-12-25 14:35</div>
                    </div>
                    <div class="user_st">
                        <div>Оцінка:</div>
                        <div class="rev_stars"></div>
                    </div>
                    <div class="rev_text">Дуже смачний хлібобулочний виріб! Уся сім’я смакує!</div>
                </div>
            </div>
            <div class="see_more_button_div">
                <button class="see_more_button">
                    Показати більше
                </button>
            </div>
        </div>
        <div class="page_name">
            <h1 class="name_head">Залишити відгук</h1>
            <hr class="name_line">
        </div>
        <div class="rating1">
            <div class="prod_text1">Виставте оцінку:</div>
            <div class="stars1"></div>
        </div>
        <textarea placeholder="Введіть текст тут..." class="review_form"></textarea>
        <div class="see_more_button_div">
            <button class="see_more_button" style="border: 1px solid #CF8D2E;color: #CF8D2E">Надіслати</button>
        </div>
    </div>
@endsection
