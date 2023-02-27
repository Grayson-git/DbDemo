<!DOCTYPE html>
<html lang="en">

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
</html>