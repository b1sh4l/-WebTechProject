<?php
include "../Controller/SignInCheck.php";

/*setcookie("user_detected", "visited", time() + 86400*7, '/');

if(isset($_COOKIE["user_detected"])) 
{
  echo  "<b>You have visited before.</b>";
}
else 
{
  echo "<b>Welcome! You are visiting for first time</b>.";
}*/

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
    <title>Borrower Homepage</title>
</head>

<body>
    <div>
        <form action="#" method="post">
    	<center>
        <h2><b><u>BORROWER</u></b></h2>
    	<br>
    	Username: <input type="text" id="uname" name="uname">
        <?php echo "<span style='color:red;'><small><b>".$unameerr."</b></small></span>"; ?>
    	<br><br>
    	Password: <input type="password" id="pass" name="pass">
        <?php echo "<span style='color:red;'><small><b>".$passerr."</b></small></span>"; ?>
    	<br><br>
        <input type="submit" value="Signin" name="btnsignin">
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
