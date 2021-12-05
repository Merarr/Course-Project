<?php
    $mysql = new mysqli('localhost','root','root','courses');
    $auth_id = $_GET['authors_id']; 
    $authors_connect = mysqli_query($mysql,"SELECT * FROM `authors` WHERE `authors_id` = '$auth_id'");
    $authors_connect = mysqli_fetch_assoc($authors_connect);

    $lit_connect = mysqli_query($mysql,"SELECT lit_name FROM `literature` WHERE `lit_authors_id` = '$auth_id'");

?>
<table border="1">
    <tr>
        <td> Имя автора </td>
        <td> <?php echo $authors_connect['authors_name']; echo " "; echo $authors_connect['authors_surname']; ?> </td>
    </tr>
        <?php
        while ($end = mysqli_fetch_assoc($lit_connect))
        {   
        ?>
        <tr>
            <td> Литература </td>
            <td> <?php echo $end['lit_name']; ?> </td>
        </tr> 
        <?php 
    } 
    ?>
</table>