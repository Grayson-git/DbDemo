<!DOCTYPE html>

<?php
  session_start();
?>
<html lang="en">

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

</html>