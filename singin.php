<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlysDice</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>
        <a href="index.html">Главная</a>
        <!-- <a href="admin.html">Администрирование</a> -->
        <a href="lk.html">Личный кабинет</a>
        <!-- <a href="signin.html"class="active">Войти</a> -->
        <a href="signup.php">Зарегистрироваться</a>
    </nav>
    <div class="singup_form">
        <div>
            <h1>Авторизация</h1>
            <form method="POST">
                <label for="">ввдеите ваше имя пользователя: </label><br>
                <input type="text" name="getname"><br> 


                <label for="">ввдеите пароль: </label><br>
                <input type="password" name="getpass"><br>


                <button type="submit">Войти</button>

            </form> 
        </div>
    </div>
</body>

</html>