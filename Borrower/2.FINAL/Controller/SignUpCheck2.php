<?php
 include ("../model/dbconnBorrower.php");
 $fname=$lname=$uname=$pass=$cpass=$age=$gender=$mobileNo=$email="";
session_start();
if(isset($_SESSION["uname"])){

  header("location: ../View/BorrowerHP.php");

};


$mydb=new DB();
 $conobj=$mydb->opencon();
 $mydata=$mydb->viewRegisteredAccInfo($conobj,"borrowerlist",$_SESSION["uname"],$_SESSION["pass"]);
 
 if($mydata->num_rows > 0){
  while($row=$mydata->fetch_assoc())
      {
      $_SESSION["uname"]=$row["uname"];
      $pass=$row["pass"];
      $uname=$_SESSION["uname"];
      $fname=$row["firstname"];
      $lname=$row["lastname"];
      $age=$row["age"];
      $gender=$row["gender"];
      $mobileNo=$row["mobileno"];
      $email=$row["email"];
    }
      }
      else{
        echo "";
    }     

  $mydb->closecon($conobj);
  session_destroy();

?>
