<?php

if ($_COOKIE['user'] == '') 
        {
            $_SESSION['auth'] = false;
        } else {
            $_SESSION['auth'] = true;
        }
    
    $_SESSION['role1'] = $_COOKIE['role1'];  
    if ( $_SESSION['auth'] == true and $_SESSION['role1'] == 1) {

        require 'mysql.php';
        $result_id = $_GET['id']; 
        $mysql->query("INSERT INTO `old_main` (`old_id`,`old_title`, `old_text`, `old_url`) SELECT * FROM `main` WHERE `id` = '$result_id'");
        $mysql->query("DELETE FROM `main` WHERE `id` = '$result_id'");
        header('Location: http://localhost/index.php'); exit;
    } else {
        $message = "Недостаточно прав!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo '<script>location.replace("http://localhost/index.php");</script>'; exit;
    }
?>