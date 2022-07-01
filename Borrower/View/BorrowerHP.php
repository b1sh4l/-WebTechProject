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
          border: none;
        }
        </style>
    <title>Borrower Homepage</title>
</head>

<body>
    <div>
        <form action="#" method="post">
        <h2><center><b><u>BORROWER</u></b></center></h2>
    	<table align="center">
            <tr>
                  <td> <label for="uname">Username:</label></td>
                  <td> <input type="text" id="uname" name="uname" value="<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>" placeholder="Enter username" ></td>
                  <td><?php
                  echo "<span style='color:red;'><small><b>".$unameerr."</b></small></span>";
                  ?></td>
                  </td>
            </tr>
            <tr>
                  <td> <label for="pass">Password:</label></td>
                  <td> <input type="password" id="pass" name="pass" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>" placeholder="Enter password" ></td>
                  <td> <?php
                  echo "<span style='color:red;'><small><b>".$passerr."</b></small></span>";
                  ?></td>
              </tr>


              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>

              <tr>
                <td></td>
                <td >
                    <input type="checkbox" name="remember_me" value="remember_me">Remember me
                </td>
              </tr>

              <tr>
                <td></td>
                <td >
                    <input type="submit" value="Signin" name="btnsignin">
                    <input type="reset" name="Reset">
                </td>
              </tr>

            <tr><td></td><td></td></tr>
            <tr><td></td><td></td></tr>

            <tr>
                <td colspan="2">
                    <?php echo "<span style='color:red;'><small><b>".$signinerr."</b></small></span>"; ?>
                </td>
            </tr>

        </table>
        </form>
    </div>

    <div>
        <form action="../View/BrrowerSignUp.php" method="post">
            <table align="center">
                <tr>
                <td></td>
                <td colspan="3">
                    <input type="submit" value="Sign up" name="btnsignup">
                </td>
              </tr>
            </table>
        </form>
    </div>
</body>
</html>
