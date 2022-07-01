<?php
session_start();

$data = file_get_contents("../Model/BorrowerList.json");
        $mydata = json_decode($data);
        echo '<h2 align="center"><u>Profile Information</u></h2>';
        echo '<table border="2" align="center"';
        foreach($mydata as $myobject){
                if($myobject->uname == $_SESSION["uname"] ){
                        echo "<tr> <td>";    
                   echo "Username  : ".$myobject->uname."</br>"; 
                   echo "Fisrt name: ".$myobject->firstname."</br>";
                   echo "Last name : ".$myobject->lastname."</br>";
                   echo "Age       : ".$myobject->age."</br>";
                   echo "Gender    : ".$myobject->gender."</br>";
                   echo "Mobile No: ".$myobject->mobileNo."</br>";
                   echo "Email     : ".$myobject->email."</br>";
                   

                   echo "</td></td>";
                }
            }
            
            echo "</table>";

?>