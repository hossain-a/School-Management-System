<?php 

$servername = "localhost";//hoting ip
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password,"educo");
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



 ?>