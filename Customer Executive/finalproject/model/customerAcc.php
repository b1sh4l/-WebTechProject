
<?php
require 'connect.php';

$sql = "SELECT * FROM transaction  ";

$result =$conn->query($sql);



$conn->close();

function delete($id){
require 'connect.php';

$sql = "DELETE FROM transaction WHERE AccId = '$id'";
$result = $conn->query($sql);

 return true;

$conn->close();
}

function search($id){
require 'connect.php';

$sql = "SELECT * FROM transaction WHERE AccId = '$id'";

$result =$conn->query($sql);
 if($result->num_rows > 0){

 return true;
}
else{
	return false;
}

$conn->close();
}

?>

