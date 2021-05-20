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
            <h1 class="name_head">Хліб білий</h1>
            <hr class="name_line">
        </div>
    </div>
    <div class="container">
        <div class="wrap_carousel">
            <div id="owl-product" class="owl-carousel">
                <div><img src="public/images/prod_1.png"></div>
                <div><img src="public/images/produt_image_1.png"></div>
                <div><img src="public/images/prod_1.png"></div>
            </div>
            <div id="owl-product_all" class="owl-carousel">
                <div><img src="public/images/prod_1.png"></div>
                <div><img src="public/images/produt_image_1.png"></div>
                <div><img src="public/images/prod_1.png"></div>
            </div>
        </div>


    </div>
@endsection
