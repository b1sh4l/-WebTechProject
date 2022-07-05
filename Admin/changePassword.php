<?php
       include "header.php";
    ?>
<?php
    session_start();
    if (count($_SESSION)===0)
    {
      header("location:Logout.php");
    }
?>
<!DOCTYPE html>
<html>
<head>

    
    <title> Change Password </title>

</head>
<body>
<h2> Reset Password Page </h2>

	<center><a href="home.php"> Home </a> &nbsp &nbsp <a href="changePassword.php"> Change Password </a> &nbsp &nbsp<a href="Logout.php">Logout</a></center>
    <br>


  <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
  	<fieldset>
  		<legend><h2>Change Password</h2></legend>
  <center>Previous Password:<input type="text" name="previousPassword" Placeholder="Previous Password">
  <br><br>
  New Password:<input type="text" name="newPassword" Placeholder="New Password"><br>
  <br>
  <input type="submit"value="Click"></center>
</fieldset>
  </form>

  <?php
  include "../Admin/changePasswordAction.php";
  ?>
   
    
<br><br>
	
<?php
       include "footer.php";
    ?>

</body>
</html>