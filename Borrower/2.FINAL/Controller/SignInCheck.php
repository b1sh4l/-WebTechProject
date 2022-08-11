<?php
include ("../model/dbconnBorrower.php");
$uname=$pass="";
$unameerr=$passerr=$signinerr="";
$sinflag=FALSE;
$count=0;

session_start();
if(isset($_SESSION["uname1"])){
  header("location: ../View/WelcomeBorrower.php");
};
  if (($_SERVER["REQUEST_METHOD"] == "POST")&&(isset($_POST["btnsignin"]))){
	   if (empty($_POST["uname"])) {
          $unameerr = "*Username can not be empty!";
        } else {
              $uname  =$_POST["uname"];
              $count++;
        }
        if(!empty($_POST["remember_me"])) 
        {
            setcookie ('uname', $uname, time()+ 3600);
        }
        else 
        {
            setcookie('uname',"");
        }
        echo"<br>";  
          if (empty($_POST["pass"])) {
            $passerr = "*Password can not be empty!";
              } else {
            $pass = $_POST["pass"];
              $count++;
               }
               if(!empty($_POST["remember_me"])) 
               {
                setcookie ('pass', $pass, time()+ 3600);
            }
            else 
            {
                setcookie('pass',"");
            }
          echo"<br>";

      if($sinflag===FALSE){  
        $mydb=new DB();
        $conobj=$mydb->opencon();
        $mydata=$mydb->signin($uname,$pass,"borrowerlist",$conobj);
        if($mydata->num_rows > 0){
          while($row=$mydata->fetch_assoc())
          {
           //logged in
           $_SESSION['uname'] = $row["uname"];
           $sinflag=TRUE;
        $mydb->closecon($conobj);
                 break;}
          }
       }
  if($sinflag===TRUE &&  $count==2)
  {
    header("location: ../View/Dashboard.php");
}
     else{
        $signinerr ="Wrong Username or Password!!";
}
}
 
?>
