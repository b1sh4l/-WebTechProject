<?php
include("../Model/dbconnBorrowerFuncc.php");
$uname=$pmethod=$amount=$paiderr=$paiderr1="";
$count=0;
$filled=FALSE;

  if (($_SERVER["REQUEST_METHOD"] == "POST")&&(isset($_POST["Pay"]))){
    $uname  = $_POST["uname"];
    $pmethod  = $_POST["pmethod"];
    $amount  = $_POST["amount"];
    
        if (empty(strlen($_POST["pmethod"]))) {
          echo "";
        } else {
          $count++;
        }

     if( $count==1){
        $mydb=new DBfunc11();
        $conobj=$mydb->dbfuncopencon();
        $mydb->payAmount($uname,$pmethod,$amount,"payment",$conobj);
    }
    if($count==1){
         $paiderr="Your amount has been paid.";
              }
    else
    {
        $paiderr1 ="Your payment is not processed yet!";
    }

    }

?>