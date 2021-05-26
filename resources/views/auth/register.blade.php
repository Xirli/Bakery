@extends('welcome')

@section('content')
    <link href="{{ asset ('public/css/register.css') }}" rel="stylesheet"/>
<div class="container">
    <div class="section_title">
        <h1>Реєстрація</h1>
        <div class="title_line"></div>
        <div class="content">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row">
                    <div class="col">
                        <label for="first_name" class="left_text">{{ __('ІМЯ') }}</label>
                    </div>
                    <div class="col">
                        <input id="first_name" class="content_form @error('first_name') is-invalid @enderror"
                               placeholder="" type="text" name="first_name"  value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
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
                               placeholder="" type="text" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
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
                        <input id="father_name" class="content_form @error('father_name') is-invalid @enderror" placeholder="" type="text" name="father_name" value="{{ old('father_name') }}" required autocomplete="father_name" autofocus>
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
                               placeholder=""  name="email" value="{{ old('email') }}" required autocomplete="email">
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
                               placeholder="" type="text" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
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
                               placeholder="" type="text" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <label for="password" class="left_text">{{ __('ПАРОЛЬ') }}</label>
                    </div>
                    <div class="col">
                        <input id="password" type="password" class="content_form @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                    <label for="password-confirm" class="left_text">{{ __('ПІДТВЕРДЖЕННЯ ПАРОЛЮ') }}</label>
                    </div>
                    <div class="col">
                        <input id="password-confirm" type="password" class="content_form" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="title_line"></div>
                <button type="submit" class="my-button">{{ __('ЗАРЕЄСТРУВАТИСЯ') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
