@extends('welcome')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/js/slider.js') }}"></script>
    <link rel="stylesheet" href=" {{ asset('public/css/product.css') }}">
    <link rel="stylesheet" href=" {{ asset('public/css/landing.css') }}">
    <div class="container">
        <div class="page_name">
            <h1 class="name_head">{{$news->title}}</h1>
            <hr class="name_line">
        </div>
    </div>
    <div class="prod_wrap">
        <div class="wrap_carousel">
            <div id="sync1" class="owl-carousel owl-theme">
                @foreach($news->newsPhotos as $n)
                    <div class="item">
                        <img src="{{$n->photo}}">
                    </div>
                @endforeach
            </div>
            <div id="sync2" class="owl-carousel owl-theme">
                @foreach($news->newsPhotos as $n)
                    <div class="item">
                        <img src="{{$n->photo}}">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="prod_1-info">
            <div id="smaller_carousel" class="owl-carousel">
                @foreach($news->newsPhotos as $n)
                    <div class="item">
                        <img src="{{$n->photo}}">
                    </div>
                @endforeach
            </div>
            <div class="wrap_things">
                <p class="news_text">{{$news->p1}}</p>
                <p class="news_text">{{$news->p2}}</p>
                <p class="news_text">{{$news->p3}}</p>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="more_head">Також перегляньте</h1>
        <div id="categories_news" style="margin-bottom: 100px" class="owl-carousel">
            @foreach($some_news as $n)
                <div class="news_c">
                    <h1 class="news_h">{{$n->title}}</h1>
                    <img class="news_photo" src="{{$n->main_photo}}">
                    <div class="news_t">{{$n->p1}}</div>
                    <div class="more_wrap">
                        <a href="/Bakery/news{{$n->id}} class="more">Детальніше</a>
                        <img src="public/images/arrow.svg">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
