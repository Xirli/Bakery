<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="{{ asset ('public/css/app.css') }}" rel="stylesheet"/>

    <link href="{{ asset ('public/css/header.css') }}" rel="stylesheet"/>
    <link href="{{ asset ('public/css/footer.css') }}" rel="stylesheet"/>


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ABeeZee&display=swap" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet"/>

    <link href="{{ asset ('public/css/profile_page.css') }}" rel="stylesheet"/>

    <title>Profile page</title>
</head>
<body>
@include('includes/header')
<section>
    <div class="personal-data">
        <div class="personal-data-block">
            <div>
                <div class="personal-data-title">
                    <img src="public/images/user.svg" alt="">
                    Особисті дані
                </div>
                <div class="personal-data-line"></div>
            </div>
            <div class="personal-data-info">
                <div class="personal-data-info-block">
                    ІМ'Я
                    <span class="personal-data-info-block-personal">УЛЬЯНА</span>
                </div>
                <div class="personal-data-info-block">
                    ФАМІЛІЯ
                    <span class="personal-data-info-block-personal">ПИРОГОВСЬКА</span>
                </div>
                <div class="personal-data-info-block">
                    ПО-БАТЬКОВІ
                    <span class="personal-data-info-block-personal">ВОЛОДИМИРІВНА</span>
                </div>
                <div class="personal-data-info-block">
                    ЕЛ. ПОШТА
                    <span class="personal-data-info-block-personal">ULLASA@UKR.NET</span>
                </div>
                <div class="personal-data-info-block">
                    ТЕЛЕФОН
                    <span class="personal-data-info-block-personal">380965466098</span>
                </div>
                <div class="personal-data-info-block">
                    АДРЕСА ДОСТАВКИ
                    <span class="personal-data-info-block-personal">КИЇВ, ВІДДІЛЕННЯ НОВОЇ ПОШТИ №5</span>
                </div>
            </div>
        </div>

        <div class="personal-data-edit-button-div">
            <button class="personal-data-edit-button">Редагувати дані</button>
        </div>
    </div>
    <div class="my-orders">
        <div class="my-orders-block">
            <div>
                <div class="personal-data-title">
                    <img src="public/images/shopping_cart.svg" alt="">
                    Мої замовлення
                </div>
                <div class="personal-data-line"></div>
            </div>
            <div class="my-order-inner-block">
                <div class="my-orders-order-number">
                    ЗАМОВЛЕННЯ № 3
                    <div class="my-orders-order-number-line"></div>
                </div>
                <div class="my-orders-products">
                    <table>
                        <tr>
                            <td>Хліб гарбузовий</td>
                            <td>36 ₴</td>
                            <td>2 шт.</td>
                        </tr>
                        <tr>
                            <td>Хліб цільнозерновий</td>
                            <td>22 ₴</td>
                            <td>5 шт.</td>
                        </tr>
                        <tr>
                            <td>Чіабатта</td>
                            <td>20 ₴</td>
                            <td>1 шт.</td>
                        </tr>
                        <tr>
                            <td>Цеглинка біла</td>
                            <td>14 ₴</td>
                            <td>3 шт.</td>
                        </tr>
                    </table>
                </div>
                <div>
                    <div class="my-orders-products-sum-line"></div>
                    <div class="my-orders-products-sum">
                        <p>СУМА</p>
                        <p>189 ₴</p>
                    </div>
                </div>
                <div class="my-orders-user-info">
                    <div class="my-orders-user-info-block">
                        Ульяна
                        <span class="my-orders-user-info-block-left">ullasa@ukr.net</span>
                    </div>
                    <div class="my-orders-user-info-block">
                        Пироговська
                        <span class="my-orders-user-info-block-left">380965466098</span>
                    </div>
                    <div class="my-orders-user-info-block">
                        Володимирівна
                        <span class="my-orders-user-info-block-left">Київ, Відділення Нової Почти №5</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-orders-load-more-button-div">
            <button class="my-orders-load-more-button">ПОКАЗАТИ ЩЕ</button>
        </div>
    </div>
</section>
@include('includes/footer')
</body>
</html>
