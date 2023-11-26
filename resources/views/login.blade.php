<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Войти</title>
</head>
<body>

    <form action="">    
        <a href="/"><img src="{{asset('img/biglogo.png')}}"></a>
        <p>Логин</p>
        <input type="text" id="login">
        <br>
        <p>Пароль</p>
        <input type="text">
        <br>
        <button>Войти</button>
        <p>Ещё не зарегистрированы? <a href="/register">Зарегистрироваться</a></p>
    </form>
</body>
</html>