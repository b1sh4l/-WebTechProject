<?php
include ("../model/dbconBorrowerFunc.php");
include "../Controller/ProductCheck2.php";

$view_owner=$view_product=$view_rent="";
$view = array();
$count=$count2=0;


session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
<div class="containervc" id="containervc">
			<div class="header">
				<h3>Products</h3>
			</div>
<?php
$mydb=new DBfunc();
$conobj=$mydb->dbfuncopencon();
$mydata=$mydb->viewProduct("owneritemsforrent",$conobj);

echo '<form action="" method="post">';
echo '<table border="0px" align="center" id="tbvc">';
echo '<tr><th> </th><th>Product</th><th>Rent(per day)</th><th>Owner</th></tr>';
if($mydata->num_rows > 0)
{
  while($row=$mydata->fetch_assoc())
  { 
    //$view[] = $row['view'];
    echo "<tr><td>";
    echo '<ul class="orid">';
    echo "<input type='radio' id='orid' name='orid' value='".$row["orid"]."'>"; 
    echo '</ul>';
    echo "</td>";
    echo "<td align='center'>";
    echo $row["pname"];
    echo "</td>";
    echo "<td align='center'>";
    echo "BDT ".$row["rentp"];
    echo "</td>";
    echo "<td align='center'>";
    echo $row["ouname"];
    echo "</td> </tr>";
    //$view_cdate=$row["cdate"];
    //$view_complaint=$row["complaint"];
  }
  echo "<tr><td colspan='4' align='center'> <span style='color:red;'><small><b>".$oriderr."</b></small></span></td></tr>";
  echo "</table>";
}
$mydb->dbfunclosecon($conobj);
echo "<div class='rent' id='btnrent'>";

        echo '<br>';
        echo '<center><input type="submit" value="Rent" name="btnrent"></center>';
        echo "</div>";
        echo '</form>';


echo '<script type="text/javascript" src="../View/JS/bViewProduct.js"></script>';
echo '<script src="../View/JSjquery.js"></script>';


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