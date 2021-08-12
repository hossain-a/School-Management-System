<?php
session_start();




$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['admin']) || empty($_POST['passw'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass

$hash = password_hash($passw, PASSWORD_DEFAULT);

 $admin=$_POST['admin'];
 $passw=$_POST['passw'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "educo");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM admin WHERE   admin='$admin' and passw='$passw' ");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: admin_profile.php"); // Redirecting to other page
 }
 else
 {
 header("Location: admin_validate.php"); 
 
 }
 mysqli_close($conn); // Closing connection
 }
}



?>

