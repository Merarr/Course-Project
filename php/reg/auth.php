<?php
    //Проверка и хеширование пароля
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    $pass = md5($pass."somethingsalt");
        
    require '../vendor/mysql.php';

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();
    if (count($user) != 0) {
        setcookie('user', $user['name'], time() + 3600 * 24 * 30, "/");
        setcookie('id', $user['id'], time() + 3600 * 24 * 30, "/");
        setcookie('role1', $user['role'], time() + 3600 * 24 * 30, "/");
        $mysql->close();
        header('Location: http://localhost/index.php'); exit;
        echo '<script>location.replace("http://localhost/index.php");</script>'; exit;

    }
    else {
        echo "<script> alert('Пользователь не найден')</script>";
        echo '<script>location.replace("http://localhost/index.php");</script>'; exit;
    }
?>
