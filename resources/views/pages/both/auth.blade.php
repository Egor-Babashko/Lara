<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/337ebf80dd.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/337ebf80dd.js" crossorigin="anonymous"></script>
</head>

<form class="login" method="post" action="{{ route('login') }}">
    <div class="container_reg">
        <h1 class="container__header">Авторизация</h1>
        <div class="reg_panel">
            <div class="panel">
                <span class="name_panel">
                    почта
                    <input name="email" class="reg_item" type="email" required>
                </span>
                <span class="name_panel">
                    пароль
                    <input name="password" class="reg_item" type="password" required>
                </span>
                <div class="btn2">
                    <button type="submit" class="btn_btn2" href="">войти</button>
                </div>
                <div class="btn2"><a class="btn_btn2" href="{{ route('reg') }}">Register</a></div>
            </div>
        </div>
    </div>
    {{csrf_field()}}
</form>

