<?php
class DBfunc{
    function dbfuncopencon(){
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="borrower";
        
        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName);
        if($conn->connect_error)
        {
        echo "Can't create connection object.".$conn->connect_error;
        }
        return $conn;
    }
function fileComplaint($uname,$mobileno,$email,$complaint,$tablename,$conn)
{
    $q="INSERT INTO $tablename (uname,mobileno,email,complaint) VALUES 
    ('$uname','$mobileno','$email','$complaint')";
    
    if($conn->query($q)===TRUE)
    {
        echo "";
   
    }
    else{
        echo "cant insert".$conn->error;
    }
}

function viewComplaint($uname,$tablename,$conn)
{
    $q="SELECT * FROM $tablename WHERE uname='$uname'";
    $results = $conn->query($q);
    return $results;
}

function viewRequests($uname,$tablename,$conn)
{
    $q="SELECT * FROM $tablename WHERE uname='$uname'";
    $results = $conn->query($q);
    return $results;
}

function viewProduct($tablename,$conn)
{
    $q="SELECT * FROM $tablename";
    $results = $conn->query($q);
    return $results;
}

function viewAccInfo($conn,$tablename,$uname)
{
$q="SELECT * FROM $tablename WHERE uname='$uname'";
$results=$conn->query($q);
return $results;

}






function dbfunclosecon($conn){
    $conn->close();
}
}


?>