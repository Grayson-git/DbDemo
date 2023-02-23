<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 2</title>
</head>

<body>

    <h3>Session page 2</h3>

    <?php
    print_r($_SESSION);
    echo "Welcome " . $_SESSION['username'].'<br/>';
    ?>
    <a href="index.php">Home</a><br>


</body>

</html>