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
        <a href="lk.html">Личный кабинет</a>
        <a href="signup.php">Зарегистрироваться</a>
    </nav>
    <div class="singup_form">
        <div>
            <h1>Регистрация</h1>
            <form method="POST">
                <label for="">ввдеите ваше имя: </label><br>
                <input type="text" name="getname"><br>

                <label for="">ввдеите ваше имя пользователя: </label><br>
                <input type="text" name="getusername"><br>

                <label for="">ввдеите пароль: </label><br>
                <input type="password" name="getpass"><br>

                <label for="">повторите: </label><br>
                <input type="password" name="conpass"><br>

                <button type="submit" name="submit">Зарегистрироваться</button>

            </form>

            <?php
            if (isset($_POST['submit'])) {
                require 'partials/_dbcon.php';
                $getname = $_POST['getname'];
                $getusername = $_POST['getusername'];
                $getpass = $_POST['getpass'];
                $conpass = $_POST['conpass'];

                $sql = "select user_name from user_details where user_name = '$getusername'";
                $sqlres = mysqli_query($connection, $sql);
                $rowcount = mysqli_num_rows($sqlres);

                if ($rowcount != 0) {
                    echo "Данное имя уже используется, попробуйте другое";
                }
                if ($getpass != $conpass) {
                    echo "Введите правильный пароль";
                }
                if (($rowcount == 0) && ($getpass == $conpass)) {
                    echo "Вы вошли.";
                    $gotosignin = "<a href='signin.php'>Войти</a>";
                    echo $gotologin;

                    $sql = "insert into user_details (full_name, usern_name, password) values ('$getname','$getusername','$getpass')";
                    $sqlres = mysqli_query($connect, $sql);
                }
            }
            ?>
        </div>
    </div>
</body>

</html>