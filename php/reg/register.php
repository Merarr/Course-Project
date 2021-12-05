<?php
      $c_login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
      $c_pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
      $c_name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
      $c_surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
      $c_email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
      $c_phone = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);

      $s_pass = md5($c_pass."somethingsalt");
        
      require '../vendor/mysql.php';
      
        $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`, `surname`, `email`, `phone`) 
          VALUES ('$c_login', '$s_pass', '$c_name', '$c_surname', '$c_email', '$c_phone')");
        $mysql->close();

        header('Location: /');
        

?>