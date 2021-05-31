@extends('welcome')
@section('content')
    <link href="{{ asset ('public/css/confirm_order.css') }}" rel="stylesheet"/>
    <link href="{{ asset ('public/css/profile_page.css') }}" rel="stylesheet"/>
    <div class="container">
        <form method="post" action="{{route('order.confirm')}}">
            @csrf
            <div class="order-block" >
                <div>
                    <div class="section-title">
                        <img src="public/images/shopping_cart.svg" alt="">
                        Особисті дані
                    </div>
                    <div class="section-line"></div>
                </div>
                <div class="personal-data">
                    @if(isset($user_details))
                        <div class="personal-data-block">
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
                        </div>
                    @else
                        <div class="personal-data-block">
                            <div class="row">
                                <div class="col">
                                    <label for="first_name" class="left_text">{{ __('ІМЯ') }}</label>
                                </div>
                                <div class="col">
                                    <input id="first_name" class="content_form @error('first_name') is-invalid @enderror"
                                           placeholder="" type="text" name="first_name"  value="" required autocomplete="off" autofocus>
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
                                           placeholder="" type="text" name="last_name" value="" required autocomplete="off" autofocus>
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
                                    <input id="father_name" class="content_form @error('father_name') is-invalid @enderror" placeholder="" type="text" name="father_name" value="" required autocomplete="off" autofocus>
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
                                           placeholder=""  name="email" value="" required autocomplete="off">
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
                                           placeholder="" type="text" name="phone" value="" required autocomplete="off" autofocus>
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
                                           placeholder="" type="text" name="address" value="" required autocomplete="off" autofocus>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="section-line"></div>
                <div class="order-payment">
                    <div class="title">
                        Спосіб оплати
                    </div>
                    <div class="order-payment-decision">
                        <input type="radio" name="pay" id="exampleRadios" value="cash" checked>
                        <label for="exampleRadios">
                            Оплата при отриманні товару
                        </label>
                    </div>
                    <div class="order-payment-decision">
                        <input type="radio" name="pay" id="exampleRadios1" value="card">
                        <label for="exampleRadios1">
                            Оплата картою Visa/MasterCard (LiqPay)
                        </label>
                    </div>
                </div>
                <div class="section-line"></div>
                <div class="order-products">
                    <input type="hidden" value="{{$sum = 0}}">
                    <table class="tab">
                        @foreach (Cart::content() as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->price * $item->qty}} ₴</td>
                                <td class="tab_price">{{$item->qty}}шт.</td>
                            </tr>
                            <input type="hidden" value="{{$sum += $item->price * $item->qty}}">
                        @endforeach
                            <tr>
                                <td>СУМА</td>
                                <td >{{$sum}} ₴</td>
                                <td></td>
                            </tr>
                    </table>
                    <input name="sum" value="{{$sum}}" type="hidden">
                </div>
                <div class="section-line"></div>
                <div class="order-confirm-button-div">
                    <button type="submit" class="order-confirm-button">ПІДТВЕРДИТИ ЗАМОВЛЕННЯ</button>
                </div>
            </div>
        </form>
    </div>
@endsection
