
<html>
	<head>
        <div id="banner">
            <!-- Sidebar Content Here///Specials -->
            <?php  
            define("INC_PATH", "../includes/"); 
            include INC_PATH.'head.php';
            include INC_PATH.'banner.php';
            ?>
        </div>
		<title>Create User Account</title>
		
	</head>
	<body>

        <div id="bodyplaceholder">
            
            <?php

            define("DATA_PATH", "../data/"); 

                
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $pass1 = $_POST['pass1'];
            $pass2 = $_POST['pass2'];

            //check if passwords match
            if ($pass1 == $pass2) {

                //check if email is already in use
                $usersFile = fopen(DATA_PATH.'users.txt', 'r');
                
                while ($line = fgetcsv($usersFile)) {
                    if ($line[2] == $email) {
                        echo '<p class="error">Email already in use. Please choose another.</p>';
                        exit;
                    }
                }

                //add new user
                $usersFile = fopen(DATA_PATH.'users.txt', 'a');

                $hashedPass = password_hash($pass1, PASSWORD_DEFAULT);

                $userData = array($firstName, $lastName, $email, $hashedPass);

                fputcsv($usersFile, $userData);

                fclose($usersFile);

                echo '<h1>New user account created.</h1>';
                echo '<a href="../index.php">Return to Home Page</a>';
            } else {
                echo '<p>Passwords do not match. Please try again.</p>';
                echo '<a href="../index.php">Return to Home Page</a>';
            }


            ?>
            
            <input type="button" value="New User" onclick="window.location.href='pages/newUser.php'" />
        </div>
	</body>
</html>