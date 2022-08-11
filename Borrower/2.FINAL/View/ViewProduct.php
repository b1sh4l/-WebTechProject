<?php
include "../Controller/ViewProductCheck.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="../View/CSS/bVC.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
</head>

<body>

        <form action="../View/Dashboard.php" method="get">
            <br>
            <center><input type="submit" value="Back" name="btnback"></center>
        </form>
    

        <form action="../Controller/SignOutCheck.php" method="get">
            <br>
            <center><input type="submit" value="Sign Out" name="btnsignout"></center>
        </form>
  
</body>
</html>