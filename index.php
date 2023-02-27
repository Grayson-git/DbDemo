<!DOCTYPE html>

<?php
  session_start();
?>
<html lang="en">

<<<<<<< HEAD
<div id="banner">
    <!-- Sidebar Content Here///Specials -->
    <?php  
    define("INC_PATH", "includes/"); 
    include INC_PATH.'head.php';
    include INC_PATH.'banner.php';
    ?>
</div>



<body>

    <br>
    <input type="button" value="New User" onclick="window.location.href='pages/newUser.php'" />
    <a href = "addCatalogItem-lab.php">Add a catalog item</a>
    <div id="bodyplaceholder">    
        

        <p>Welcome to Carl's Doomsday Cafe! We are your one-stop shop for all the flavorful, hearty meals you need to survive the impending apocalypse. 
        Our philosophy is simple: good food equals good times. 
        From comfort food classics to out-of-this-world experiments, we offer something for everyone. 
        So come on in and dig in at Carl's Doomsday Cafe!</p>
    <div id="bodyplaceholder_right"> 

            <div id="menuheader">Menu's</div>

            <div id="topmenu">
                <ul>
                    <li><input type="button" value="Breakfast" onclick="window.location.href='pages/BreakfastMenu.php'" /></li>
                    <li><input type="button" value="Lunch" onclick="window.location.href='pages/LunchMenu.php'" /></li>
                    <li><input type="button" value="Dinner" onclick="window.location.href='pages/DinnerMenu.php'" /></li>
                </ul>
                
                <!-- Specials -->

                <div id="menuheader">Specials</div>
                <?php 
                    include INC_PATH.'specials.php';
                ?>

            </div> 

        </div>
    </div>

</body>
<?php include INC_PATH.'foot.php';?>
=======
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
      
        $_SESSION['username'] = 'Steve';
    ?>

    <h2>Self Processing Lab</h2>

    <a href="addCatalogItem-lab.php">Add a catalog item</a> <br/>
    <a href="session1.php">Session 1 page</a><br>
    <a href="session2.php">Session 2 page</a><br>

</body>

>>>>>>> 14225ea7ae4cb2a308945c81bd413423f07dc085
</html>