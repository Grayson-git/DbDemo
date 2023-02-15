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
    <?php

    echo "<p>Start of php</p>";

    $servername = "localhost";
    $username = "steverq_dev";
    $password = "Csci213+#006";
    $dbname = "steverq1+devdb";

    $db_conn = new mysqli($servername, $username, $password, $dbname);

    if ($db_conn->connect_error){
        echo "Database connection failed: " . $db_conn->connect_error;
    }else{
        echo "Success<br>";
    }

    $result = $db_conn->query("SELECT * FROM  menuItems;");

    if (!$result){
        echo "Error on Query<br>";
    }else{
        echo "Query good<br>";
    }
     
    while ($row = $result->fetch_assoc()){
        print_r($row);
        echo "<br>";
    }

        ?>
        
</body>
</html>
