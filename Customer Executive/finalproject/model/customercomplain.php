
<?php
require 'connect.php';

$sql = "SELECT * FROM complain ";

$result =$conn->query($sql);



$conn->close();

?>

