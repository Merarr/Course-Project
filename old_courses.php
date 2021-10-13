<?php
    $mysql = new mysqli('localhost','root','root','courses'); 
    $result = mysqli_query($mysql,"SELECT * FROM `old_main`");

    while ($course = mysqli_fetch_assoc($result))
        {   
        ?>
        <div class="gen_class">
            <ul>
            <li class="title"><?php echo $course['old_id']; echo ". "; echo $course['old_title']; ?> </li>
            <li><?php echo $course['old_text']; ?> </li>
            <li> <a class="urls" href="<?php echo $course['old_url'];?>"> Ссылка на платформу (click) </a></li>
            </ul>
        </div>
        <?php
        }
?>