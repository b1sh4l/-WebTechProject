<?php
include("../Model/dbconBorrowerFunc.php");
$uname=$mobileno=$email=$complaint=$complainterr=$senterr=$senterr1="";
$count=0;
$filled=FALSE;

  if (($_SERVER["REQUEST_METHOD"] == "POST")&&(isset($_POST["Submit"]))){
    	$uname=$_POST["uname"];
        $mobileno=$_POST["mobileNo"];
        $email=$_POST["email"];

    if(strlen($_POST["complaint"])<10)
    {
        $complainterr="* Enter in details in Comment ";
    }
    else
    {     
    	$complaint=$_POST["complaint"];
        $count++;
    }

  

     if( $count==1){
        $mydb1=new DBfunc();
        $conobj=$mydb1->dbfuncopencon();
        $mydb1->fileComplaint($uname,$mobileno,$email,$complaint,"borrowertoadmin",$conobj);
        $mydb1->dbfunclosecon($conobj);
    }
    if($count==1){
         $senterr="Your complaint is filed. Stay with us.";
              }
    else
    {
        $senterr1 ="Please explain your situation in detail.";
    }
    }

?>