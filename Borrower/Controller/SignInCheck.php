<?php
$uname=$pass="";
$unameerr=$passerr=$signinerr="";
$count=$count2=0;
session_start();
if(isset($_SESSION["uname1"])){
    header("location: ../View/WelcomeBorrower.php");
}

if(isset($_POST["btnsignin"])){
 
$uname=$_POST["uname"];

if(empty($uname) ){

$unameerr= " Please enter a valid Username! ";

}
else{
    $_SESSION["uname"]=$uname;
    $count++;
    
}

$pass=$_POST["pass"];

if(empty($pass)){

$passerr= " Please enter a valid Password!";

}
else{
    $_SESSION["pass"]=$pass;
    $count++;
    
}


       if($count==2){
        $data = file_get_contents("../Model/BorrowerList.json");
        $mydata = json_decode($data);
        foreach($mydata as $myobject){
                if($myobject->uname == $uname && $myobject->pass == $pass){
                   $count2++;
                }

        }

        if($count2==1){
           
             header("location: ../View/WelcomeBorrower.php");
        }
        else{
            $signinerr="Wrong Username or Password!! Signin Failed!!";
          
        }
        

           
       }


}
?>