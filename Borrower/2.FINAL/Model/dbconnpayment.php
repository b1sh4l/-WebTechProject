<?php
include "../Controller/ViewProfileProcess.php";
$servername="localhost";
$username="root";
$password="";
$dbname="borrower";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	$q="SELECT * FROM payment;";
	$result=$conn->query($q);
	
	$output="";
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.= $row["pid"]." ".$row["uname"]." ".$row["pmethod"]." ".$row["amount"]." ".$row["pdate"];
            echo "<br>";
		}
		//$output.='</table>';
	}
	else
		echo "O results";
	
	
}
$conn->close();
echo $output;
?>
