@extends('welcome')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link href="{{ asset ('public/css/shopping_cart.css') }}" rel="stylesheet"/>
    <div class="container">
        <div class="title">
            <img id="basket" src="public/images/shopping_cart.svg" alt="img">
            <h1>Кошик</h1>
        </div>
        <div class="title_line"></div>
        <div class="content">

            <div class="row">
                <div class="col names">
                    <div class="column_title">Позиція</div>
                </div>
                <div class="col names">
                    <div class="column_title">Ціна</div>
                </div>
                <div class="col quantity">
                    <div class="column_title">Кількість</div>
                </div>
            </div>
            <input type="hidden" value="{{$sum = 0}}">
            @foreach (Cart::content() as $item)
            <div class="row">
                <div class="col names">
                    <a href="/Bakery/products/{{$item->id}}/product">
                        <div class="column_text">{{ $item->name }}</div>
                    </a>
                </div>
                <div class="col names">
                    <div class="column_text">{{ $item->price * $item->qty}} ₴</div>
                    <input type="hidden" value="{{$sum += $item->price * $item->qty}}">
                </div>
                <div class="col it">
                    <div class="row add_count_wrap">
                        <form action="{{ route('cart.update', $item->rowId)}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="add_count">
                                <button type="button" class="plus">+</button>
                                <input name="count" id="count" class="prod_text" type="text" value="{{ $item->qty}}" ><span class="prod_text">шт.</span>
                                <button type="button" class="minus">-</button>
                                <button class="refr" type="submit" style="background: url({{asset('public/images/reload.svg')}}) no-repeat center center; border: none; height: 25px;width: 25px;"></button>
                            </div>
                        </form>
                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="cross" style="background: url('public/images/cross.svg') center center no-repeat"></button>
                        </form>
                    </div></div>
            </div>
            @endforeach
            <div class="title_line"></div>

            <div class="row">
                <div class="col names">
                    <div class="column_text">СУМА</div>
                </div>
                <div class="col names">
                    <div class="column_text">{{Cart::subtotal()}} ₴</div>
                </div>
                <div class="col not_n">
                </div>
            </div>
            <div class="row">
            <a href="{{route('order')}}" style="margin: auto">
                <button class="checkout-button">ОФОРМИТИ ЗАМОВЛЕННЯ</button>
            </a>
            </div>

        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.minus').click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });

        });
    </script>
@endsection
