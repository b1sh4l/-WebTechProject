<?php
include ("../model/dbconBorrowerFunc.php");

$view_cdate=$view_complaint="";
$view = array();
$count=$count2=0;


session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../View/CSS/bVC.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests</title>
</head>
<body>
<div class="container" id="container">
			<div class="header">
				<h3>Requests</h3>
			</div>
<?php
$mydb2=new DBfunc();
$conobj=$mydb2->dbfuncopencon();
$mydata=$mydb2->viewRequests($_SESSION["uname"],"brequesteditem",$conobj);

echo '<table border="0px" align="center" color: #fff>';
echo '<tr><th>Request ID</th><th>Product</th><th>Category</th><th>Budget</th><th>Posted</th></tr>';
if($mydata->num_rows > 0)
{
  while($row=$mydata->fetch_assoc())
  { 
    //$view[] = $row['view'];
    echo "<tr> <td align='center'>";
    echo $row["brid"];
    echo "</td>";
    echo "<td align='center'>";
    echo $row["pname"];
    echo "</td>";
    echo "<td align='center'>";
    echo $row["category"];
    echo "</td>";
    echo "<td align='center'>";
    echo $row["budget"];
    echo "</td>";
    echo "<td align='center'>";
    echo $row["brdate"];
    echo "</td></tr>";
    //$view_cdate=$row["cdate"];
    //$view_complaint=$row["complaint"];
  }
  echo "</table>";
}


/*$data = file_get_contents("../Model/BorrowerList.json");
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
            }*/
             
?>
</div>


</body>
</html>