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
    <main>
        <?php
        echo "Page load:";
        print_r($_SERVER['REQUEST_METHOD']);
        ?>
        <?php if ($_SERVER['REQUEST_METHOD'] ==='GET'):?>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <div>
                    <label for="catName">Item Name:</label>
                    <input type="text" name="catName" />
                </div>
                <div>
                    <label for="descr">Description:</label>
                    <input type="text" name="descr" />
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="text" name="price" />
                </div>
                <button type="submit">Add Item</button>
            </form>
            <?php else:?>
                <?php 
                    if (isset($_POST['catName'], $_POST['descr'], $_POST['price'])) { 
                        $catName = htmlspecialchars($_POST['catName']); 
                        $descr = htmlspecialchars($_POST['descr']); 
                        $price = htmlspecialchars($_POST['price']); 

                        echo "$catName $descr $price <br>";
                    }
                    else{
                        echo"Form was not completed<br>";
                    }
                ?>
            <?php endif ?>
    </main>
</body>