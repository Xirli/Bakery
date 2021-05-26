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
        <iframe class="dem_scr" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.572449765475!2d30.4630884157313!3d50.44906397947518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce8314fdfde3%3A0xcaff87f52cccc2ec!2z0LLRg9C70LjRhtGPINCf0L7Qu9GW0YLQtdGF0L3RltGH0L3QsCwgNiwg0JrQuNGX0LIsIDAyMDAw!5e0!3m2!1suk!2sua!4v1621733161464!5m2!1suk!2sua" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
