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
                    $servername  = "grayson";
                    $username = "steverq1_grayson";
                    $password = "Csci213+#004";
                    $dbname = "steverq1_grayson";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $sql = "SELECT meals.meal_name, meals.meal_price, meals.meal_description, meals.meal_image, meals.meal_type
                FROM meals
                INNER JOIN meal_times
                ON meals.meal_time_id=meal_times.meal_time_id
                WHERE meal_times.meal_time_name='Breakfast'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table><tr><th>Name</th><th>Price</th><th>Description</th><th>Image</th><th>Type</th></tr>";
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>".$row["meal_name"]."</td><td>".$row["meal_price"]."</td><td>".$row["meal_description"]."</td><td>".$row["meal_image"]."</td><td>".$row["meal_type"]."</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>

</div>
<?php include INC_PATH.'foot.php';?>

</body>
</html>