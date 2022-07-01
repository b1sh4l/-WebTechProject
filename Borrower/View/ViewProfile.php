<?php
include "../Controller/ViewProfileProcess.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrower Profile</title>
</head>

<body>
	<div>
        <form action="../View/WelcomeBorrower.php" method="get">
            <br>
            <center><input type="submit" value="Back" name="btnback"></center>
        </form>
    </div>
    
	<div>
        <form action="../Controller/SignOutCheck.php" method="get">
            <br>
            <center><input type="submit" value="Sign Out" name="btnsignout"></center>
        </form>
    </div>


  
</body>
</html>