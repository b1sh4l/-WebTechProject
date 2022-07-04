<?php
$fname=$lname=$pass=$cpass=$age=$gender=$mobileNo=$email="";
$fnameerr=$lnameerr=$passerr=$cpasserr=$ageerr=$gendererr=$mobileNoerr=$emailerr=$dataerr="";

$count=$count2=0;


if(isset($_POST["Save"])){

    $uname=$_POST["uname"];
    $data = file_get_contents("../Model/BorrowerList.json");
        $mydata = json_decode($data);
        foreach($mydata as $myobject){
                if($myobject->uname == $uname ){
                   $count2++;
                }

        }
 
$fname=$_POST["fname"];

if(empty($fname)|| !preg_match ("/^[a-zA-z]*$/", $fname) || strlen($fname)<3){

$fnameerr= " Please enter a valid name!";

}
else{
    $fname;
    $count++;
}

    $lname=$_POST["lname"];

    if(empty($lname)|| !preg_match ("/^[a-zA-z]*$/", $lname) || strlen($lname)<3)
    {
    $lnameerr= " Please enter a valid name!";
    }

    else
    {
    $lname;
    $count++;
    }

    /*$uname=$_POST["uname"];

    if(empty($uname)|| strlen($uname)<3)
    {
    $unameerr= " Please enter an username!";
    }

    else if(strlen($uname)!=3)
    {
        $unameerr=" Admin Id must be 5 Numbers";
    }
    else if ($count2==1)
    {
        $unameerr =" Please enter a unique id!This is already exist!!";
    }

    else
    {
    $uname;
    $count++;
    
    }*/


    $pass=$_POST["pass"];
    $uppercase = preg_match('@[A-Z]@', $pass);
    $lowercase = preg_match('@[a-z]@', $pass);
    $number    = preg_match('@[0-9]@', $pass);

    if(empty($pass) || !$uppercase || !$lowercase || !$number  || strlen($pass) < 8 ){

        $passerr= "Password should have at least 8 characters and include at least one upper case letter, one number, and one special character!";
        
        }
        else{
            $count++;
           
        }


        $age=$_POST["age"];
        if(empty("$age")){

        $ageerr= " Please enter age!";
    
       }
       else{
        $age;
        $count++;
        
    }

   
    
    if(isset($_POST["gender"])){
       
        $_POST["gender"];
        $count++;
    }
    else{
       
        $gendererr=" Please select gender!";
    }


    $mobileNo=$_POST["mobileNo"];
    if(empty("$mobileNo")){

    $mobileNoerr= " Please enter Mobile No!";
    
    }
    else if(strlen($mobileNo)!=11)
    {
        $mobileNoerr= " Please enter Valid Contact No!";
    }
    else
    {
        $mobileNo;
        $count++;
        
    }


    $email=$_POST["email"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
    $emailerr="Please enter a valid email!";
    }

    else
    {
    $email;
    $count++;
    }


    if($count==7){
    $data = file_get_contents("../Model/BorrowerList.json");
    $mydata = json_decode($data);
    foreach($mydata as $myobject){

        if($myobject->uname == $uname){
                $myobject->firstname = $fname;
                $myobject->lastname = $lname;
                $myobject->age = $age;
                $myobject->gender = $_POST["gender"];
                $myobject->mobileNo = $mobileNo;
                $myobject->email = $email;
            }


        }
       
        $jsondata = json_encode($mydata, JSON_PRETTY_PRINT);
        if(file_put_contents("../Model/BorrowerList.json", $jsondata)) 
        {
         $dataerr= "Profile is updated!"; 
        }
        else 
        {
         $dataerr= "Profile is not updated!";
         }

   }
}

?>
