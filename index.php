<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>DB Connections</h2>

<a href="uAccount.php">JM - user form</a>
    <?php

    echo "<p>Start of php</p>";

    $servername = "localhost";
    $username = "steverq1_dev";
    $password = "Csci213+#006";
    $dbname = "steverq1_devdb";
    
    $db_conn = new mysqli($servername, $username, $password, $dbname);

    if ($db_conn->connect_error) {
        echo "Database connection failed: " . $db_conn->connect_error;
    } else {
        echo "Success<br />";
    }

    $result = $db_conn->query("SELECT * FROM cmer;");

    if (!$result) {
        echo "error on query<br/>";
    }
    else{
        echo "Query good!<br/>";
    }

    while ($row = $result->fetch_assoc()) {
        print_r($row);
        echo "<br/>";
    }
    
    $db_conn->close();

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM customers";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Phone</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["cust_fname"]."</td><td>".$row["cust_lname"]."</td><td>".$row["cust_email"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();



        ?>
        
        
</body>
</html>
