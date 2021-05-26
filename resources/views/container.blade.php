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
            <a href="products/all">
                <div class="item1" style="background: url('public/images/cat_all.png') center center no-repeat;"><p class="cat_text">Все меню</p></div>
            </a>
            @foreach($all_cat as $category)
                <a href="products/{{$category->id}}">
                    <div class="item1" style="background: url('{{$category->category_photo}}') center center no-repeat;"><p class="cat_text">{{$category->category_name}}</p></div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
