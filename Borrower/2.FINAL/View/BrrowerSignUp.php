<?php
include "../Controller/SignUpCheck.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../View/CSS/bSignUp.css">
    <style>
        table, th, td {
          border: none;
        }
        </style>
    <title>SignUp</title>
</head>

<body>
  <div class="container">
      <div class="header">
        <h3>SignUp</h3>
      </div>
    <div>
        <form action="#" method="post">
    	<br>
        <table align="center">
              <tr>
                  <td> <label for="fname">First Name:</label></td>
                  <td> <input type="text" id="fname" name="fname" placeholder="Enter your first name" >
                  <?php
                  echo "<span style='color:red;'><small><b>".$fnameerr."</b></small></span>";
                  ?></td>
                  </td>
              </tr>

              <tr>
                  <td> <label for="lname">Last Name:</label></td>
                  <td> <input type="text" id="lname" name="lname" placeholder="Enter your last name" >
                    <?php
                  echo "<span style='color:red;'><small><b>".$lnameerr."</b></small></span>";
                  ?>
                  </td>
              </tr>

              <tr>
                  <td> <label for="uname">Username:</label></td>
                  <td> <input type="text" id="uname" name="uname" placeholder="Choose unique username" >
                    <?php
                  echo "<span style='color:red;'><small><b>".$unameerr."</b></small></span>";
                  ?>
                  </td>
              </tr>

              <tr>
                  <td> <label for="pass">Password:</label></td>
                  <td> <input type="Password" id="pass" name="pass" placeholder="Enter password" >

                  </td>
              </tr>

              <tr>
                  <td> <label for="cpass">Confirm Password:</label></td>
                  <td> <input type="Password" id="cpass" name="cpass" placeholder="Enter password again" >
                  </td>
              </tr>

              <tr>
                  <td> <label for="age">Age:</label></td>
                  <td> <input type="number" id="age" name="age" min="1" placeholder="Enter your age" >
                    <?php echo "<span style='color:red;'><small><b>".$ageerr."</b></small></span>"; ?>
                  </td>
              </tr>

              <tr>
                  <td> <label for="gender">Gender:</label></td>
                  <td> <input type="radio" id="male" name="gender" value="Male">Male
                       <input type="radio" id="female" name="gender" value="Female">Female
                       <input type="radio" id="others" name="gender" value="Others">Others
                       <?php echo "<span style='color:red;'><small><b>".$gendererr."</b></small></span>"; ?>
                  </td>
              </tr>

              <tr>
                  <td> <label for="mobileNo">Mobie No:</label></td>
                  <td> <input type="number" id="mobileNo" name="mobileNo" min="0" max="99999999999" placeholder="Enter your mobile no" >
                    <?php echo "<span style='color:red;'><small><b>".$mobileNoerr."</b></small></span>"; ?>
                  </td>
              </tr>

              <tr>
                  <td> <label for="email">E-mail:</label></td>
                  <td> <input type="text" id="email" name="email" placeholder="Enter your e-mail" >
                    <?php echo "<span style='color:red;'><small><b>".$emailerr."</b></small></span>"; ?>
                  </td>
              </tr>


              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>

              <tr>
                <td></td>
                <td >
                    <input type="submit" name="SignUp"  value="Signup">
                    <input type="reset" name="Reset">
                </td>
              </tr>
              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>

              <tr><td colspan="2" align="center"> <?php echo "<span style='color:red;'><small><b>".$dataerr."</b></small></span>"; ?> </td></tr>


              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>

              <tr>
                <td colspan="2" align="center">
                <a href="BorrowerHP.php">Back</a>
                </td>
              </tr>

            </table>
          </form>
        </div>


    	
    </div>
</body>
</html>
