<?php
    setcookie('user', $user['name'], time() - (3600 * 24 * 30), "/");
    setcookie('id', $user['name'], time() - (3600 * 24 * 30), "/");
    setcookie('role1', $user['name'], time() - (3600 * 24 * 30), "/");
    header('Location: /');
?>