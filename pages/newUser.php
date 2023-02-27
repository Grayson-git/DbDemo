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

		<h1>Create User Account</h1>


		<form action="createUser.php" method="POST">
			<label for="firstName">First Name: </label>
			<input type="text" name="firstName" id="firstName" required>
			<br>
			<label for="lastName">Last Name: </label>
			<input type="text" name="lastName" id="lastName" required>
			<br>
			<label for="email">Email Address: </label>
			<input type="email" name="email" id="email" required>
			<br>
			<label for="pass1">Password: </label>
			<input type="password" name="pass1" id="pass1" required onkeyup="validatePassword()">

			<div id="confirmMessage" class="confirmMessage"></div>

			<div class="validatePassword">
                <span id="letter" class="invalid">A <b>lowercase</b> letter</span>
                <span id="capital" class="invalid">A <b>capital (uppercase)</b> letter</span>
                <span id="number" class="invalid">A <b>number</b></span>
                <span id="length" class="invalid">Minimum <b>8 characters</b></span>
                <span id="special" class="invalid">A <b>special character</b> from: + - # $</span>
            </div>

			<br>
			<label for="pass2">Confirm Password: </label>
			<input type="password" name="pass2" id="pass2" required onkeyup="checkPass()">
			<br>
			<input type="submit" value="Create Account">

		</form>
        </div>
	</body>
</html>