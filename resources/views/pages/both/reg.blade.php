@extends('pages_layouts.user_layout')


@push("head")
    <title>Регистрация</title>
@endpush



@section("main")
    @foreach($errors->messages() as $name => $errs)
        {{ $errs[0] }}
    @endforeach
    <form class="register" method="post" action="{{ route('reg') }}">
        <div class="container_reg">
            <h1 class="container__header">Регистрация</h1>
            <div class="reg_panel">
                <div class="panel">
                    <span class="name_panel">имя
                        <input name="name" class="reg_item" type="text" >
                    </span>
                    <span class="name_panel">почта
                        <input name="email" class="reg_item" type="email">
                    </span>
                    <span class="name_panel">пароль
                        <input name="password" class="reg_item" type="password">
                    </span>
{{--                    <span class="name_panel">повторите пароль--}}
{{--                        <input class="reg_item" type="password">--}}
{{--                    </span>--}}
{{--                    <span class="checkbox">--}}
{{--                        <input type="checkbox"> я далбаеб--}}
{{--                    </span>--}}
                    <div class="btn">
                        <button type="submit" class="btn_btn" href="">зарегистрироваться</button>
                    </div>
                </div>
            </div>
        </div>
        {{csrf_field()}}
    </form>
@endsection

