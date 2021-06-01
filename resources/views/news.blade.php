@extends('welcome')
@section('content')
    <link rel="stylesheet" href=" {{ asset('public/css/news.css') }}">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <div class="container">
        <div class="page_name">
            <h1 class="name_head">Новини</h1>
            <hr class="name_line">
        </div>
    </div>
    <div id="myList" class="wrap_divs">
        @foreach($all_news as $news)
            <div class="item1">
                <h1 class="news_h">{{$news->title}}</h1>
                <img class="news_photo" src="{{$news->main_photo}}">
                <div class="news_t">{{$news->p1}}</div>
                <div class="more_wrap">
                    <a href="/Bakery/news{{$news->id}}" class="more">Детальніше</a>
                    <img src="public/images/arrow.svg">
                </div>
            </div>
        @endforeach
    </div>
    <div id="myDIV" class="see_more_button_div">
        <button id="loadMore" class="see_more_button">
            Показати більше
        </button>
    </div>
    <script>
        $(document).ready(function () {
            var x1 = document.getElementById("myDIV");
            size_li = $('.item1').length;
            x=6;
            if(x >= size_li){
                x1.style.display = "none";
            }
            $('#myList .item1:lt('+x+')').show(1000);
            $('#loadMore').click(function () {
                x= (x+3 <= size_li) ? x+3 : size_li;
                $('#myList .item1:lt('+x+')').show(1000);
                if(x >= size_li){
                    x1.style.display = "none";
                }
            });
        });
    </script>
@endsection
