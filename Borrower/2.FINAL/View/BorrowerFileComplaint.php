<?php 
include "../Controller/BorrowerFileComplaintCheck.php";
include "../Controller/ViewProfileProcess.php";
?>

<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../View/CSS/bSignIn.css">

<title>File Complaint</title>
</head>
<body>
<div class="containerfc" id="containerfc">
      <div class="header">
        <h3>File Complaint</h3>
      </div>
<form action="" method="POST">
 <table>
 <table align="center">
              <tr>
                  <td> <label for="uname">Username:</label></td>
                  <td> <input type="text" value="<?php echo $view_uname ?>" id="uname" name="uname" readonly>
              </tr>

              <tr>
                  <td> <label for="mobileNo">Mobie No:</label></td>
                  <td> <input type="number" value="<?php echo $view_mobileNo ?>" id="mobileNo" name="mobileNo" readonly>
                </td>
              </tr>

              <tr>
                  <td> <label for="email">E-mail:</label></td>
                  <td> <input type="text" value="<?php echo $view_email ?>" id="email" name="email" readonly>
                  </td>
              </tr>

              <tr>
                  <td> <label for="complaint">Your Complain:</label></td>
                  <td> <input type="text" id="complaint" name="complaint">
                  </td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="Submit" class="btnSubmit"><br>
                <?php
                echo "<span style='color:green;'><small><b>".$senterr."</b></small></span>";
                echo "<span style='color:red;'><small><b>".$senterr1."</b></small></span>";
                ?>
                </td>
            </tr>
            <tr style="height:15px"></tr>
            
        </table>
    </form>
    <table align="center">
    <tr>
        <td align="center">
            <form action="../Controller/SignOutCheck.php" method="get">
                <center><input type="submit" value="Sign Out" name="btnsignout"></center>
            </form>
        </td>
        <td align="center">
            <form action="../View/ViewComplaints.php" method="get">
                <center><input type="submit" value="Past Complaints" name="btnpastcomplaints"></center>
            </form>
        </td>
    </tr>
    <tr><td colspan="2">
    <form action="../View/Dashboard.php" method="get">
            <br>
            <center><input type="submit" value="Back" name="btnback"></center>
        </form></td></tr>
</table>

</div>
</body>
</html>