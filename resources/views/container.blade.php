@extends('welcome')
@section('content')
    <link rel="stylesheet" href=" {{ asset('public/css/container.css') }}">
    <div class="cont">
        <div class="container">
            <div class="page_name">
                <h1 class="name_head">Меню</h1>
                <hr class="name_line">
            </div>
        </div>
        <div class="wrap_divs">
            <div class="item1" style="background: url('public/images/cat_all.png') center center no-repeat;"><p class="cat_text">Все меню</p></div>
            <div class="item1" style="background: url('public/images/cat_1.png') center center no-repeat;"><p class="cat_text">Хліб класичний</p></div>
            <div class="item1" style="background: url('public/images/cat_2.png') center center no-repeat;"><p class="cat_text">Здобна випічка</p></div>
            <div class="item1" style="background: url('public/images/cat_3.png') center center no-repeat;"><p class="cat_text">Веганська випічка</p></div>
            <div class="item1" style="background: url('public/images/cat_4.png') center center no-repeat;"><p class="cat_text">Пироги</p></div>
            <div class="item1" style="background: url('public/images/cat_5.png') center center no-repeat;"><p class="cat_text">Хліб класичний</p></div>
            <div class="item1" style="background: url('public/images/cat_6.png') center center no-repeat;"><p class="cat_text">Хліб класичний</p></div>
        </div>
    </div>
@endsection
