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
    <title>Borrower Homepage</title>
</head>

<body>
    <div>
        <form action="#" method="post">
    	<center>
        <h2><b><u>BORROWER</u></b></h2>
    	<br>
    	Username: <input type="text" id="bname" name="bname">
    	<br><br>
    	Password: <input type="password" id="pass" name="pass">
    	<br><br>
        <input type="submit" value="Sign in" name="btnsignin">
        </center>
        </form>
    </div>

    <div>
        <form action="../View/BrrowerSignUp.php" method="post">
            <br>
            <center><input type="submit" value="Sign up" name="btnsignup"></center>
        </form>
    </div>
</body>
</html>
<?php

?>