<?php
//include "../Controller/EditProfileCheck.php";
include "../Controller/ViewProfileProcess.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="../View/CSS/bSignIn.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
          border: none;
        }
        </style>
    <title>Edit Profile</title>
</head>

<body>
  <div class="containerep" id="containerep">
    <div class="header">
				<h3>Edit Profile</h3>
      </div>
        <form action="#" method="post">
        <table align="center">
              <tr>
                  <td> <label for="uname">Username:</label></td>
                  <td> <input type="text" value="<?php echo $view_uname ?>" id="uname" name="uname" readonly>
              </tr>

              <tr>
                  <td> <label for="pass">Password:</label></td>
                  <td> <input type="text" id="pass" name="pass">
                    <?php
                  echo "<span style='color:red;'><small><b>".$passerr."</b></small></span>";
                  ?>
                  </td>
              </tr>

              <tr>
                  <td> <label for="fname">First Name:</label></td>
                  <td> <input type="text" value="<?php echo $view_fname ?>" id="fname" name="fname">
                  <?php
                  echo "<span style='color:red;'><small><b>".$fnameerr."</b></small></span>";
                  ?></td>
                  </td>
              </tr>

              <tr>
                  <td> <label for="lname">Last Name:</label></td>
                  <td> <input type="text" value="<?php echo $view_lname ?>" id="lname" name="lname">
                    <?php
                  echo "<span style='color:red;'><small><b>".$lnameerr."</b></small></span>";
                  ?>
                  </td>
              </tr>

              <tr>
                  <td> <label for="age">Age:</label></td>
                  <td> <input type="number" value="<?php echo $view_age ?>" id="age" name="age" min="1" >
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
                  <td> <input type="number" value="<?php echo $view_mobileNo ?>" id="mobileNo" name="mobileNo" min="0" max="99999999999" >
                    <?php echo "<span style='color:red;'><small><b>".$mobileNoerr."</b></small></span>"; ?>
                  </td>
              </tr>

              <tr>
                  <td> <label for="email">E-mail:</label></td>
                  <td> <input type="text" value="<?php echo $view_email ?>" id="email" name="email">
                    <?php echo "<span style='color:red;'><small><b>".$emailerr."</b></small></span>"; ?>
                  </td>
              </tr>


              <tr><td></td><td></td></tr>
              <tr><td colspan="2"><center><input type="submit" name="Save"  value="Save"></center></td></tr>

            </table>

            
            <center><?php echo "<span style='color:green;'><small><b>".$updateAccInfoerr."</b></small></span>"; ?></center>
            <center><?php echo "<span style='color:red;'><small><b>".$dataerr."</b></small></span>"; ?></center>
            <center><a href="ViewProfile.php">Back</a></center>
            </div>
            

</body>
</html>
