<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="{{ asset ('public/css/app.css') }}" rel="stylesheet"/>
    <link href="{{ asset ('public/css/header.css') }}" rel="stylesheet"/>
    <link href="{{ asset ('public/css/footer.css') }}" rel="stylesheet"/>

    <link href="{{ asset ('public/css/confirm_order.css') }}" rel="stylesheet"/>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=ABeeZee&display=swap" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet"/>
    <title>Confirm order</title>
</head>
<body>
@include('includes/header')
<section class="order">
    <div class="order-block">
        <div>
            <div class="section-title">
                <img src="public/images/shopping_cart.svg" alt="">
                Особисті дані
            </div>
            <div class="section-line"></div>
        </div>
        <div class="order-user-info-block">
            <div class="order-user-info-block-line">
                ІМ'Я
                <div class="order-user-info-block-line-input">
                    УЛЬЯНА
                </div>
            </div>
            <div class="order-user-info-block-line">
                ФАМІЛІЯ
                <div class="order-user-info-block-line-input">
                    ПИРОГОВСЬКА
                </div>
            </div>
            <div class="order-user-info-block-line">
                ПО-БАТЬКОВІ
                <div class="order-user-info-block-line-input">
                    ВОЛОДИМИРІВНА
                </div>
            </div>
            <div class="order-user-info-block-line">
                ЕЛ. ПОШТА
                <div class="order-user-info-block-line-input">
                    ULLASA@UKR.NET
                </div>

            </div>
            <div class="order-user-info-block-line">
                ТЕЛЕФОН
                <div class="order-user-info-block-line-input">
                    380965466098
                </div>
            </div>
            <div class="order-user-info-block-line">
                АДРЕСА ДОСТАВКИ
                <div class="order-user-info-block-line-input">
                    КИЇВ, ВІДДІЛЕННЯ НОВОЇ ПОШТИ №5
                </div>
            </div>
        </div>
        <div class="section-line"></div>
        <div class="order-payment">
            <div class="title">
                Спосіб оплати
            </div>
            <div class="order-payment-decision">
                <div class="order-payment-circle"></div>
                <p>Оплата при отриманні товару</p>
            </div>
            <div class="order-payment-decision">
                <div class="order-payment-circle"></div>
                <p>Оплата картою Visa/MasterCard (LiqPay)</p>
            </div>
        </div>
        <div class="section-line"></div>
        <div class="order-products">
            <table>
                <tr>
                    <th>Позиція</th>
                    <th>Ціна</th>
                    <th>Кількість</th>
                </tr>
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
        <div class="section-line"></div>
        <div class="order-sum">
            <p>СУМА</p>
            <p >189 ₴</p>
        </div>
    </div>
    <div class="order-confirm-button-div">
        <button class="order-confirm-button">ПІДТВЕРДИТИ ЗАМОВЛЕННЯ</button>
    </div>
</section>
@include('includes/footer')
</body>
</html>
