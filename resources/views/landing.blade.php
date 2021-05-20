@extends('welcome')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href=" {{ asset('public/css/landing.css') }}">
    <div id="owl-demo" class="owl-carousel">
        <div><img src="public/images/fon.png"></div>
        <div><img src="public/images/fon.png"></div>
        <div><img src="public/images/fon.png"></div>
    </div>
    <div class="container">
        <div class="items">
            <div class="item1">
                <div class="i_h">
                    <img src="public/images/mug-hot.svg">
                    <span class="item_h">Смакує до гарячого</span>
                </div>
                <div class="item_t">Усі наші страви влучно доповнять ваш стіл і у домі завжди буде що до чаю</div>
            </div>
            <div class="item2">
                <div class="i_h">
                    <img src="public/images/time.svg">
                    <span class="item_h">Швидка доставка</span>
                </div>
                <div class="item_t">Усі замовлення одразу обробляються після отримання адміністратором</div>
            </div>
            <div class="item3">
                <div class="i_h">
                    <img src="public/images/bread.svg">
                    <span class="item_h" style="margin-left: 20px">Свіжа випічка</span>
                </div>
                <div class="item_t">Ми гарантуємо свіжість усіх продуктів, використаних у процесі випікання наших виробів</div>
            </div>
        </div>
        <div class="about_us">
            <h1 class="about_head">Про нас</h1>
            <hr class="about_line">
            <div class="wrab_ab">
                <div class="about_text">
                    "Bakery" - це одна з перших ремісничих пекарень в Україні. Для приготування хліба ми використовуємо лише жорнове борошно крупного помелу, суміш цільнозернового борошна і борошна крупного помелу, а також цільнозернове борошно. Кожна хлібина формується пекарем вручну.
                </div>
                <div class="ph_wrap">
                    <img class="img1" src="public/images/ab_img1.jpg">
                    <img class="img2" src="public/images/ab_img2.jpg">
                    <img class="img3" src="public/images/ab_img3.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="categories_wrap">
        <h1 class="cat_header">У нас ви можете знайти</h1>
        <div class="container">
            <div id="categories" class="owl-carousel">
                <a href="/#">
                    <div class="category_1">
                        <p class="cat_text">Хліб класичний</p>
                    </div>
                </a>

                <div class="category_2">
                    <p class="cat_text">Здобна випічка</p>
                </div>
                <div class="category_3">
                    <p class="cat_text">Веганська випічка</p>
                </div>
            </div>
            <div id="categories1" class="owl-carousel">
                <div class="category_4">
                    <p class="cat_text">Пироги</p>
                </div>
                <div class="category_5">
                    <p class="cat_text">Хліб класичний</p>
                </div>
                <div class="category_6">
                    <p class="cat_text">Хліб класичний</p>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    <div class="news_wrap">
        <h1 class="about_head">Новини</h1>
        <hr class="about_line">
        <div id="categories_news" class="owl-carousel">
            <div class="news_c">
                <h1 class="news_h">Різдвяна пропозиція</h1>
                <img class="news_photo" src="public/images/news_ph.png">
                <div class="news_t">Попереду – Різдво, тож готуємо святкове печиво на будь-який смак. В ідеалі готувати всією сім'єю, а потім дружно поїдати за різдвяним столом.</div>
                <div class="more_wrap">
                    <a class="more">Детальніше</a>
                    <img src="public/images/arrow.svg">
                </div>
            </div>
            <div class="news_c">
                <h1 class="news_h">Різдвяна пропозиція</h1>
                <img class="news_photo" src="public/images/news_ph.png">
                <div class="news_t">Попереду – Різдво, тож готуємо святкове печиво на будь-який смак. В ідеалі готувати всією сім'єю, а потім дружно поїдати за різдвяним столом.</div>
                <div class="more_wrap">
                    <a class="more">Детальніше</a>
                    <img src="public/images/arrow.svg">
                </div>
            </div>
            <div class="news_c">
                <h1 class="news_h">Різдвяна пропозиція</h1>
                <img class="news_photo" src="public/images/news_ph.png">
                <div class="news_t">Попереду – Різдво, тож готуємо святкове печиво на будь-який смак. В ідеалі готувати всією сім'єю, а потім дружно поїдати за різдвяним столом.</div>
                <div class="more_wrap">
                    <a class="more">Детальніше</a>
                    <img src="public/images/arrow.svg">
                </div>
            </div>
        </div>
        <button class="more_news">Всі новини</button>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/js/slider.js') }}"></script>
@endsection
