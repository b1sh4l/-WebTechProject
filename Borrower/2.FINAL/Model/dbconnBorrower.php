<?php
$updateAccInfoerr="";
class DB
{
    function opencon(){
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="borrower";
        
        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName);
        if($conn->connect_error)
        {
        echo "Connection failed!.".$conn->connect_error;
        }
        return $conn;
    }
function SignUp($uname,$pass,$fname,$lname,$age,$gender,$mobileno,$email,$tablename,$conn)
{
    
    $q="INSERT INTO $tablename (uname,pass,firstname,lastname,age,gender,mobileno,email) VALUES 
    ('$uname','$pass','$fname','$lname',$age,'$gender','$mobileno','$email')";
    
    if($conn->query($q)===TRUE)
    {
        echo "";
      }
    else{
        echo "SignUp Unsuccessful!".$conn->error;
    }
}
/*
function SignUp($fname,$lname,$age,$gen,$contNo,$email,$pass,$tablename,$conn)
{

    $q="INSERT INTO $tablename (fname,lname,age,gen,contNo,email,pass) VALUES 
    
    if($conn->query($q)===TRUE)
    {
        header("Location: ../View");
      }
    else{
        echo "cant insert".$conn->error;
    }
}

*/
function viewRegisteredAccInfo($conn,$tablename,$uname,$pass)
{
$q="SELECT * FROM $tablename WHERE uname='$uname' && pass= '$pass'";
$results=$conn->query($q);
return $results;
}

function signin($uname,$pass,$tablename,$conn)
{
$q="SELECT * FROM $tablename WHERE uname='$uname' && pass= '$pass'";
$results=$conn->query($q);
return $results;
}

function viewAccInfo($conn,$tablename,$uname)
{
$q="SELECT * FROM $tablename WHERE uname='$uname'";
$results=$conn->query($q);
return $results;
}


function updateAccInfo($uname,$pass,$fname,$lname,$age,$gender,$mobileno,$email,$tablename,$conn)
{

    $q="UPDATE $tablename SET uname='$uname', pass='$pass', firstname='$fname',lastname='$lname',age=$age,gender='$gender',mobileno='$mobileno',email='$email' WHERE uname='$uname'";
    if($conn->query($q))
    {
        $updateAccInfoerr = "Information Updated";
    }
    else
    {
        echo "Information Cannot Be Updated".$conn->error;
    }

}


/*

function viewProduct($conn,$tablename)
{
    $q="SELECT * FROM $tablename";
   $results= $conn->query($q);
return $results;

}
function acceptOrder($sid,$proname,$catagory,$quantity,$price,$tablename,$conn)
{
    $q="INSERT INTO $tablename (sid,proname,catagory,quantity,price) VALUES 
    ($sid,'$proname','$catagory',$quantity,$price)";
    
    if($conn->query($q)===TRUE)
    {
        echo "message sent";
   
    }
    else{
        echo "cant insert".$conn->error;
    }
}

function fetchData($conn,$tablename)
{
    $q="SELECT * FROM $tablename";
   $results= $conn->query($q);
return $results;

}

function searchProducts($conn,$tablename,$proname)
{
$q="SELECT * FROM $tablename WHERE proname='$proname'";
$results=$conn->query($q);
return $results;
}
////////////////////////
function searchProductSpecificUser($conn,$tablename,$proname,$sid)
{
$q="SELECT * FROM $tablename WHERE proname='$proname' && sid='$sid'";
$results=$conn->query($q);
return $results;
}
////////////////////////

/////////////
function checkOrder($conn,$tablename,$sid)
{
$q="SELECT * FROM $tablename WHERE sid='$sid'";
$results=$conn->query($q);
return $results;
}
/////////////
function searchProductx($conn,$tablename,$proname)
{
$q="SELECT * FROM $tablename WHERE proname='$proname'";
$results=$conn->query($q);
return $results;
}
/////////
function AddToCart($tablename,$sid,$proname,$catagory,$quantity,$price,$conn){
  $q="INSERT INTO $tablename (sid,proname,catagory,quantity,price) VALUES 
    ($sid,'$proname','$catagory',$quantity,$price)";
      if($conn->query($q)===TRUE){
     echo "added to cart";
 }
 else{
     echo "cant add to cart".$conn->error;
 }
}
/////////////



function searchAcconutnm($conn,$tablename,$fname)
{
$q="SELECT * FROM $tablename WHERE fname='$fname'";
$results=$conn->query($q);
return $results;
}
function searchAcconutnmxxx($tablename,$fname,$lname,$age,$salary,$conn)
{
    $q="UPDATE $tablename SET fname='$fname', lname='$lname', age='$age', salary='$salary' WHERE fname='$fname'";
    if($conn->query($q))
    {
        echo "updated account info";
    }
    else
    {
        echo "not updated".$conn->error;
    }

}

function searchUser($conn,$tablename,$fname)
{
$q="SELECT * FROM $tablename WHERE fname='$fname'";
$results=$conn->query($q);
return $results;
}

function updateDatas($tablename,$fname,$lname,$age,$salary,$conn)
{
    $q="UPDATE $tablename SET fname='$fname', lname='$lname', age='$age', salary='$salary' WHERE fname='$fname'";
    if($conn->query($q))
    {
        echo "updated";
    }
    else
    {
        echo "not updated".$conn->error;
    }

}

function deleteData($tablename,$fname,$conn)
{
    $q="DELETE FROM $tablename WHERE fname='$fname'";
    if($conn->query($q))
    {
echo "deleted";
    }
    else{
        echo "not deleted".$conn->error;
    }
}*/
function closecon($conn){
    $conn->close();
}

}



?>