<!DOCTYPE html>
<html>
<head>
	<?php 
    require 'css/text.php';
    require 'css/table.php';
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer Complain</title>
</head>
<body>
	<center>

	<h1>Customer Complain</h1>
    
	

	<?php 

	require '../model/customercomplain.php';
	
		if ($result === NULL) {
			echo "<p>No records found.</p>";
		}
		else {
			echo "<table id='complain'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th>Customer Id</th>";
			echo "<th>Customer Name</th>";	
			echo "<th>Email</th>";
			echo "<th>Phone</th>";
			echo "<th>Complain</th>";
			echo "</tr>";
			echo "</thead>";
			echo "<tbody>";

	if ($result->num_rows > 0) {

			while($row = $result->fetch_assoc()){ 
				echo "<tr>";
				echo "<td>" . $row["customer id"] . "</td>";
				echo "<td>" . $row["customer username"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
				echo "<td>" . $row["Phone"] . "</td>";
				echo "<td>" . $row["complain"]. "</td>";

				
			}
			echo "</tbody>";
			echo "</table>";
		}
	}


	?>

	<br><br>
	<form action="SearchCustomer.php">
    <input type="submit" value="Search">
    </form>
    <br><br>

<form action="Homepage.php">
               <input type="submit" value="Go Back " >
               </form>
</center>
</body>
</html>



