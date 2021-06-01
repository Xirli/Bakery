@extends('welcome')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/js/slider.js') }}"></script>
    <link rel="stylesheet" href=" {{ asset('public/css/product.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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
                    {{$product->rating}}
                </div>
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
                    <form  action="{{ route('cart.store', $product) }}" method="post">
                        {{ csrf_field() }}
                        <div class="add_to_cart">
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="hidden" name="name" value="{{$product->name}}">
                        <input type="hidden" name="value" value="{{$product->value}}">
                        <button type="submit" class="add">Додати ди кошику</button>
                        <div class="add_count">
                            <button type="button" class="plus">+</button>
                            <input name="count" id="count" class="prod_text" type="text" value="1" readonly><span class="prod_text">шт.</span>
                            <button type="button" class="minus">-</button>
                        </div>
                        </div>
                    </form>
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
                            <div class="stars_1">
                                @for ($i = 0; $i < 5; $i++)
                                    @if (floor($some->rating) - $i >= 1)
                                        {{--Full Start--}}
                                        <i class="fas fa-star text-warning"> </i>
                                    @elseif ($some->rating - $i > 0)
                                        {{--Half Start--}}
                                        <i class="fas fa-star-half-alt text-warning"> </i>
                                    @else
                                        {{--Empty Start--}}
                                        <i class="far fa-star text-warning"> </i>
                                    @endif
                                @endfor</div>
                            <form  action="{{ route('cart.store', $some) }}" method="post">
                                {{ csrf_field() }}
                                <input name="count" id="count" class="prod_text" value="1" type="hidden" readonly>
                                <button class="buy"></button>
                            </form>
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
        <div id="myList" class="wrap_reviews">
            @foreach ($product->reviews as $review)
                <div class="review">
                    <div class="add_review_wrap">
                        <div class="all-t-wrap">
                            <div class="name_n_time">
                                <div class="name">{{$review->user->first_name}} {{$review->user->last_name}}</div>
                                <div class="time">{{$review->created_at}}</div>
                            </div>
                            <div class="user_st">
                                <div>Оцінка:</div>
                                <div class="star_for_show">
                                    @for ($i = 0; $i < $review->rating; $i++)
                                        <label class="fa fa-star"></label>
                                    @endfor
                                </div>
                            </div>
                            <div class="rev_text">{{$review->review}}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div id="loadMore" class="see_more_button_div">
            <button class="see_more_button">
                Показати більше
            </button>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                var x1 = document.getElementById("loadMore");
                size_li = $('.review').length;
                x=2;
                if(x >= size_li){
                    x1.style.display = "none";
                }
                $('#myList .review:lt('+x+')').show(1000);
                $('#loadMore').click(function () {
                    x= (x+2 <= size_li) ? x+2 : size_li;
                    $('#myList .review:lt('+x+')').show(1000);
                    if(x >= size_li){
                        x1.style.display = "none";
                    }
                });
            });
        </script>
        <div class="page_name">
            <h1 class="name_head">Залишити відгук</h1>
            <hr class="name_line">
        </div>
        @auth
            <form method="Post" action="{{route('addReview', ['id' => $product->id])}}">
                @csrf
        <div class="rating1">
            <div class="prod_text1">Виставте оцінку:</div>
            <div class="stars1">
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <label class="star star-5" for="star-5"></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <label class="star star-4" for="star-4"></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <label class="star star-3" for="star-3"></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <label class="star star-2" for="star-2"></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <label class="star star-1" for="star-1"></label>
            </div>
        </div>
                @if (session()->has('message'))
                    <div class="alert alert-danger">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <textarea id="review" type="text" name="review" placeholder="Введіть текст тут..." value="{{ old('review') }}" class="review_form"></textarea>
                @error('review')
                <span class="add-product-review-input-text-box" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
        <div class="see_more_button_div">
            <button class="see_more_button" style="border: 1px solid #CF8D2E;color: #CF8D2E">Надіслати</button>
        </div>
            </form>
                @else
                    <div>
                        <a href="{{route('login')}}">
                            <div class="mb-8 text-center text-gray-600">
                                Для початку авторизуйтеся в системі!
                            </div>
                        </a>
                    </div>
        @endauth
        </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.minus').click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
        });
    </script>
@endsection
