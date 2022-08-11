<?php
include("../Model/dbconBorrowerFunc1.php");
$uname=$pname=$category=$budget="";
$rqsterr=$pnameerr=$categoryerr=$budgeterr=$unameerr="";
$count=0;
$filled=FALSE;

  if (($_SERVER["REQUEST_METHOD"] == "POST")&&(isset($_POST["Request"]))){
    	  $uname=$_POST["uname"];
        $category=$_POST["category"];
        

    if(strlen($_POST["pname"])<1)
    {
        $pnameerr="* Enter valid product name! ";
    }
    else
    {     
    	$pname=$_POST["pname"];
        $count++;
    }

    if(empty($_POST["budget"]))
    {
        $budgeterr="* Enter your budget! ";
    }
    else
    {     
    	$budget=$_POST["budget"];
        $count++;
    }

  

     if( $count==2){
        $mydb1=new DBfunc1();
        $conobj=$mydb1->dbfuncopencon();
        $mydb1->productRequest($uname,$pname,$category,$budget,"brequesteditem",$conobj);
        $mydb1->dbfunclosecon($conobj);
    }
    if($count==1){
         $paiderr="Your request has been posted.";
              }
    else
    {
        $paiderr1 ="Your request is not posted.";
    }
    }

?>