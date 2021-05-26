@extends('welcome')
@section('content')
    <link href="{{ asset ('public/css/shopping_cart.css') }}" rel="stylesheet"/>
    <div class="container">
        <div class="title">
            <img id="basket" src="public/images/shopping_cart.svg" alt="img">
            <h1>Кошик</h1>
        </div>
        <div class="title_line"></div>
        <div class="content">

            <div class="row">
                <div class="col">
                    <div class="column_title">Позиція</div>
                </div>
                <div class="col">
                    <div class="column_title">Ціна</div>
                </div>
                <div class="col">
                    <div class="column_title">Кількість</div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="column_text">Хліб цільнозерновий</div>
                </div>
                <div class="col">
                    <div class="column_text">90 ₴</div>
                </div>
                <div class="col">
                    <div class="row">
                        <button class="plus_minus">+</button>
                        <span class="column_text2">5 шт.</span>
                        <button class="plus_minus">-</button>
                        <img class="cross" src="public/images/cross.png" alt="img">
                    </div></div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="column_text">Чіабатта</div>
                </div>
                <div class="col">
                    <div class="column_text">18 ₴</div>
                </div>
                <div class="col">
                    <div class="row">
                        <button class="plus_minus">+</button>
                        <span class="column_text2">1 шт.</span>
                        <button class="plus_minus">-</button>
                        <img class="cross" src="public/images/cross.png" alt="img">
                    </div></div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="column_text">Цеглина біла</div>
                </div>
                <div class="col">
                    <div class="column_text">54 ₴</div>
                </div>
                <div class="col">
                    <div class="row">
                        <button class="plus_minus">+</button>
                        <span class="column_text2">3 шт.</span>
                        <button class="plus_minus">-</button>
                        <img class="cross" src="public/images/cross.png" alt="img">
                    </div></div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="column_text">Хліб гарбузовий</div>
                </div>
                <div class="col">
                    <div class="column_text">36 ₴</div>
                </div>
                <div class="col">
                    <div class="row">
                        <button class="plus_minus">+</button>
                        <span class="column_text2">2 шт.</span>
                        <button class="plus_minus">-</button>
                        <img class="cross" src="public/images/cross.png" alt="img">
                    </div></div>
            </div>

            <div class="title_line"></div>

            <div class="row">
                <div class="col">
                    <div class="column_text">СУМА</div>
                </div>
                <div class="col">
                    <div class="column_text">198 ₴</div>
                </div>
                <div class="col">
                </div>
            </div>
            <div class="row">
                <button class="checkout-button">ОФОРМИТИ ЗАМОВЛЕННЯ</button>
            </div>

        </div>
    </div>
@endsection
