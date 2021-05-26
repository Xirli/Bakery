@extends('welcome')
@section('content')
    <link href="{{ asset ('public/css/login.css') }}" rel="stylesheet"/>
    <div class="container">
        <div class="section_title">
            <h1>Вхід</h1>
            <div class="title_line"></div>
            <div class="content">
                <div class="row">
                    <div class="col em">
                        <div class="left_text">ЕЛ. ПОШТА</div>
                    </div>
                    <div class="col">
                        <input class="content_form" placeholder="ВВЕДІТЬ ПОШТУ" type="text" name="search_str" autocomplete="off">
                    </div>
                </div>
                <div class="row">
                    <div class="col pas">
                        <div class="left_text">ПАРОЛЬ</div>
                    </div>
                    <div class="col">
                        <input class="content_form" type="password" placeholder="ВВЕДІТЬ ПАРОЛЬ" name="search_str" autocomplete="off">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="forgot_password">
                            <a href="URL"><u>Не пам'ятаєте пароль?</u></a>
                        </div>
                    </div>
                </div>

                <div class="title_line"></div>

                <button class="my-button">ВВІЙТИ</button>

                <div class="no_account">
                    <a href="URL"><u>Не маєте аккаунту? Зареєструйтесь!</u></a>
                </div>

            </div>
        </div>
    </div>
@endsection
