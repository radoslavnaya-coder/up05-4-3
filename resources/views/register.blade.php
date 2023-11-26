<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reg.css') }}">
    <title>Войти</title>
</head>
<body>

    <form action="">    
        <a href="/"><img src="{{asset('img/biglogo.png')}}"></a>
        <p>Фамилия</p>
        <input type="text">
        <br>
        <p>Имя</p>
        <input type="text">
        <br>
        <p>Отчество</p>
        <input type="text">
        <br>
        <p>Логин</p>
        <input type="text">
        <br>
        <p>E-mail</p>
        <input type="text">
        <br>
        <p>Пароль</p>
        <input type="text">
        <br>
        <p>Повторение пароля</p>
        <input type="text">
        <br>
        <input type="checkbox" id="accept"><label for="accept" require>Даю <a href="">согласие</a> на обработку персональных данных</label>
        <br>
        <button>Зарегистрироваться</button>
        <p>Уже зарегистрированы? <a href="/login">Войти</a></p>
    </form>
</body>
</html>