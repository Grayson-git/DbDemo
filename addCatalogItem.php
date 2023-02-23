<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Add Catalog item</title>
</head>

<body>
    <main>
        <!-- <?php
            echo 'Page Load ' .$_SERVER['REQUEST_METHOD'].'br/>';
        ?> -->
        <!-- <a> generates a GET request to this page -->
        <!-- NB: The colon on if-else.MUCH cleaner than managing {}-->
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
            <?php echo "in the GET block<br/>"; ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
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

         <?php
          
            elseif (isset($_POST['catName'], $_POST['descr'], $_POST['price'])) :
                $catName = htmlspecialchars($_POST['catName']);
                $descr = htmlspecialchars($_POST['descr']);
                $price = htmlspecialchars($_POST['price']);


                // show the 
                echo "you submitted<br>";
                echo "$catName<br>";
                echo "$descr<br>";
                echo "$price<br>";

                $catData = array($catName, $descr, $price);

                if(dbInsertCall($catData)){
                    echo "Update success!<br>";
                }
                else{
                    echo "Update fail!";
                }
            else :
                echo 'You need to provide all info.';
            
            endif;
            ?>

        
        

        <?php
            function dbInsertCall($data){
                return true;
            }

        ?>
    </main>
</body>