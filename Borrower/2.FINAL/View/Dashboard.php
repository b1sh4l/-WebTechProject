<?php
//include "../Controller/EditProfileCheck.php";
include "../Controller/ViewProfileProcess.php";
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
   <link rel="stylesheet" type="text/css" href="../View/CSS/bDashboard.css">
</head>
<Body>
  <div class="container">
     <div class="navigation">
     <ul>
     <li>
     <a href="#">
     <span class="title">Welcome!<?php echo " ".$view_fname; echo " ".$view_lname; ?></span>
     </a><br>
     <h3> Username: <?php echo $view_uname; ?></h3> 

      </li>
       <li>
        <a href="../View/ViewProfile.php">
       <span class="about">View Profile</span>
          </a>
        </li>
        <li>
            <a href="../View/RequestProduct.php">
           <span class="us">Request Product</span>
          </a>   
          </li>
                    <li>
            <a href="../View/ViewProduct.php">
           <span class="us">View Product</span>
          </a>   
          </li>
          <li>
          <a href="../View/BorrowerFileComplaint.php">
          <span class="us">File Complaint</span>
          </a>   
          </li>
          <li>
          <a href="../Controller/SignOutCheck.php">
          <span class="us">SignOut</span>
          </a>   
          </li>
          </ul>
     </div>
    </div>  
   <div class= "main">
      
    <div class="card-container" id="main">
   </div>
     
   <script src="../View/JS/jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("#load").on("click",function(e){
				$.ajax({
					url:"../Model/dbconnpayment.php",
					type:"POST",
					success:function(data){
						$("#main").html(data);
					}
				});
			});
		});
	</script>
   
</Body>
</html> 
     

         