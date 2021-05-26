@extends('welcome')

@section('content')
    <link href="{{ asset ('public/css/login.css') }}" rel="stylesheet"/>
<div class="container">
    <div class="section_title">
        <h1>Вхід</h1>
        <div class="title_line"></div>
        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="email" class="left_text">{{ __('ЕЛ.ПОШТА') }}</label>
                            </div>
                            <div class="col">
                                <input id="email" class="content_form @error('email') is-invalid @enderror"
                                       placeholder="" type="text" name="email"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
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
                                <input id="password" class="content_form @error('password') is-invalid @enderror"
                                       placeholder="" type="password" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                @enderror
                            </div>
                        </div>
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Запам`ятати мене') }}
                                    </label>
                            </div>
            <button type="submit" class="my-button">{{ __('ВВІЙТИ') }}</button>

            <div class="no_account">
                <a href="{{ route('register') }}"><u>Не маєте аккаунту? Зареєструйтесь!</u></a>
            </div>
        </form>
    </div>
</div>
@endsection
