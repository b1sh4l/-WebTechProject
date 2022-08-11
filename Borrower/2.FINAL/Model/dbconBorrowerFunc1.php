<?php
class DBfunc1{
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
    function productRequest($uname,$pname,$category,$budget,$tablename,$conn)
{
    $q="INSERT INTO $tablename (uname,pname,category,budget) VALUES 
    ('$uname','$pname','$category',$budget)";
    
    if($conn->query($q)===TRUE)
    {
        echo "";
   
    }
    else{
        echo "cant insert".$conn->error;
    }
}


function searchProduct($orid,$tablename,$conn)
{
    $q="SELECT rentp FROM $tablename WHERE orid='$orid'";
    $results=$conn->query($q);
    return $results;
}

function dbfunclosecon($conn){
    $conn->close();
}
}


?>