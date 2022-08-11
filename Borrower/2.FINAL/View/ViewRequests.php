<?php
include "../Controller/ViewRequestsCheck.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrower Profile</title>
</head>

<body>

<div class="button">
        <form action="../View/RequestProduct.php" method="get">
            <br>
            <center><input type="submit" value="Back" name="btnback" id="backbtn"></center>
        </form>
</div>
    
<div class="button" id=signoutbtn>
        <form action="../Controller/SignOutCheck.php" method="get">
            <br>
            <center><input type="submit" value="Sign Out" name="btnsignout"></center>
        </form>
    </div>

</body>
</html>