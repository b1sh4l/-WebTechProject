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
        <table align="center">
            <tr><td colspan="3"><h2 align="center"><u>Profile Information</u></h2></td></tr>
            <tr>
                <td>Username: </td>
                <td><?php echo $view_uname ?></td> 
                <td></td> 
            </tr>
            <tr>
                <td>First Name: </td>
                <td><?php echo $view_fname ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Last Name: </td>
                <td><?php echo $view_lname ?></td>
                <td> </td>
            </tr>
            <tr>
                <td>Age: </td>
                <td><?php echo $view_age ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td><?php echo $view_gender ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Mobile No: </td>
                <td><?php echo $view_mobileNo ?></td>
                <td></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><?php echo $view_email ?></td>
                <td></td>
            </tr>
        </table>
    </div>
	<div>

        <form action="../View/BorrowerEditProfile.php" method="get">
            <br>
            <center><input type="submit" value="Edit Profile" name="btneditprofile"></center>
        </form>


        <form action="../View/WelcomeBorrower.php" method="get">
            <br>
            <center><input type="submit" value="Back" name="btnback"></center>
        </form>
    

        <form action="../Controller/SignOutCheck.php" method="get">
            <br>
            <center><input type="submit" value="Sign Out" name="btnsignout"></center>
        </form>
    </div>


  
</body>
</html>