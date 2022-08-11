<!DOCTYPE html>
<html>
<head>
	<?php 
    require 'css/text.php';
    require 'css/table.php';
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Borrower List</title>
</head>
<body>
	<center>

	<h1>Borrower List</h1>
    
	

	<?php 

	require '../model/borrower.php';
	
		if ($result === NULL) {
			echo "<p>No records found.</p>";
		}
		else {
			echo "<table id='borrower'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th>Borrower Id</th>";
			echo "<th>Borrower Name</th>";	
			echo "<th>Address</th>";
			echo "<th>Phone</th>";
			echo "<th>Product</th>";
			echo "</tr>";
			echo "</thead>";
			echo "<tbody>";

	if ($result->num_rows > 0) {

			while($row = $result->fetch_assoc()){ 
				echo "<tr>";
				echo "<td>" . $row["borrower id"] . "</td>";
				echo "<td>" . $row["borrower username"] . "</td>";
				echo "<td>" . $row["address"] . "</td>";
				echo "<td>" . $row["Phone"] . "</td>";
				echo "<td>" . $row["product"]. "</td>";

				
			}
			echo "</tbody>";
			echo "</table>";
		}
	}


	?>


    <br><br>

<form action="Homepage.php">
               <input type="submit" value="Go Back " >
               </form>
</center>
</body>
</html>



