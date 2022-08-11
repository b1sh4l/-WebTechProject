<?php
class DBfunc00{
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

function searchProduct($orid,$tablename,$conn)
{
    $q="SELECT 'rentp' FROM $tablename WHERE orid='$orid'";
    $results=$conn->query($q);
    return $results;
}

function dbfunclosecon($conn){
    $conn->close();
}
}

?>