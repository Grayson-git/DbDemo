<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $servername = "localhost";
        $username = "steverq1_dev";
        $password = "Csci213+#006";
        $dbname = "steverq1_devdb";
           
        $db_conn = new mysqli($servername, $username, $password, $dbname);
        if ($db_conn->connect_error) {
            die("Database connection failed: " . $db_conn->connect_error);
        }
        else{
            echo "Success<br />";
        }
        $result = $db_conn->query("SELECT * FROM Textbook;");
        $books_array = array();
        while ($row = $result->fetch_assoc()) {
            // var_dump($roSelect * from Textbook;Select * from Textbook;w);
            print_r($row);
        }

        ?>
        
</body>
</html>