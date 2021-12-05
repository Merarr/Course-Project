<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.1.1.min.js"> </script>
    <title>FitCourse</title>
</head>
<body>
    <div class="wrapper">
        <div class="wrapper__content">
            <header>
                <div class="logo"> <img src="library/logo.png" width="300px" height="100px"> </div>
                <div class="account">
                    <?php
                        if ($_COOKIE['user'] == '') 
                        {
                        printf("<div class='header__text'> Вы не авторизованы<br><a href='reg_html/auth.html'>Войти </a> <br> <a href='reg_html/registration.html'>Зарегистрироваться</a> </div>");
                        $_SESSION['auth'] = false;
                        } else 
                        {
                        printf('<div class="header__text"> <a href="#"> Личный кабинет </a>  </div>');
                        printf('<div class="courses"> <a href="new_course.html"> Добавить курс </a> </div>');
                        printf("<div class='header__text'> <a href='php/reg/exit.php'>Выйти</a> </div>");
                        $_SESSION['auth'] = true;
                        }
                    ?>
                </div>
            </header>
            <div class="main-page">
                <div class="section__top">
                    
                    <?php 
                            $_SESSION['role1'] = $_COOKIE['role1'];
                            $_SESSION['id'] = $_COOKIE['id'];  
                        if ( $_SESSION['auth'] == true and $_SESSION['role1'] == 1) {
                            echo '<div class="admin"> Администратор </div>';
                            echo '<div class="old_courses"> <a href="old_courses.php"> Завершенные курсы </a> </div>';
                        }
                    ?>
                </div>
                <div class="section__middle">
                    <?php
                        $mysql = new mysqli('localhost','root','root','courses'); 
                        $result = mysqli_query($mysql,"SELECT * FROM `main`");

                        while ($course = mysqli_fetch_assoc($result))
                        {   
                            ?>
                            <div class="gen_class">
                                <ul>
                                <li class="title"><?php echo $course['id']; echo ". "; echo $course['title']; ?> </li>
                                <li><?php echo $course['text']; ?> </li>
                                <li class="li_margin"> <a class="urls" href="<?php echo $course['url'];?>"> Ссылка на платформу (click) </a> </li>

                                <li class="li_margin"> <a class="urls" href="authors.php?authors_id=<?= $course['id_author'] ?>"> Автор </a> </li>

                                <br> <br>
                                <li> 
                                    <a href="php/vendor/finish.php?id=<?= $course['id'] ?>"> 
                                    <img width="32px" height="32px" src="library/actions/finish.png" alt="Завершить мероприятие"> </a> 
                                    <a href="update.php?id=<?= $course['id'] ?>">
                                    <img width="32px" height="32px" src="library/actions/update.png" alt="Изменить мероприятие"></a>
                                    <a href="php/vendor/delete_course.php?id=<?= $course['id'] ?>">
                                    <img width="32px" height="32px" src="library/actions/delete.png" alt="Удалить мероприятие"> </a>
                            
                                </li>
                            </ul>
                        </div>
                            <?php
                        }
                        ?>
                </div>
        </div>
    </div>
</body>
</html>