
<?php
require 'connect.php';

$sql = "SELECT * FROM borrower ";

$result =$conn->query($sql);



$conn->close();

?>

