<div class="container bef_h"></div>
<div class="stick_header">
    <div class="header_wrap">
        <div class="container header_wrap1">
            <div class="row small_header">
                <div class="col-2 c1">
                    <div class="telephone">
                        <img src="{{asset('public/images/phone.svg')}}" style="height: 20px; width: 20px"><span>+1-2222-44445-44</span>
                    </div>
                </div>
                <div class="col-3 c1">
                    <div class="email">
                        <img src="{{asset('public/images/email.svg')}}" style="height: 20px; width: 20px"><span>bakery@gmail.com</span>
                    </div>
                </div>
                <div class="col-4 c1">
                    <div class="time-table">
                        <img src="{{asset('public/images/clock.svg')}}" style="height: 20px; width: 20px"><span> Пн - Пт / 10:00-21:00, Сб - Нд / 09:00 - 23:00</span>
                    </div>
                </div>
                <div class="col-2 c1 offset-1">
                    <div class="social">
                        <img src="{{asset('public/images/instagram.svg')}}" style="height: 20px; width: 20px">
                        <img src="{{asset('public/images/tiktok.svg')}}" style="height: 20px; width: 20px">
                        <img src="{{asset('public/images/pinterest.svg')}}" style="height: 20px; width: 20px">
                        <img src="{{asset('public/images/facebook.svg')}}" style="height: 20px; width: 20px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu_c">
        <div class="container menu">
            <div class="wrap_submenu">
                <div class="submenu">
                    <div class="dropdown">
                        <button class="dropbtn" style="background: url({{asset('public/images/menubar.svg')}}) no-repeat center center;">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-content">
                            <li><a href="/Bakery/menu" >Меню</a>
                                <ul>
                                    @foreach($all_cat as $cat)
                                        <li><a href="/Bakery/products/{{$cat->id}}">{{$cat->category_name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="#">Клієнтам</a>
                                <ul>
                                    <li><a href="/Bakery/about">Про нас</a></li>
                                    <li><a href="/Bakery/contacts">Контакти</a></li>
                                </ul>
                            </li>
                            <li><a href="/Bakery/news">Новини</a></li>
                        </ul>
                    </div>
                    <img class="phone" src="{{asset('public/images/phone_mob.svg')}}">
                    <div class="dropdown1">
                        <button class="dropbtn1">
                            <a href="/Bakery/menu" class="menu_a1">Меню</a>
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-content1">
                            @foreach($all_cat as $cat)
                                <li><a href="/Bakery/products/{{$cat->id}}">{{$cat->category_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="dropdown1">
                        <button class="dropbtn1">
                            <a class="menu_a1">Клієнтам</a>
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-content1">
                            <li><a href="/Bakery/about">Про нас</a></li>
                            <li><a href="/Bakery/contacts">Контакти</a></li>
                        </ul>
                    </div>
                    <button class="dropbtn1">
                        <a href="/Bakery/news" class="menu_a1">Новини</a>
                        <i class="fa fa-caret-down"></i>
                    </button>
                </div>
            </div>
            <div class="bakery">
                <a class="bak" href="/Bakery/">Bakery</a>
            </div>
            <div class="wrap_menu_icons" align="right">
                <div class="menu_icons">
                    <a href="{{ route('login') }}">
                        <img src="{{asset('public/images/user.svg')}}">
                    </a>
                    <img src="{{asset('public/images/shopping_cart.svg')}}">
                </div>
            </div>
        </div>
    </div>
</div>
