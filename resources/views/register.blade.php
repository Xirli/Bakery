<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset ('public/css/app.css') }}" rel="stylesheet"/>
    <link href="{{ asset ('public/css/header.css') }}" rel="stylesheet"/>
    <link href="{{ asset ('public/css/footer.css') }}" rel="stylesheet"/>
    <!-- Content style -->
    <link href="{{ asset ('public/css/register.css') }}" rel="stylesheet"/>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=ABeeZee&display=swap" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet"/>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
</head>
<body>
@include('includes/header')

<div class="section_title">
    <h1>Реєстрація</h1>
    <div class="title_line"></div>

    <div class="content">


        <div class="row">
            <div class="col">
                <div class="left_text">ІМ'Я</div>
            </div>
            <div class="col">
                <input class="content_form" placeholder="" type="text" name="search_str" autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="left_text">ФАМІЛІЯ</div>
            </div>
            <div class="col">
                <input class="content_form" placeholder="" type="text" name="search_str" autocomplete="off">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="left_text">ПО-БАТЬКОВІ</div>
            </div>
            <div class="col">
                <input class="content_form" placeholder="" type="text" name="search_str" autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="left_text">ЕЛ. ПОШТА</div>
            </div>
            <div class="col">
                <input class="content_form" placeholder="" type="text" name="search_str" autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="left_text">ТЕЛЕФОН</div>
            </div>
            <div class="col">
                <input class="content_form" placeholder="" type="text" name="search_str" autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="left_text">АДРЕСА ДОСТАВКИ</div>
            </div>
            <div class="col">
                <input class="content_form" placeholder="" type="text" name="search_str" autocomplete="off">
            </div>
        </div>

        <div class="title_line"></div>

        <button class="my-button">ЗАРЕЄСТРУВАТИСЯ</button>

    </div>
</div>
@include('includes/footer')
</body>
</html>
