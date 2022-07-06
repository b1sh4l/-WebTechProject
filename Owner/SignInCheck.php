<?php
$uname=$pass="";
$unameerr=$passerr=$signinerr="";
$count=$count2=0;
session_start();
if(isset($_SESSION["uname1"])){
    header("Welcome.php");
}


if(!empty($_POST["remember_me"])) {
    setcookie ("uname",$_POST["uname"],time()+ 3600*60);
    setcookie ("pass",$_POST["pass"],time()+ 3600*60);
}

else {
    setcookie("uname","");
    setcookie("pass","");
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
        $data = file_get_contents("List.json");
        $mydata = json_decode($data);
        foreach($mydata as $myobject){
                if($myobject->uname == $uname && $myobject->pass == $pass){
                   $count2++;
                }

        }


        if($count2==1){
           
header("location: Welcome.php");


        }
        else{
            $signinerr="Wrong Username or Password!!";
          
        }
         
       }


}
?>