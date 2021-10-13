<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/registr.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class='col'>

    <?php
    $mysql = new mysqli('localhost','root','root','courses');
    $result_id = $_GET['id']; 
    $result = mysqli_query($mysql,"SELECT * FROM `main` WHERE `id` = '$result_id'");
    $result = mysqli_fetch_assoc($result);
    ?>


    <form method="post" action="php/vendor/update_course.php";>
        <h1> Изменить мероприятие </h1>
        <input type="hidden" name="id" value="<?= $result['id']; ?>">
        Название мероприятия: <input class="form-control" type="text" name="content_name" value="<?= $result['title'] ?>"> <br>
        Описание мероприятия: <input class="form-control" name="content_text" value="<?= $result['text'] ?>"><br>
        Ссылка на платформу: <input class="form-control" type="text" name="content_url" value="<?= $result['url'] ?>"> 
        <br>
        <button class="btn btn-success" type="submit"> Изменить </button>
     </form>
</body>
</html>