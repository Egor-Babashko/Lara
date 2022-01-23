@extends('pages_layouts.user_layout')

@section("head")
    <title>Регистрация</title>
    <link rel="stylesheet" href="../user/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/337ebf80dd.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/337ebf80dd.js" crossorigin="anonymous"></script>
@endsection

@section("main")
    <form class="register" method="post" action="{{ route('reg') }}">
        <div class="container_reg">
            <h1 class="container__header">Регистрация</h1>
            <div class="reg_panel">
                <div class="panel">
                    <span class="name_panel">имя
                        <input class="reg_item" type="text" required>
                    </span>
                    <span class="name_panel">почта
                        <input class="reg_item" type="email" required>
                    </span>
                    <span class="name_panel">пароль
                        <input class="reg_item" type="password" required>
                    </span>
                    <span class="name_panel">повторите пароль
                        <input class="reg_item" type="password" required>
                    </span>
                    <span class="checkbox">
                        <input type="checkbox" required> я далбаеб
                    </span>
                    <div class="btn">
                        <button type="submit" class="btn_btn" href="">зарегистрироваться</button>
                    </div>
                </div>
            </div>
        </div>
        {{csrf_field()}}
    </form>
@endsection

