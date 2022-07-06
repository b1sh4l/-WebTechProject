<?php 
	session_start();

	if (isset($_SESSION['username'])) {
		header("Location: home.php");
	}
?>
<?php
       include "header.php";
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>

	<fieldset>
		<legend><h2>Login</h2></legend>
	<?php

		$handle = fopen("../Admin/Data/data.json", "r");
		$data = fread($handle, filesize("../Admin/Data/data.json"));
	?>


	<?php
        
		$explode = explode("\n", $data);


	
	?>

	<?php

		$arr= array();
		for ($i = 0; $i < count($explode)-1; $i++)
		{
			$json=json_decode(($explode[$i]));
			array_push($arr, $json);
		}
	?>

	<form action="LoginAction.php" method="post">

		<center><label id="username">Username:</label>
		<input type="text" name="username" id="username"></center>
		<br><br>

		<center><label id="password">Password:</label>
		<input type="password" name="password" id="password"></center>
		<br><br>

		<center><input type="submit" name="submit" value="Login"></center>
		
		
	</form>
    </fieldset>

        <h3>Don't remember your password? <a href="forgotPassword.php"> Click here </a> to create new password</h3>

	<?php
	include "../Admin/LoginAction.php";
	?>

	<?php 

		if (isset($_SESSION['error_msg'])) {
			echo "<p>" . $_SESSION['error_msg'] . "</p>";
		}

	?>

	<center><button onclick="history.back()" >Homepage</button></center>

	<?php
       include "footer.php";
    ?>

</body>
</html>