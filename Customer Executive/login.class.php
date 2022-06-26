<?php
session_start();

$usernameError=$passwordError="";
$ConfirmMessage=$ErrorMessage="";
$Name=$Gender=$DOB=$Username="";

if(isset($_POST["login"])){
    if(isset($_POST["remember"])){
        setcookie('uname',$_POST['username'],time()+20);
        setcookie('c_pass',$_POST['password'],time()+20);
        $_SESSION['Username']=$_POST["username"];
        $_SESSION['Password']=$_POST["password"];
		header("Location:dashboard.php"); 
        $user=$_SESSION['Username'];
        $pass=$_SESSION['Password'];
        if (empty($_POST["name"])) {
        $nameError = "Name is required";
        }
        
        if (empty($_POST["password"])) {
            $passwordError = "Password is Required";
        } 
        
        $isFound=false;
    
        if($usernameError=="" && $passwordError==""){
            $data_s = file_get_contents("data.json");  
            $data_s = json_decode($data_s, true); 
                foreach($data_s as $row){
                    if($row["Username"]==$user && $row["Password"]==$pass){
                    $isFound=true;
                    break;
                    }
                }
            }
    
            if($isFound){
                 $ConfirmMessage="";
                 header("location:account.php");
            }else{
                 $ErrorMessage="Wrong Username or Password";
            }
    }else{
        $_SESSION['Username']=$_POST["username"];
        $_SESSION['Password']=$_POST["password"];
        $user=$_SESSION['Username'];
        $pass=$_SESSION['Password'];
        if (empty($_POST["name"])) {
        $nameError = "Name is required";
        }
        
        if (empty($_POST["password"])) {
            $passwordError = "Password is Required";
        } 
        
        $isFound=false;
    
        if($usernameError=="" && $passwordError==""){
            $data_s = file_get_contents("data.json");  
            $data_s = json_decode($data_s, true); 
                foreach($data_s as $row){
                    if($row["Username"]==$user && $row["Password"]==$pass){
                    $isFound=true;
                    break;
                    }
                }
            }
    
            if($isFound){
                 $ConfirmMessage="Login Successfull";
                 header("location:dashboard.php");
            }else{
                 $ErrorMessage="Wrong Username or Password";
            }
    }

    }


?>