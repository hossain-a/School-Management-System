<?php 

require_once "connect.php";
$usname=$_POST["usname"];


$pass=$_POST["pass"];

$class=$_POST["class"];
$roll=$_POST["roll"];


$sql = "INSERT INTO uname(usname,pass,class,roll)

VALUES ('$usname','$pass','$class','$roll')";




if (mysqli_query($conn, $sql)) {

header("Location: addstudent.php"); 

echo "Record inserted successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



 ?>