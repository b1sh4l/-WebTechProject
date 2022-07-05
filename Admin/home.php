<?php
       include "header.php";
    ?>
<?php
  session_start();
   if (count($_SESSION)===0)
   {
     header("Location:Logout.php");
   }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
</head>
<body>
	<h1>Home Page</h1>
 <center><a href="home.php">Home</a> &nbsp &nbsp <a href="changePassword.php">Change Password</a>&nbsp &nbsp</a>&nbsp &nbsp<a href="Logout.php">Logout</a></center>
    <br>
    <center><h2>Welcome</h2></center>
    <?php
    echo "<center>";
    echo "<p>";
    echo "<h3>";
    echo $_SESSION['username'] ;
    echo "</h3>";
    echo"</p>";
    echo "</center>";
   ?>

<?php
       include "footer.php";
    ?>
</body>
</html>