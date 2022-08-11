<?php
include("../Model/dbconnBorrowerFunccc.php");
$orid=$oriderr="";
$rent=0;
$count=0;

if(isset($_POST["btnrent"])){
    
        
    if(isset($_POST["orid"])){
       
        $orid=$_POST["orid"];
        $count++;
    }
    else{
       
        $oriderr=" Please select a prodcut!";
    }

    if($count==1){
        $orid;
        $mydb1=new DBfunc00();
        $conobj=$mydb1->dbfuncopencon();
        $mydb1->searchProduct($orid,"owneritemsforrent",$conobj);
        
        if($mydata->num_rows > 0)
        {
            while($row=$mydata->fetch_assoc())
            { 
                $rent = $row["rentp"];
            }
        }
        header("location: ../View/BorrowerPayment.php");
    }

}
?>