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
                    $servername  = "localhost";
                    $username = "steverq1_grayson";
                    $password = "Csci213+#004";
                    $dbname = "steverq1_grayson";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    

                    $sql = "SELECT * FROM meals
                    
                    INNER JOIN meals_meal_times ON meals_meal_times.meal_ID = meals.meal_ID
                    INNER JOIN meal_times ON meals_meal_times.meal_time_ID = meal_times.meal_time_ID

                    WHERE meal_times.meal_time_ID=1";

                    $result = $conn->query($sql);


                    if ($result->num_rows > 0) {
                        echo "<table><tr><th>Name</th><th>Price</th><th>Description</th><th>Image</th><th>Type</th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["meal_name"]."</td><td>".$row["meal_price"]."</td><td>".$row["meal_description"]."</td><td><img src='../images/".$row["meal_image"].".jpg'></td><td>".$row["meal_type"]."</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>

        </div>
    </div>
    
<?php include INC_PATH.'foot.php';?>


</html>