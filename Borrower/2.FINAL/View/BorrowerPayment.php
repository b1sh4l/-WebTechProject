<?php 
include "../Controller/ViewProfileProcess.php";
include "../Controller/RequestProductCheck.php";
include "../Controller/ProductCheck2.php";
include "../Controller/BorrowerPaymentCheck.php";
?>

<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../View/CSS/bSignIn.css">

<title>Payment</title>
</head>
<body>
<div class="containerrp" id="containerrp">
      <div class="header">
        <h3>Payment</h3>
      </div>
<form action="" method="POST">
 <table>
 <table align="center">
              <tr>
                  <td> <label for="uname">Username:</label></td>
                  <td> <input type="text" value="<?php echo $view_uname ?>" id="uname" name="uname" style="width: 200px" readonly>
              </tr>

              <tr>
                  <td> <label for="pmethod">Payment Method</label></td>
                  <td> <select name="pmethod" id="pmethod" width=300 
            style="width: 200px">
                  <option value="Visa">Visa</option>
                  <option value="MasterCard">MasterCard</option>
                  <option value="Bkash">Bkash</option>
                  <option value="Rocket">Rocket</option>
				  <option value="COD">Cash On Delivery</option>
                  </select>
                </td>
              </tr>

              <tr>
                  <td> <label for="amount">Amount (BDT)</label></td>
                  <td> <input type="number" id="amount" name="amount" value="<?php echo $rent; ?>" style="width: 200px" readonly />
                  </td>
              </tr>

              <tr>
                <td colspan="2" align="center"><input type="submit" value="Pay" name="Pay" class="button"><br>
                <?php
                echo "<span style='color:green;'><small><b>".$paiderr."</b></small></span>";
                echo "<span style='color:red;'><small><b>".$paiderr1."</b></small></span>";
                ?>
                </td>
            </tr>
            
        </table>
    </form>
    <table align="center">
    <tr>
        <td colspan="2" align="center">
            <form action="../Controller/SignOutCheck.php" method="get">
                <center><input type="submit" value="Sign Out" name="btnsignout"></center>
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