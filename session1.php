<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 1</title>
</head>

<body>

    <h3>Session page 1</h3>
    <a href="session2.php">Session 2 page</a><br>
    <a href="index.php">Home</a><br>
    <?php

    echo "Welcome " . $_SESSION['username'];
    ?>

</body>

</html>