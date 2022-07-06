<?php
include "SignInCheck.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
          border: 1px solid black;
        }
        </style>
    <title>Welcome</title>
</head>

<body>
    <div>
        <form action="#" method="post">
    	<center>
        <h2><b><u>WELCOME</u></b></h2>
    	<br>
        <a href="ViewProfile.php">View My Profile</a></br>    
        </center>
        </form>
    </div>

    <div>
        <form action="SignOutCheck.php" method="get">
            <br>
            <center><input type="submit" value="Sign Out" name="btnsignout"></center>
        </form>
    </div>

</body>
</html>
<?php
?>