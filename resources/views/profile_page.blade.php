@extends('welcome')
@section('content')
    <link href="{{ asset ('public/css/profile_page.css') }}" rel="stylesheet"/>
    <div class="container">
        <div class="personal-data">
            <div class="personal-data-block">
                <div>
                    <div class="personal-data-title">
                        <img src="public/images/user.svg" alt="">
                        Особисті дані
                    </div>
                    <div class="personal-data-line"></div>
                </div>
                <form method="POST" action="{{ route('updateUser') }}">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <label for="first_name" class="left_text">{{ __('ІМЯ') }}</label>
                        </div>
                        <div class="col">
                            <input id="first_name" class="content_form @error('first_name') is-invalid @enderror"
                                   placeholder="" type="text" name="first_name"  value="{{ $user_details->first_name }}" required autocomplete="off" autofocus>
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="last_name" class="left_text">{{ __('ФАМІЛІЯ') }}</label>
                        </div>
                        <div class="col">
                            <input id="last_name" class="content_form @error('last_name') is-invalid @enderror"
                                   placeholder="" type="text" name="last_name" value="{{ $user_details->last_name }}" required autocomplete="off" autofocus>
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="father_name" class="left_text">{{ __('ПО-БАТЬКОВІ') }}</label>
                        </div>
                        <div class="col">
                            <input id="father_name" class="content_form @error('father_name') is-invalid @enderror" placeholder="" type="text" name="father_name" value="{{$user_details->father_name}}" required autocomplete="off" autofocus>
                            @error('father_name')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="email" class="left_text">{{ __('ЕЛ. ПОШТА') }}</label>
                        </div>
                        <div class="col">
                            <input id="email" type="email" class="content_form @error('email') is-invalid @enderror"
                                   placeholder=""  name="email" value="{{ $user_details->email }}" required autocomplete="off">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="phone" class="left_text">{{ __('ТЕЛЕФОН') }}</label>
                        </div>
                        <div class="col">
                            <input id="phone" class="content_form @error('phone') is-invalid @enderror"
                                   placeholder="" type="text" name="phone" value="{{ $user_details->phone }}" required autocomplete="off" autofocus>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="address" class="left_text">{{ __('АДРЕСА ДОСТАВКИ') }}</label>
                        </div>
                        <div class="col">
                            <input id="address" class="content_form @error('address') is-invalid @enderror"
                                   placeholder="" type="text" name="address" value="{{ $user_details->address }}" required autocomplete="off" autofocus>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="title_line"></div>
                    <div class="wrap_button">
                        <button type="submit" class="personal-data-edit-button">{{ __('Редагувати дані') }}</button>
                    </div>
                </form>
                <div class="wrap_button">
                    <button type="button" class="personal-data-edit-button"><a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                        {{ __('Вийти з аккаунту') }}</a></button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        <div class="my-orders">
            <div class="my-orders-block">
                    <div class="personal-data-title">
                        <img src="public/images/shopping_cart.svg" alt="">
                        Мої замовлення
                    </div>
                    <div class="personal-data-line"></div>
            </div>
        </div>
        <div id="myList">
            @foreach($orders as $order)
                <div class="my-order-inner-block">
                    <div class="my-orders-order-number">
                        ЗАМОВЛЕННЯ № {{$order->id}}
                        <div class="my-orders-order-number-line"></div>
                    </div>
                    <div class="my-orders-products">
                        <table class="top_table">
                            @foreach($order->cart_items as $item)
                                <tr>
                                    <td>{{\App\Models\Product::find($item->product_id)->name}}</td>
                                    <td>{{\App\Models\Product::find($item->product_id)->value}} ₴</td>
                                    <td>{{$item->quantity}} шт.</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>СУМА</td>
                                <td>{{$order->price}} ₴</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div class="my-orders-order-number-line"></div>
                    <div class="my-orders-products">
                        <table class="bottom_table">
                            <tr>
                                <td>{{$order->first_name}}</td>
                                <td></td>
                                <td>{{$order->email}}</td>
                            </tr>
                            <tr>
                                <td>{{$order->last_name}}</td>
                                <td></td>
                                <td>{{$order->phone}}</td>
                            </tr>
                            <tr>
                                <td>{{$order->father_name}}</td>
                                <td></td>
                                <td>{{$order->address}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
