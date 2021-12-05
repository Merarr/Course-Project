<?php
      $cname = $_POST['content_name'];
      $ctext = $_POST['content_text'];
      $curl = $_POST['content_url'];
        require 'mysql.php';
        $mysql->query("INSERT INTO `main` (`title`, `text`, `url`) VALUES ('$cname','$ctext','$curl')");
        $mysql->close();
        header('Location: /');
?>