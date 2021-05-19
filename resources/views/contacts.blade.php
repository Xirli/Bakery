@extends('welcome')
@section('content')
    <link rel="stylesheet" href=" {{ asset('public/css/contacts.css') }}">
<div class="container">
    <div class="page_name">
        <h1 class="name_head">Контакти</h1>
        <hr class="name_line">
        <h1 class="contacts_name">Графік роботи</h1>
        <div class="wrap_timetable">
            <span>Пн-Пт: 10:00 - 21:00</span>
            <span>Сб-Нд: 9:00 - 23:00</span>
        </div>
        <img class="dem_scr" src="public/images/demo_screen.png">
        <div class="contacts_wrap">
            <div class="div1">
                <img class="c_ph" src="public/images/contacts_phone.png">
                <span class="cont_text">+1-2222-44445-44</span>
            </div>
            <div class="div2">
                <img class="c_em" src="public/images/email_contacts.svg">
                <span class="cont_text">bakery@gmail.com</span>
            </div>
            <div class="div3">
                <img class="c_loc" src="public/images/loc_contacts.svg">
                <span class="cont_text">Київ, вулиця Політехнічна 6</span>
            </div>
        </div>
    </div>

</div>
@endsection
