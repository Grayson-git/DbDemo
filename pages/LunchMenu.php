<!DOCTYPE html>
<html lang="en">

<head>
    <link >
    <?php
        define("INC_PATH", "../includes/"); 
        include INC_PATH.'head.php'; 
        include INC_PATH.'menuArray.php';   
?> 
</head>
    <div id="banner">
            <!-- Sidebar Content Here///Specials -->
    <?php  
    include INC_PATH.'banner.php';
        ?>
    </div>

    <div id="main-content">
                <!-- Main Content Here -->
        <input type="button" value="Home" onclick="window.location.href='../index.php'" />
            <div id="menu">
                <?php

            echo '<div id=sidebar>';
            include INC_PATH.'specials.php';
            echo '</div>';

            echo '<h3>Lunch</h3><br>';
            foreach ($LunchArray as $item => $values) {
                echo '<ul><li>'.$item . " - $" . $values['price'] . 
                "<img src='../images/".$values['image'].".jpg'>
                </li> <li>" . $values['description'] . "</li></ul><br>";
            };
            ?>
    </div>

</div>
<?php include INC_PATH.'foot.php';?>

</body>
</html>