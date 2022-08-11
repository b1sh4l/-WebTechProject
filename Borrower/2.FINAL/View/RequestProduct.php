<?php 
include "../Controller/RequestProductCheck.php";
include "../Controller/ViewProfileProcess.php";
?>

<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../View/CSS/bSignIn.css">

</head>
<body>
<div class="containerrp" id="containerrp">
      <div class="header">
        <h3>Request Product</h3>
      </div>
<form action="" method="POST">
 <table>
 <table align="center">
              <tr>
                  <td> <label for="uname">Username:</label></td>
                  <td> <input type="text" value="<?php echo $view_uname ?>" id="uname" name="uname" width=300 style="width: 250px" readonly>
              </tr>

              <tr>
                  <td> <label for="pname">Product Name:</label></td>
                  <td> <input type="text" id="pname" name="pname" placeholder="Enter Product Name" width=300 style="width: 250px">
                </td>
                <td><span style='color:red;'><small><b><?php echo $pnameerr; ?></b></small></span></td>
              </tr>
			  

              <tr>
                  <td> <label for="category">Category:</label></td>
                  <td> <select name="category" id="category" width=300 style="width: 250px">
                  <option value="none">None</option>
                  <option value="Mobiles">Mobiles</option>
                  <option value="Computers">Computers</option>
                  <option value="Camera">Camera</option>
                  <option value="Books">Books</option>
                  <option value="Cloth">Cloth</option>
                  <option value="Furniture">Furniture</option>
                  <option value="Sports & Games">Sports & Games</option>
                  <option value="others">Others</option>
                  </select>
                  </td>
              </tr>
			  <tr><span style='color:red;'><small><b><?php echo $categoryerr; ?></b></small></span></tr>

              <tr>
                  <td> <label for="budget">Budget:</label></td>
                  <td> <input type="number" id="budget" name="budget" placeholder="Prefferable rent for per day" min="1" width=300 style="width: 250px">
                  </td>
                  <td><span style='color:red;'><small><b><?php echo $budgeterr; ?></b></small></span></td>
              </tr>
			  
              
              <tr>
                <td colspan="2" align="center"><input type="submit" value="Request" name="Request" class="btnrequest"><br>
                </td>
            </tr>            
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
            <form action="../View/ViewRequests.php" method="get">
                <center><input type="submit" value="View Requests" name="btnViewRequests"></center>
            </form>
        </td>
    </tr>
</table>
<form action="../View/Dashboard.php" method="get">
            <br>
            <center><input type="submit" value="Back" name="btnback"></center>
        </form>
</div>
</body>
</html>