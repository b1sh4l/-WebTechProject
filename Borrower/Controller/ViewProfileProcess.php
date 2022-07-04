<?php
$view_fname=$view_lname=$view_uname=$view_age=$view_gender=$view_mobileNo=$view_email=$pass="";
session_start();

$data = file_get_contents("../Model/BorrowerList.json");
        $mydata = json_decode($data);
        foreach($mydata as $myobject){
                if($myobject->uname == $_SESSION["uname"] ){
                  $view_uname = $myobject->uname; 
                  $view_fname = $myobject->firstname;
                  $view_lname = $myobject->lastname;
                  $view_age = $myobject->age;
                  $view_gender = $myobject->gender;
                  $view_mobileNo = $myobject->mobileNo;
                  $view_email = $myobject->email;
                  //$pass = $myobject->pass;
                }
            }
            
            echo "</table>";
            //session_destroy();

?>